<?php

/**
 * Specimens form.
 *
 * @package    form
 * @subpackage Specimens
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 6174 2007-11-27 06:22:40Z fabien $
 */
class SpecimensForm extends BaseSpecimensForm
{
  public function configure()
  {
    $this->setDefaults(array(
        'gtu_ref' => 0,
        'expedition_ref' => 0,
    ));
    $this->widgetSchema->setNameFormat('specimen[%s]');
    //$this->widgetSchema['collection_ref'] = new sfWidgetFormInputHidden();
    $this->widgetSchema['collection_ref'] = new widgetFormButtonRef(array(
       'model' => 'Collections',
       'method' => 'getName',
     ));
    $this->widgetSchema['acquisition_category'] = new sfWidgetFormChoice(array(
      'choices' =>  SpecimensTable::getDistinctCategories(),
    ));

    $this->widgetSchema['accuracy'] = new sfWidgetFormChoice(array(
        'choices'  => array('exact','imprecise'),
        'expanded' => true,

    ));
    
    $this->widgetSchema['collecting_tool'] = new sfWidgetFormDoctrineChoice(array(
        'model' => 'Specimens',
        'table_method' => 'getDistinctTools',
        'method' => 'getTool',
        'key_method' => 'getTool',
        'add_empty' => true,
    ));

    $this->widgetSchema['collecting_method'] = new sfWidgetFormDoctrineChoice(array(
        'model' => 'Specimens',
        'table_method' => 'getDistinctMethods',
        'method' => 'getMethod',
        'key_method' => 'getMethod',
        'add_empty' => true,
    ));
    
    $this->validatorSchema['acquisition_category'] = new sfValidatorChoice(array(
        'choices' => SpecimensTable::getDistinctCategories(),
        'required' => false,
        ));

    $this->validatorSchema['accuracy'] = new sfValidatorChoice(array(
        'choices' => array(0,1),
        'required' => false,
        ));
        
    $this->validatorSchema['collection_ref'] = new sfValidatorInteger();

    $this->validatorSchema->setPostValidator(
        new sfValidatorSchemaCompare('specimen_count_min', '<=', 'specimen_count_max',
            array(),
            array('invalid' => 'The min number ("%left_field%") must be lower or equal the max number ("%right_field%")' )
            )
        );
    $this->setDefault('accuracy', 1);
//     $this->validatorSchema->setOption('allow_extra_fields', true);
  }
}