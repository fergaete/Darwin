<?php

class BaseMassActionForm extends sfFormSymfony
{
  protected static function getI18N()
  {
    return sfContext::getInstance()->getI18N();
  }

  public static function getActionsSources()
  {
    return array('' => '', 'specimen'=>'specimen','individual'=>'individual','part'=>'part');
  }

  public function getActionTitle($action)
  {
    $poss_actions = self::getPossibleActions(true);
    $poss_actions[$action];
  }

  public static function getPossibleActions($merged = false)
  {
    $result = array(
      'specimen' => array(
        'collection_ref' => self::getI18N()->__('Change Collection'),
        'taxon_ref' => self::getI18N()->__('Change Taxonomy'),
        'lithology_ref' => self::getI18N()->__('Change Lithology'),
        'chronostratigraphy_ref' => self::getI18N()->__('Change Chronostratigraphy'),
        'lithostratigraphy_ref' => self::getI18N()->__('Change Lithostratigraphy'),
        'mineralogy_ref' => self::getI18N()->__('Change Mineralogy'),
        'station_visible' => self::getI18N()->__('Change Station visibility'),
        'ig_ref' => self::getI18N()->__('Change I.G. Num'),
      ),
      'individual' => array(
        'type' => self::getI18N()->__('Change Individual Type'),
        'social_status' => self::getI18N()->__('Change Individual Social Status'),
        'sex' => self::getI18N()->__('Change Individual Sex'),
        'stage' => self::getI18N()->__('Change Individual Stage'),
      ),
      'part' => array(
        'maintenance' => self::getI18N()->__('Add Maintenance'),
        'building' => self::getI18N()->__('Change Building'),
        'floor' => self::getI18N()->__('Change Floor'),
        'room' => self::getI18N()->__('Change Room'),
        'row' => self::getI18N()->__('Change Row'),
        'shelf' => self::getI18N()->__('Change Shelf'),
        'container' => self::getI18N()->__('Change Container'),
        'sub_container' => self::getI18N()->__('Change Sub Container'),
      ),
    );
    if(!$merged) return $result;

    return $result['specimen'] + $result['individual'] + $result['part'];
  }

  protected function getFormNameForAction($action)
  {
    if($action == 'collection_ref')
      return 'MaCollectionRefForm';

    elseif($action == 'taxon_ref')
      return 'MaTaxonomyRefForm';

    elseif($action == 'lithology_ref')
      return 'MaLithologyRefForm';

    elseif($action == 'ig_ref')
      return 'MaIgRefForm';

    elseif($action == 'chronostratigraphy_ref')
      return 'MaChronostratigraphyRefForm';

    elseif($action == 'lithostratigraphy_ref')
      return 'MaLithostratigraphyRefForm';

    elseif($action == 'mineralogy_ref')
      return 'MaMineralogyRefForm';

    elseif($action == 'station_visible')
      return 'MaStationVisibleForm';

    elseif($action == 'type')
      return 'MaTypeForm';
    elseif($action == 'social_status')
      return 'MaSocialStatusForm';
    elseif($action == 'sex')
      return 'MaSexForm';
    elseif($action == 'stage')
      return 'MaStageForm';

    elseif($action == 'maintenance')
      return 'MaMaintenanceForm';
    elseif($action == 'building')
      return 'MaBuildingForm';
    elseif($action == 'floor')
      return 'MaFloorForm';
    elseif($action == 'room')
      return 'MaRoomForm';
    elseif($action == 'row')
      return 'MaRowForm';
    elseif($action == 'shelf')
      return 'MaShelfForm';
    elseif($action == 'container')
      return 'MaContainerForm';
    elseif($action == 'sub_container')
      return 'MaSubContainerForm';

    else
      return 'sfForm';
  }

