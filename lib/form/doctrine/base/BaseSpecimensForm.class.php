<?php

/**
 * Specimens form base class.
 *
 * @method Specimens getObject() Returns the current form's model object
 *
 * @package    darwin
 * @subpackage form
 * @author     DB team <collections@naturalsciences.be>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSpecimensForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                       => new sfWidgetFormInputHidden(),
      'category'                 => new sfWidgetFormTextarea(),
      'collection_ref'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Collections'), 'add_empty' => false)),
      'expedition_ref'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Expeditions'), 'add_empty' => true)),
      'gtu_ref'                  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Gtu'), 'add_empty' => false)),
      'taxon_ref'                => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Taxonomy'), 'add_empty' => true)),
      'litho_ref'                => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Lithostratigraphy'), 'add_empty' => true)),
      'chrono_ref'               => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Chronostratigraphy'), 'add_empty' => true)),
      'lithology_ref'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Lithology'), 'add_empty' => true)),
      'mineral_ref'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Mineralogy'), 'add_empty' => true)),
      'host_taxon_ref'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('HostTaxon'), 'add_empty' => true)),
      'host_specimen_ref'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('HostSpecimen'), 'add_empty' => true)),
      'host_relationship'        => new sfWidgetFormTextarea(),
      'acquisition_category'     => new sfWidgetFormTextarea(),
      'acquisition_date_mask'    => new sfWidgetFormInputText(),
      'acquisition_date'         => new sfWidgetFormTextarea(),
      'station_visible'          => new sfWidgetFormInputCheckbox(),
      'multimedia_visible'       => new sfWidgetFormInputCheckbox(),
      'ig_ref'                   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Igs'), 'add_empty' => true)),
      'with_individuals'         => new sfWidgetFormInputCheckbox(),
      'with_types'               => new sfWidgetFormInputCheckbox(),
      'collection_type'          => new sfWidgetFormTextarea(),
      'collection_code'          => new sfWidgetFormTextarea(),
      'collection_name'          => new sfWidgetFormTextarea(),
      'collection_is_public'     => new sfWidgetFormInputCheckbox(),
      'collection_parent_ref'    => new sfWidgetFormInputText(),
      'collection_path'          => new sfWidgetFormTextarea(),
      'expedition_name'          => new sfWidgetFormTextarea(),
      'expedition_name_ts'       => new sfWidgetFormTextarea(),
      'expedition_name_indexed'  => new sfWidgetFormTextarea(),
      'gtu_code'                 => new sfWidgetFormTextarea(),
      'gtu_parent_ref'           => new sfWidgetFormInputText(),
      'gtu_path'                 => new sfWidgetFormTextarea(),
      'gtu_from_date_mask'       => new sfWidgetFormInputText(),
      'gtu_from_date'            => new sfWidgetFormTextarea(),
      'gtu_to_date_mask'         => new sfWidgetFormInputText(),
      'gtu_to_date'              => new sfWidgetFormTextarea(),
      'gtu_tag_values_indexed'   => new sfWidgetFormTextarea(),
      'gtu_country_tag_indexed'  => new sfWidgetFormTextarea(),
      'gtu_country_tag_value'    => new sfWidgetFormTextarea(),
      'gtu_location'             => new sfWidgetFormTextarea(),
      'taxon_name'               => new sfWidgetFormTextarea(),
      'taxon_name_indexed'       => new sfWidgetFormTextarea(),
      'taxon_name_order_by'      => new sfWidgetFormTextarea(),
      'taxon_level_ref'          => new sfWidgetFormInputText(),
      'taxon_level_name'         => new sfWidgetFormTextarea(),
      'taxon_status'             => new sfWidgetFormTextarea(),
      'taxon_path'               => new sfWidgetFormTextarea(),
      'taxon_parent_ref'         => new sfWidgetFormInputText(),
      'taxon_extinct'            => new sfWidgetFormInputCheckbox(),
      'litho_name'               => new sfWidgetFormTextarea(),
      'litho_name_indexed'       => new sfWidgetFormTextarea(),
      'litho_name_order_by'      => new sfWidgetFormTextarea(),
      'litho_level_ref'          => new sfWidgetFormInputText(),
      'litho_level_name'         => new sfWidgetFormTextarea(),
      'litho_status'             => new sfWidgetFormTextarea(),
      'litho_local'              => new sfWidgetFormInputCheckbox(),
      'litho_color'              => new sfWidgetFormTextarea(),
      'litho_path'               => new sfWidgetFormTextarea(),
      'litho_parent_ref'         => new sfWidgetFormInputText(),
      'chrono_name'              => new sfWidgetFormTextarea(),
      'chrono_name_indexed'      => new sfWidgetFormTextarea(),
      'chrono_name_order_by'     => new sfWidgetFormTextarea(),
      'chrono_level_ref'         => new sfWidgetFormInputText(),
      'chrono_level_name'        => new sfWidgetFormTextarea(),
      'chrono_status'            => new sfWidgetFormTextarea(),
      'chrono_local'             => new sfWidgetFormInputCheckbox(),
      'chrono_color'             => new sfWidgetFormTextarea(),
      'chrono_path'              => new sfWidgetFormTextarea(),
      'chrono_parent_ref'        => new sfWidgetFormInputText(),
      'lithology_name'           => new sfWidgetFormTextarea(),
      'lithology_name_indexed'   => new sfWidgetFormTextarea(),
      'lithology_name_order_by'  => new sfWidgetFormTextarea(),
      'lithology_level_ref'      => new sfWidgetFormInputText(),
      'lithology_level_name'     => new sfWidgetFormTextarea(),
      'lithology_status'         => new sfWidgetFormTextarea(),
      'lithology_local'          => new sfWidgetFormInputCheckbox(),
      'lithology_color'          => new sfWidgetFormTextarea(),
      'lithology_path'           => new sfWidgetFormTextarea(),
      'lithology_parent_ref'     => new sfWidgetFormInputText(),
      'mineral_name'             => new sfWidgetFormTextarea(),
      'mineral_name_indexed'     => new sfWidgetFormTextarea(),
      'mineral_name_order_by'    => new sfWidgetFormTextarea(),
      'mineral_level_ref'        => new sfWidgetFormInputText(),
      'mineral_level_name'       => new sfWidgetFormTextarea(),
      'mineral_status'           => new sfWidgetFormTextarea(),
      'mineral_local'            => new sfWidgetFormInputCheckbox(),
      'mineral_color'            => new sfWidgetFormTextarea(),
      'mineral_path'             => new sfWidgetFormTextarea(),
      'mineral_parent_ref'       => new sfWidgetFormInputText(),
      'host_taxon_name'          => new sfWidgetFormTextarea(),
      'host_taxon_name_indexed'  => new sfWidgetFormTextarea(),
      'host_taxon_name_order_by' => new sfWidgetFormTextarea(),
      'host_taxon_level_ref'     => new sfWidgetFormInputText(),
      'host_taxon_level_name'    => new sfWidgetFormTextarea(),
      'host_taxon_status'        => new sfWidgetFormTextarea(),
      'host_taxon_path'          => new sfWidgetFormTextarea(),
      'host_taxon_parent_ref'    => new sfWidgetFormInputText(),
      'host_taxon_extinct'       => new sfWidgetFormInputCheckbox(),
      'ig_num'                   => new sfWidgetFormTextarea(),
      'ig_num_indexed'           => new sfWidgetFormTextarea(),
      'ig_date_mask'             => new sfWidgetFormInputText(),
      'collecting_methods_list'  => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'CollectingMethods')),
      'collecting_tools_list'    => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'CollectingTools')),
    ));

    $this->setValidators(array(
      'id'                       => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'category'                 => new sfValidatorString(array('required' => false)),
      'collection_ref'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Collections'))),
      'expedition_ref'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Expeditions'), 'required' => false)),
      'gtu_ref'                  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Gtu'))),
      'taxon_ref'                => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Taxonomy'), 'required' => false)),
      'litho_ref'                => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Lithostratigraphy'), 'required' => false)),
      'chrono_ref'               => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Chronostratigraphy'), 'required' => false)),
      'lithology_ref'            => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Lithology'), 'required' => false)),
      'mineral_ref'              => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Mineralogy'), 'required' => false)),
      'host_taxon_ref'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('HostTaxon'), 'required' => false)),
      'host_specimen_ref'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('HostSpecimen'), 'required' => false)),
      'host_relationship'        => new sfValidatorString(array('required' => false)),
      'acquisition_category'     => new sfValidatorString(array('required' => false)),
      'acquisition_date_mask'    => new sfValidatorInteger(array('required' => false)),
      'acquisition_date'         => new sfValidatorString(array('required' => false)),
      'station_visible'          => new sfValidatorBoolean(array('required' => false)),
      'multimedia_visible'       => new sfValidatorBoolean(array('required' => false)),
      'ig_ref'                   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Igs'), 'required' => false)),
      'with_individuals'         => new sfValidatorBoolean(array('required' => false)),
      'with_types'               => new sfValidatorBoolean(array('required' => false)),
      'collection_type'          => new sfValidatorString(array('required' => false)),
      'collection_code'          => new sfValidatorString(array('required' => false)),
      'collection_name'          => new sfValidatorString(array('required' => false)),
      'collection_is_public'     => new sfValidatorBoolean(array('required' => false)),
      'collection_parent_ref'    => new sfValidatorInteger(array('required' => false)),
      'collection_path'          => new sfValidatorString(array('required' => false)),
      'expedition_name'          => new sfValidatorString(array('required' => false)),
      'expedition_name_ts'       => new sfValidatorString(array('required' => false)),
      'expedition_name_indexed'  => new sfValidatorString(array('required' => false)),
      'gtu_code'                 => new sfValidatorString(array('required' => false)),
      'gtu_parent_ref'           => new sfValidatorInteger(array('required' => false)),
      'gtu_path'                 => new sfValidatorString(array('required' => false)),
      'gtu_from_date_mask'       => new sfValidatorInteger(array('required' => false)),
      'gtu_from_date'            => new sfValidatorString(array('required' => false)),
      'gtu_to_date_mask'         => new sfValidatorInteger(array('required' => false)),
      'gtu_to_date'              => new sfValidatorString(array('required' => false)),
      'gtu_tag_values_indexed'   => new sfValidatorString(array('required' => false)),
      'gtu_country_tag_indexed'  => new sfValidatorString(array('required' => false)),
      'gtu_country_tag_value'    => new sfValidatorString(array('required' => false)),
      'gtu_location'             => new sfValidatorString(array('required' => false)),
      'taxon_name'               => new sfValidatorString(array('required' => false)),
      'taxon_name_indexed'       => new sfValidatorString(array('required' => false)),
      'taxon_name_order_by'      => new sfValidatorString(array('required' => false)),
      'taxon_level_ref'          => new sfValidatorInteger(array('required' => false)),
      'taxon_level_name'         => new sfValidatorString(array('required' => false)),
      'taxon_status'             => new sfValidatorString(array('required' => false)),
      'taxon_path'               => new sfValidatorString(array('required' => false)),
      'taxon_parent_ref'         => new sfValidatorInteger(array('required' => false)),
      'taxon_extinct'            => new sfValidatorBoolean(array('required' => false)),
      'litho_name'               => new sfValidatorString(array('required' => false)),
      'litho_name_indexed'       => new sfValidatorString(array('required' => false)),
      'litho_name_order_by'      => new sfValidatorString(array('required' => false)),
      'litho_level_ref'          => new sfValidatorInteger(array('required' => false)),
      'litho_level_name'         => new sfValidatorString(array('required' => false)),
      'litho_status'             => new sfValidatorString(array('required' => false)),
      'litho_local'              => new sfValidatorBoolean(array('required' => false)),
      'litho_color'              => new sfValidatorString(array('required' => false)),
      'litho_path'               => new sfValidatorString(array('required' => false)),
      'litho_parent_ref'         => new sfValidatorInteger(array('required' => false)),
      'chrono_name'              => new sfValidatorString(array('required' => false)),
      'chrono_name_indexed'      => new sfValidatorString(array('required' => false)),
      'chrono_name_order_by'     => new sfValidatorString(array('required' => false)),
      'chrono_level_ref'         => new sfValidatorInteger(array('required' => false)),
      'chrono_level_name'        => new sfValidatorString(array('required' => false)),
      'chrono_status'            => new sfValidatorString(array('required' => false)),
      'chrono_local'             => new sfValidatorBoolean(array('required' => false)),
      'chrono_color'             => new sfValidatorString(array('required' => false)),
      'chrono_path'              => new sfValidatorString(array('required' => false)),
      'chrono_parent_ref'        => new sfValidatorInteger(array('required' => false)),
      'lithology_name'           => new sfValidatorString(array('required' => false)),
      'lithology_name_indexed'   => new sfValidatorString(array('required' => false)),
      'lithology_name_order_by'  => new sfValidatorString(array('required' => false)),
      'lithology_level_ref'      => new sfValidatorInteger(array('required' => false)),
      'lithology_level_name'     => new sfValidatorString(array('required' => false)),
      'lithology_status'         => new sfValidatorString(array('required' => false)),
      'lithology_local'          => new sfValidatorBoolean(array('required' => false)),
      'lithology_color'          => new sfValidatorString(array('required' => false)),
      'lithology_path'           => new sfValidatorString(array('required' => false)),
      'lithology_parent_ref'     => new sfValidatorInteger(array('required' => false)),
      'mineral_name'             => new sfValidatorString(array('required' => false)),
      'mineral_name_indexed'     => new sfValidatorString(array('required' => false)),
      'mineral_name_order_by'    => new sfValidatorString(array('required' => false)),
      'mineral_level_ref'        => new sfValidatorInteger(array('required' => false)),
      'mineral_level_name'       => new sfValidatorString(array('required' => false)),
      'mineral_status'           => new sfValidatorString(array('required' => false)),
      'mineral_local'            => new sfValidatorBoolean(array('required' => false)),
      'mineral_color'            => new sfValidatorString(array('required' => false)),
      'mineral_path'             => new sfValidatorString(array('required' => false)),
      'mineral_parent_ref'       => new sfValidatorInteger(array('required' => false)),
      'host_taxon_name'          => new sfValidatorString(array('required' => false)),
      'host_taxon_name_indexed'  => new sfValidatorString(array('required' => false)),
      'host_taxon_name_order_by' => new sfValidatorString(array('required' => false)),
      'host_taxon_level_ref'     => new sfValidatorInteger(array('required' => false)),
      'host_taxon_level_name'    => new sfValidatorString(array('required' => false)),
      'host_taxon_status'        => new sfValidatorString(array('required' => false)),
      'host_taxon_path'          => new sfValidatorString(array('required' => false)),
      'host_taxon_parent_ref'    => new sfValidatorInteger(array('required' => false)),
      'host_taxon_extinct'       => new sfValidatorBoolean(array('required' => false)),
      'ig_num'                   => new sfValidatorString(array('required' => false)),
      'ig_num_indexed'           => new sfValidatorString(array('required' => false)),
      'ig_date_mask'             => new sfValidatorInteger(array('required' => false)),
      'collecting_methods_list'  => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'CollectingMethods', 'required' => false)),
      'collecting_tools_list'    => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'CollectingTools', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('specimens[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Specimens';
  }

  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['collecting_methods_list']))
    {
      $this->setDefault('collecting_methods_list', $this->object->CollectingMethods->getPrimaryKeys());
    }

    if (isset($this->widgetSchema['collecting_tools_list']))
    {
      $this->setDefault('collecting_tools_list', $this->object->CollectingTools->getPrimaryKeys());
    }

  }

  protected function doSave($con = null)
  {
    $this->saveCollectingMethodsList($con);
    $this->saveCollectingToolsList($con);

    parent::doSave($con);
  }

  public function saveCollectingMethodsList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['collecting_methods_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->CollectingMethods->getPrimaryKeys();
    $values = $this->getValue('collecting_methods_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('CollectingMethods', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('CollectingMethods', array_values($link));
    }
  }

  public function saveCollectingToolsList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['collecting_tools_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->CollectingTools->getPrimaryKeys();
    $values = $this->getValue('collecting_tools_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('CollectingTools', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('CollectingTools', array_values($link));
    }
  }

}
