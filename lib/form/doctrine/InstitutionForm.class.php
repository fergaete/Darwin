<?php

/**
 * Institution form.
 *
 * @package    darwin
 * @subpackage form
 * @author     DB team <collections@naturalsciences.be>
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class InstitutionForm extends BaseInstitutionForm
{
  public function configure()
  {
    unset($this['is_physical'], $this['formated_name_indexed'], $this['formated_name_ts']);
    
    $this->widgetSchema['additional_names'] = new sfWidgetFormInput();
    $this->widgetSchema['sub_type'] = new widgetFormSelectComplete(array(
        'model' => 'Institution',
        'table_method' => 'getDistinctSubType',
        'method' => 'getType',
        'key_method' => 'getType',
        'add_empty' => true,
	'change_label' => 'Pick a type in the list',
	'add_label' => 'Add another type',
    ));
  }
}