  public function doMassAction($user_id, $is_admin = false)
  {
    if($this->isBound() && $this->isValid())
    {
      $actions_values = $this->getValue('MassActionForm');
      if($this->getValue('source') == 'specimen')
      {
        $query = Doctrine_Query::create()->update('Specimens s');
        if($is_admin == false)
           $query->andWhere('s.id in (select fct_filter_encodable_row(?,?,?))', array(implode(',',$this->getValue('item_list')),'spec_ref', $user_id));

      }
      elseif($this->getValue('source') == 'individual')
      {
        $query = Doctrine_Query::create()->update('SpecimenIndividuals s');
        if($is_admin == false)
          $query->andWhere('s.id in (select fct_filter_encodable_row(?,?,?))', array(implode(',',$this->getValue('item_list')),'individual_ref', $user_id));

      }
      else
      {
        $query = Doctrine_Query::create()->update('SpecimenParts s');
        if($is_admin == false)
          $query->andWhere('s.id in (select fct_filter_encodable_row(?,?,?))', array( implode(',',$this->getValue('item_list')),'part_ref', $user_id));
      }


      $group_action = 0;
      foreach($this->embeddedForms['MassActionForm'] as $key=> $form)
      {
        if (method_exists($this->getEmbeddedForm('MassActionForm')->getEmbeddedForm($key), 'doGroupedAction'))
        {
          $this->getEmbeddedForm('MassActionForm')->getEmbeddedForm($key)->doGroupedAction($query, $actions_values[$key], $this->getValue('item_list'));
          $group_action++;
        }

        if (method_exists($this->getEmbeddedForm('MassActionForm')->getEmbeddedForm($key), 'doMassAction'))
        {
          $this->getEmbeddedForm('MassActionForm')->getEmbeddedForm($key)->doMassAction($user_id, $this->getValue('item_list'), $actions_values[$key]);
        }
      }
      if($group_action)
        $query->execute();
    }
  }

  public function addSubForm($field_name)
  {

    $form_name = $this->getFormNameForAction($field_name);
    $subForm = new $form_name();

    $this->embeddedForms['MassActionForm']->embedForm($field_name, $subForm);
      //Re-embedding the container
    $this->embedForm('MassActionForm', $this->embeddedForms['MassActionForm']);
  }

  public function bind(array $taintedValues = null, array $taintedFiles = null)
  {
    if(isset($taintedValues['source']) && in_array($taintedValues['source'], array('specimen','individual','part')))
    {
      if($taintedValues['source'] == 'specimen')
        $model = 'Specimens';
      elseif($taintedValues['source'] == 'individual')
        $model = 'SpecimenIndividuals';
      else
        $model = 'SpecimenParts';

      $this->validatorSchema['item_list'] = new sfValidatorDoctrineChoice(array(
        'multiple' => true,
        'model' => $model,
        'min' => 1,
      ));
    }

    if(isset($taintedValues['field_action']) && is_array(($taintedValues['field_action'])) && count($taintedValues['field_action']) != 0 
      && isset($taintedValues['MassActionForm']) && is_array(($taintedValues['MassActionForm'])) && count($taintedValues['MassActionForm']) != 0 )
    {
      foreach($taintedValues['field_action'] as $form_name)
      {
          $this->addSubForm($form_name);
      }
    }
    parent::bind($taintedValues,$taintedFiles);
  }

  public function configure()
  {
    $action_sources = self::getActionsSources();

    sfWidgetFormSchema::setDefaultFormFormatterName('list');
    $this->widgetSchema->setNameFormat('mass_action[%s]');

    $this->widgetSchema['source'] = new sfWidgetFormChoice(array( 
     'choices' => $action_sources
    ));
    $this->validatorSchema['source'] = new sfValidatorPass();

    $this->widgetSchema['field_action'] = new sfWidgetFormSelectCheckbox(array( 
     'choices' =>  self::getPossibleActions(),
     'template' => '<div class="group_%group% fld_group"><label>%group%</label> %options%</div>',
    ));

    $this->validatorSchema['field_action'] = new sfValidatorPass();

    $this->widgetSchema['item_list'] = new sfWidgetFormChoice(array( 'choices' => array() ));

    $this->validatorSchema['item_list'] = new sfValidatorDoctrineChoice(array(
      'multiple' => true,
      'model' => 'Specimens',
      'min' => 0,
    ));

    $subForm = new sfForm();
    $this->embedForm('MassActionForm',$subForm);
  }
}
