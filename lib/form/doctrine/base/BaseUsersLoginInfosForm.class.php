<?php

/**
 * UsersLoginInfos form base class.
 *
 * @method UsersLoginInfos getObject() Returns the current form's model object
 *
 * @package    darwin
 * @subpackage form
 * @author     DB team <collections@naturalsciences.be>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseUsersLoginInfosForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'user_ref'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'add_empty' => false)),
      'login_type'   => new sfWidgetFormTextarea(),
      'user_name'    => new sfWidgetFormTextarea(),
      'password'     => new sfWidgetFormTextarea(),
      'login_system' => new sfWidgetFormTextarea(),
      'last_seen'    => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'user_ref'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('User'))),
      'login_type'   => new sfValidatorString(array('required' => false)),
      'user_name'    => new sfValidatorString(array('required' => false)),
      'password'     => new sfValidatorString(array('required' => false)),
      'login_system' => new sfValidatorString(array('required' => false)),
      'last_seen'    => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('users_login_infos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'UsersLoginInfos';
  }

}
