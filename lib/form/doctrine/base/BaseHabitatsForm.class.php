<?php

/**
 * Habitats form base class.
 *
 * @method Habitats getObject() Returns the current form's model object
 *
 * @package    darwin
 * @subpackage form
 * @author     DB team <collections@naturalsciences.be>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseHabitatsForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                             => new sfWidgetFormInputHidden(),
      'name'                           => new sfWidgetFormTextarea(),
      'path'                           => new sfWidgetFormTextarea(),
      'code'                           => new sfWidgetFormTextarea(),
      'code_indexed'                   => new sfWidgetFormTextarea(),
      'description'                    => new sfWidgetFormTextarea(),
      'description_ts'                 => new sfWidgetFormTextarea(),
      'description_language_full_text' => new sfWidgetFormTextarea(),
      'habitat_system'                 => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'                             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'                           => new sfValidatorString(),
      'path'                           => new sfValidatorString(array('required' => false)),
      'code'                           => new sfValidatorString(),
      'code_indexed'                   => new sfValidatorString(array('required' => false)),
      'description'                    => new sfValidatorString(),
      'description_ts'                 => new sfValidatorString(array('required' => false)),
      'description_language_full_text' => new sfValidatorString(array('required' => false)),
      'habitat_system'                 => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('habitats[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Habitats';
  }

}
