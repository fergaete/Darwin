<?php

/**
 * Igs form base class.
 *
 * @method Igs getObject() Returns the current form's model object
 *
 * @package    darwin
 * @subpackage form
 * @author     DB team <collections@naturalsciences.be>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseIgsForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'ig_num'       => new sfWidgetFormTextarea(),
      'ig_date_mask' => new sfWidgetFormInputText(),
      'ig_date'      => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'ig_num'       => new sfValidatorString(),
      'ig_date_mask' => new sfValidatorInteger(array('required' => false)),
      'ig_date'      => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('igs[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Igs';
  }

}
