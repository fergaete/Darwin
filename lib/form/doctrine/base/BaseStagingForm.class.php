<?php

/**
 * Staging form base class.
 *
 * @method Staging getObject() Returns the current form's model object
 *
 * @package    darwin
 * @subpackage form
 * @author     DB team <collections@naturalsciences.be>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseStagingForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                        => new sfWidgetFormInputHidden(),
      'spec_ref'                  => new sfWidgetFormInputText(),
      'import_ref'                => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Import'), 'add_empty' => false)),
      'parent_ref'                => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Parent'), 'add_empty' => true)),
      'path'                      => new sfWidgetFormTextarea(),
      'level'                     => new sfWidgetFormTextarea(),
      'category'                  => new sfWidgetFormTextarea(),
      'expedition_ref'            => new sfWidgetFormInputText(),
      'expedition_name'           => new sfWidgetFormTextarea(),
      'expedition_from_date'      => new sfWidgetFormTextarea(),
      'expedition_from_date_mask' => new sfWidgetFormInputText(),
      'expedition_to_date'        => new sfWidgetFormTextarea(),
      'expedition_to_date_mask'   => new sfWidgetFormInputText(),
      'station_visible'           => new sfWidgetFormInputCheckbox(),
      'gtu_ref'                   => new sfWidgetFormInputText(),
      'gtu_code'                  => new sfWidgetFormTextarea(),
      'gtu_from_date_mask'        => new sfWidgetFormInputText(),
      'gtu_from_date'             => new sfWidgetFormTextarea(),
      'gtu_to_date_mask'          => new sfWidgetFormInputText(),
      'gtu_to_date'               => new sfWidgetFormTextarea(),
      'gtu_latitude'              => new sfWidgetFormInputText(),
      'gtu_longitude'             => new sfWidgetFormInputText(),
      'gtu_lat_long_accuracy'     => new sfWidgetFormInputText(),
      'gtu_elevation'             => new sfWidgetFormInputText(),
      'gtu_elevation_accuracy'    => new sfWidgetFormInputText(),
      'taxon_ref'                 => new sfWidgetFormInputText(),
      'taxon_name'                => new sfWidgetFormTextarea(),
      'taxon_level_ref'           => new sfWidgetFormInputText(),
      'taxon_level_name'          => new sfWidgetFormTextarea(),
      'taxon_status'              => new sfWidgetFormTextarea(),
      'taxon_extinct'             => new sfWidgetFormInputCheckbox(),
      'litho_ref'                 => new sfWidgetFormInputText(),
      'litho_name'                => new sfWidgetFormTextarea(),
      'litho_level_ref'           => new sfWidgetFormInputText(),
      'litho_level_name'          => new sfWidgetFormTextarea(),
      'litho_status'              => new sfWidgetFormTextarea(),
      'litho_local'               => new sfWidgetFormInputCheckbox(),
      'litho_color'               => new sfWidgetFormTextarea(),
      'chrono_ref'                => new sfWidgetFormInputText(),
      'chrono_name'               => new sfWidgetFormTextarea(),
      'chrono_level_ref'          => new sfWidgetFormInputText(),
      'chrono_level_name'         => new sfWidgetFormTextarea(),
      'chrono_status'             => new sfWidgetFormTextarea(),
      'chrono_local'              => new sfWidgetFormInputCheckbox(),
      'chrono_color'              => new sfWidgetFormTextarea(),
      'lithology_ref'             => new sfWidgetFormInputText(),
      'lithology_name'            => new sfWidgetFormTextarea(),
      'lithology_level_ref'       => new sfWidgetFormInputText(),
      'lithology_level_name'      => new sfWidgetFormTextarea(),
      'lithology_status'          => new sfWidgetFormTextarea(),
      'lithology_local'           => new sfWidgetFormInputCheckbox(),
      'lithology_color'           => new sfWidgetFormTextarea(),
      'mineral_ref'               => new sfWidgetFormInputText(),
      'mineral_name'              => new sfWidgetFormTextarea(),
      'mineral_level_ref'         => new sfWidgetFormInputText(),
      'mineral_level_name'        => new sfWidgetFormTextarea(),
      'mineral_status'            => new sfWidgetFormTextarea(),
      'mineral_local'             => new sfWidgetFormInputCheckbox(),
      'mineral_color'             => new sfWidgetFormTextarea(),
      'host_taxon_ref'            => new sfWidgetFormInputText(),
      'host_relationship'         => new sfWidgetFormTextarea(),
      'host_taxon_name'           => new sfWidgetFormTextarea(),
      'host_taxon_level_ref'      => new sfWidgetFormInputText(),
      'host_taxon_level_name'     => new sfWidgetFormTextarea(),
      'host_taxon_status'         => new sfWidgetFormTextarea(),
      'host_specimen_ref'         => new sfWidgetFormInputText(),
      'ig_ref'                    => new sfWidgetFormInputHidden(),
      'ig_num'                    => new sfWidgetFormTextarea(),
      'ig_date_mask'              => new sfWidgetFormInputText(),
      'ig_date'                   => new sfWidgetFormTextarea(),
      'acquisition_category'      => new sfWidgetFormTextarea(),
      'acquisition_date_mask'     => new sfWidgetFormInputText(),
      'acquisition_date'          => new sfWidgetFormTextarea(),
      'individual_ref'            => new sfWidgetFormInputText(),
      'individual_type'           => new sfWidgetFormTextarea(),
      'individual_sex'            => new sfWidgetFormTextarea(),
      'individual_state'          => new sfWidgetFormTextarea(),
      'individual_stage'          => new sfWidgetFormTextarea(),
      'individual_social_status'  => new sfWidgetFormTextarea(),
      'individual_rock_form'      => new sfWidgetFormTextarea(),
      'individual_count_min'      => new sfWidgetFormInputText(),
      'individual_count_max'      => new sfWidgetFormInputText(),
      'part_ref'                  => new sfWidgetFormInputText(),
      'part'                      => new sfWidgetFormTextarea(),
      'part_status'               => new sfWidgetFormTextarea(),
      'building'                  => new sfWidgetFormTextarea(),
      'floor'                     => new sfWidgetFormTextarea(),
      'room'                      => new sfWidgetFormTextarea(),
      'row'                       => new sfWidgetFormTextarea(),
      'shelf'                     => new sfWidgetFormTextarea(),
      'container_type'            => new sfWidgetFormTextarea(),
      'container_storage'         => new sfWidgetFormTextarea(),
      'container'                 => new sfWidgetFormTextarea(),
      'sub_container_type'        => new sfWidgetFormTextarea(),
      'sub_container_storage'     => new sfWidgetFormTextarea(),
      'sub_container'             => new sfWidgetFormTextarea(),
      'part_count_min'            => new sfWidgetFormInputText(),
      'part_count_max'            => new sfWidgetFormInputText(),
      'specimen_status'           => new sfWidgetFormTextarea(),
      'complete'                  => new sfWidgetFormInputCheckbox(),
      'surnumerary'               => new sfWidgetFormInputCheckbox(),
    ));

    $this->setValidators(array(
      'id'                        => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'spec_ref'                  => new sfValidatorInteger(array('required' => false)),
      'import_ref'                => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Import'))),
      'parent_ref'                => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Parent'), 'required' => false)),
      'path'                      => new sfValidatorString(array('required' => false)),
      'level'                     => new sfValidatorString(array('required' => false)),
      'category'                  => new sfValidatorString(array('required' => false)),
      'expedition_ref'            => new sfValidatorPass(array('required' => false)),
      'expedition_name'           => new sfValidatorString(array('required' => false)),
      'expedition_from_date'      => new sfValidatorString(array('required' => false)),
      'expedition_from_date_mask' => new sfValidatorInteger(array('required' => false)),
      'expedition_to_date'        => new sfValidatorString(array('required' => false)),
      'expedition_to_date_mask'   => new sfValidatorInteger(array('required' => false)),
      'station_visible'           => new sfValidatorBoolean(array('required' => false)),
      'gtu_ref'                   => new sfValidatorInteger(array('required' => false)),
      'gtu_code'                  => new sfValidatorString(array('required' => false)),
      'gtu_from_date_mask'        => new sfValidatorInteger(array('required' => false)),
      'gtu_from_date'             => new sfValidatorString(array('required' => false)),
      'gtu_to_date_mask'          => new sfValidatorInteger(array('required' => false)),
      'gtu_to_date'               => new sfValidatorString(array('required' => false)),
      'gtu_latitude'              => new sfValidatorNumber(array('required' => false)),
      'gtu_longitude'             => new sfValidatorNumber(array('required' => false)),
      'gtu_lat_long_accuracy'     => new sfValidatorNumber(array('required' => false)),
      'gtu_elevation'             => new sfValidatorNumber(array('required' => false)),
      'gtu_elevation_accuracy'    => new sfValidatorNumber(array('required' => false)),
      'taxon_ref'                 => new sfValidatorInteger(array('required' => false)),
      'taxon_name'                => new sfValidatorString(array('required' => false)),
      'taxon_level_ref'           => new sfValidatorInteger(array('required' => false)),
      'taxon_level_name'          => new sfValidatorString(array('required' => false)),
      'taxon_status'              => new sfValidatorString(array('required' => false)),
      'taxon_extinct'             => new sfValidatorBoolean(array('required' => false)),
      'litho_ref'                 => new sfValidatorInteger(array('required' => false)),
      'litho_name'                => new sfValidatorString(array('required' => false)),
      'litho_level_ref'           => new sfValidatorInteger(array('required' => false)),
      'litho_level_name'          => new sfValidatorString(array('required' => false)),
      'litho_status'              => new sfValidatorString(array('required' => false)),
      'litho_local'               => new sfValidatorBoolean(array('required' => false)),
      'litho_color'               => new sfValidatorString(array('required' => false)),
      'chrono_ref'                => new sfValidatorInteger(array('required' => false)),
      'chrono_name'               => new sfValidatorString(array('required' => false)),
      'chrono_level_ref'          => new sfValidatorInteger(array('required' => false)),
      'chrono_level_name'         => new sfValidatorString(array('required' => false)),
      'chrono_status'             => new sfValidatorString(array('required' => false)),
      'chrono_local'              => new sfValidatorBoolean(array('required' => false)),
      'chrono_color'              => new sfValidatorString(array('required' => false)),
      'lithology_ref'             => new sfValidatorInteger(array('required' => false)),
      'lithology_name'            => new sfValidatorString(array('required' => false)),
      'lithology_level_ref'       => new sfValidatorInteger(array('required' => false)),
      'lithology_level_name'      => new sfValidatorString(array('required' => false)),
      'lithology_status'          => new sfValidatorString(array('required' => false)),
      'lithology_local'           => new sfValidatorBoolean(array('required' => false)),
      'lithology_color'           => new sfValidatorString(array('required' => false)),
      'mineral_ref'               => new sfValidatorInteger(array('required' => false)),
      'mineral_name'              => new sfValidatorString(array('required' => false)),
      'mineral_level_ref'         => new sfValidatorInteger(array('required' => false)),
      'mineral_level_name'        => new sfValidatorString(array('required' => false)),
      'mineral_status'            => new sfValidatorString(array('required' => false)),
      'mineral_local'             => new sfValidatorBoolean(array('required' => false)),
      'mineral_color'             => new sfValidatorString(array('required' => false)),
      'host_taxon_ref'            => new sfValidatorInteger(array('required' => false)),
      'host_relationship'         => new sfValidatorString(array('required' => false)),
      'host_taxon_name'           => new sfValidatorString(array('required' => false)),
      'host_taxon_level_ref'      => new sfValidatorInteger(array('required' => false)),
      'host_taxon_level_name'     => new sfValidatorString(array('required' => false)),
      'host_taxon_status'         => new sfValidatorString(array('required' => false)),
      'host_specimen_ref'         => new sfValidatorInteger(array('required' => false)),
      'ig_ref'                    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('ig_ref')), 'empty_value' => $this->getObject()->get('ig_ref'), 'required' => false)),
      'ig_num'                    => new sfValidatorString(array('required' => false)),
      'ig_date_mask'              => new sfValidatorInteger(array('required' => false)),
      'ig_date'                   => new sfValidatorString(array('required' => false)),
      'acquisition_category'      => new sfValidatorString(array('required' => false)),
      'acquisition_date_mask'     => new sfValidatorInteger(array('required' => false)),
      'acquisition_date'          => new sfValidatorString(array('required' => false)),
      'individual_ref'            => new sfValidatorInteger(array('required' => false)),
      'individual_type'           => new sfValidatorString(array('required' => false)),
      'individual_sex'            => new sfValidatorString(array('required' => false)),
      'individual_state'          => new sfValidatorString(array('required' => false)),
      'individual_stage'          => new sfValidatorString(array('required' => false)),
      'individual_social_status'  => new sfValidatorString(array('required' => false)),
      'individual_rock_form'      => new sfValidatorString(array('required' => false)),
      'individual_count_min'      => new sfValidatorInteger(array('required' => false)),
      'individual_count_max'      => new sfValidatorInteger(array('required' => false)),
      'part_ref'                  => new sfValidatorInteger(array('required' => false)),
      'part'                      => new sfValidatorString(array('required' => false)),
      'part_status'               => new sfValidatorString(array('required' => false)),
      'building'                  => new sfValidatorString(array('required' => false)),
      'floor'                     => new sfValidatorString(array('required' => false)),
      'room'                      => new sfValidatorString(array('required' => false)),
      'row'                       => new sfValidatorString(array('required' => false)),
      'shelf'                     => new sfValidatorString(array('required' => false)),
      'container_type'            => new sfValidatorString(array('required' => false)),
      'container_storage'         => new sfValidatorString(array('required' => false)),
      'container'                 => new sfValidatorString(array('required' => false)),
      'sub_container_type'        => new sfValidatorString(array('required' => false)),
      'sub_container_storage'     => new sfValidatorString(array('required' => false)),
      'sub_container'             => new sfValidatorString(array('required' => false)),
      'part_count_min'            => new sfValidatorInteger(array('required' => false)),
      'part_count_max'            => new sfValidatorInteger(array('required' => false)),
      'specimen_status'           => new sfValidatorString(array('required' => false)),
      'complete'                  => new sfValidatorBoolean(array('required' => false)),
      'surnumerary'               => new sfValidatorBoolean(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('staging[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Staging';
  }

}
