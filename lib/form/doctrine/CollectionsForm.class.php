<?php

/**
 * Collections form.
 *
 * @package    form
 * @subpackage Collections
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 6174 2007-11-27 06:22:40Z fabien $
 */
class CollectionsForm extends BaseCollectionsForm
{
  public function configure()
  {
    unset(
        $this['path']
    );
    $this->widgetSchema['code'] = new sfWidgetFormInputText();
    $this->widgetSchema['name'] = new sfWidgetFormInputText();
    $this->widgetSchema['institution_ref'] = new widgetFormButtonRef(array(
       'model' => 'Institutions',
       'link_url' => 'institution/choose',
       'method' => 'getFamilyName',
       'box_title' => $this->getI18N()->__('Choose Institution'),
     ));

    $this->validatorSchema['collection_type'] = new sfValidatorChoice(array('choices' => array('mix' => 'mix', 'observation' => 'observation', 'physical' => 'physical'), 'required' => true));
    
    $this->widgetSchema['code_part_code_auto_copy']->setLabel('Auto copy code from specimen to parts');
  }
}