<?php

/**
 * Specimens filter form base class.
 *
 * @package    darwin
 * @subpackage filter
 * @author     DB team <collections@naturalsciences.be>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseSpecimensFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'category'                 => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'collection_ref'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Collections'), 'add_empty' => true)),
      'expedition_ref'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Expeditions'), 'add_empty' => true)),
      'gtu_ref'                  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Gtu'), 'add_empty' => true)),
      'taxon_ref'                => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Taxonomy'), 'add_empty' => true)),
      'litho_ref'                => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Lithostratigraphy'), 'add_empty' => true)),
      'chrono_ref'               => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Chronostratigraphy'), 'add_empty' => true)),
      'lithology_ref'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Lithology'), 'add_empty' => true)),
      'mineral_ref'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Mineralogy'), 'add_empty' => true)),
      'host_taxon_ref'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('HostTaxon'), 'add_empty' => true)),
      'host_specimen_ref'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('HostSpecimen'), 'add_empty' => true)),
      'host_relationship'        => new sfWidgetFormFilterInput(),
      'acquisition_category'     => new sfWidgetFormFilterInput(),
      'acquisition_date_mask'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'acquisition_date'         => new sfWidgetFormFilterInput(),
      'station_visible'          => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'multimedia_visible'       => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'ig_ref'                   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Igs'), 'add_empty' => true)),
      'collection_type'          => new sfWidgetFormFilterInput(),
      'collection_code'          => new sfWidgetFormFilterInput(),
      'collection_name'          => new sfWidgetFormFilterInput(),
      'collection_is_public'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'collection_parent_ref'    => new sfWidgetFormFilterInput(),
      'collection_path'          => new sfWidgetFormFilterInput(),
      'expedition_name'          => new sfWidgetFormFilterInput(),
      'expedition_name_ts'       => new sfWidgetFormFilterInput(),
      'expedition_name_indexed'  => new sfWidgetFormFilterInput(),
      'gtu_code'                 => new sfWidgetFormFilterInput(),
      'gtu_parent_ref'           => new sfWidgetFormFilterInput(),
      'gtu_path'                 => new sfWidgetFormFilterInput(),
      'gtu_from_date_mask'       => new sfWidgetFormFilterInput(),
      'gtu_from_date'            => new sfWidgetFormFilterInput(),
      'gtu_to_date_mask'         => new sfWidgetFormFilterInput(),
      'gtu_to_date'              => new sfWidgetFormFilterInput(),
      'gtu_tag_values_indexed'   => new sfWidgetFormFilterInput(),
      'gtu_country_tag_indexed'  => new sfWidgetFormFilterInput(),
      'gtu_country_tag_value'    => new sfWidgetFormFilterInput(),
      'gtu_location'             => new sfWidgetFormFilterInput(),
      'taxon_name'               => new sfWidgetFormFilterInput(),
      'taxon_name_indexed'       => new sfWidgetFormFilterInput(),
      'taxon_name_order_by'      => new sfWidgetFormFilterInput(),
      'taxon_level_ref'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'taxon_level_name'         => new sfWidgetFormFilterInput(),
      'taxon_status'             => new sfWidgetFormFilterInput(),
      'taxon_path'               => new sfWidgetFormFilterInput(),
      'taxon_parent_ref'         => new sfWidgetFormFilterInput(),
      'taxon_extinct'            => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'litho_name'               => new sfWidgetFormFilterInput(),
      'litho_name_indexed'       => new sfWidgetFormFilterInput(),
      'litho_name_order_by'      => new sfWidgetFormFilterInput(),
      'litho_level_ref'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'litho_level_name'         => new sfWidgetFormFilterInput(),
      'litho_status'             => new sfWidgetFormFilterInput(),
      'litho_local'              => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'litho_color'              => new sfWidgetFormFilterInput(),
      'litho_path'               => new sfWidgetFormFilterInput(),
      'litho_parent_ref'         => new sfWidgetFormFilterInput(),
      'chrono_name'              => new sfWidgetFormFilterInput(),
      'chrono_name_indexed'      => new sfWidgetFormFilterInput(),
      'chrono_name_order_by'     => new sfWidgetFormFilterInput(),
      'chrono_level_ref'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'chrono_level_name'        => new sfWidgetFormFilterInput(),
      'chrono_status'            => new sfWidgetFormFilterInput(),
      'chrono_local'             => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'chrono_color'             => new sfWidgetFormFilterInput(),
      'chrono_path'              => new sfWidgetFormFilterInput(),
      'chrono_parent_ref'        => new sfWidgetFormFilterInput(),
      'lithology_name'           => new sfWidgetFormFilterInput(),
      'lithology_name_indexed'   => new sfWidgetFormFilterInput(),
      'lithology_name_order_by'  => new sfWidgetFormFilterInput(),
      'lithology_level_ref'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'lithology_level_name'     => new sfWidgetFormFilterInput(),
      'lithology_status'         => new sfWidgetFormFilterInput(),
      'lithology_local'          => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'lithology_color'          => new sfWidgetFormFilterInput(),
      'lithology_path'           => new sfWidgetFormFilterInput(),
      'lithology_parent_ref'     => new sfWidgetFormFilterInput(),
      'mineral_name'             => new sfWidgetFormFilterInput(),
      'mineral_name_indexed'     => new sfWidgetFormFilterInput(),
      'mineral_name_order_by'    => new sfWidgetFormFilterInput(),
      'mineral_level_ref'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'mineral_level_name'       => new sfWidgetFormFilterInput(),
      'mineral_status'           => new sfWidgetFormFilterInput(),
      'mineral_local'            => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'mineral_color'            => new sfWidgetFormFilterInput(),
      'mineral_path'             => new sfWidgetFormFilterInput(),
      'mineral_parent_ref'       => new sfWidgetFormFilterInput(),
      'host_taxon_name'          => new sfWidgetFormFilterInput(),
      'host_taxon_name_indexed'  => new sfWidgetFormFilterInput(),
      'host_taxon_name_order_by' => new sfWidgetFormFilterInput(),
      'host_taxon_level_ref'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'host_taxon_level_name'    => new sfWidgetFormFilterInput(),
      'host_taxon_status'        => new sfWidgetFormFilterInput(),
      'host_taxon_path'          => new sfWidgetFormFilterInput(),
      'host_taxon_parent_ref'    => new sfWidgetFormFilterInput(),
      'host_taxon_extinct'       => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'ig_num'                   => new sfWidgetFormFilterInput(),
      'ig_num_indexed'           => new sfWidgetFormFilterInput(),
      'ig_date_mask'             => new sfWidgetFormFilterInput(),
      'collecting_methods_list'  => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'CollectingMethods')),
      'collecting_tools_list'    => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'CollectingTools')),
    ));

    $this->setValidators(array(
      'category'                 => new sfValidatorPass(array('required' => false)),
      'collection_ref'           => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Collections'), 'column' => 'id')),
      'expedition_ref'           => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Expeditions'), 'column' => 'id')),
      'gtu_ref'                  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Gtu'), 'column' => 'id')),
      'taxon_ref'                => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Taxonomy'), 'column' => 'id')),
      'litho_ref'                => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Lithostratigraphy'), 'column' => 'id')),
      'chrono_ref'               => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Chronostratigraphy'), 'column' => 'id')),
      'lithology_ref'            => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Lithology'), 'column' => 'id')),
      'mineral_ref'              => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Mineralogy'), 'column' => 'id')),
      'host_taxon_ref'           => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('HostTaxon'), 'column' => 'id')),
      'host_specimen_ref'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('HostSpecimen'), 'column' => 'id')),
      'host_relationship'        => new sfValidatorPass(array('required' => false)),
      'acquisition_category'     => new sfValidatorPass(array('required' => false)),
      'acquisition_date_mask'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'acquisition_date'         => new sfValidatorPass(array('required' => false)),
      'station_visible'          => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'multimedia_visible'       => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'ig_ref'                   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Igs'), 'column' => 'id')),
      'collection_type'          => new sfValidatorPass(array('required' => false)),
      'collection_code'          => new sfValidatorPass(array('required' => false)),
      'collection_name'          => new sfValidatorPass(array('required' => false)),
      'collection_is_public'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'collection_parent_ref'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'collection_path'          => new sfValidatorPass(array('required' => false)),
      'expedition_name'          => new sfValidatorPass(array('required' => false)),
      'expedition_name_ts'       => new sfValidatorPass(array('required' => false)),
      'expedition_name_indexed'  => new sfValidatorPass(array('required' => false)),
      'gtu_code'                 => new sfValidatorPass(array('required' => false)),
      'gtu_parent_ref'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'gtu_path'                 => new sfValidatorPass(array('required' => false)),
      'gtu_from_date_mask'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'gtu_from_date'            => new sfValidatorPass(array('required' => false)),
      'gtu_to_date_mask'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'gtu_to_date'              => new sfValidatorPass(array('required' => false)),
      'gtu_tag_values_indexed'   => new sfValidatorPass(array('required' => false)),
      'gtu_country_tag_indexed'  => new sfValidatorPass(array('required' => false)),
      'gtu_country_tag_value'    => new sfValidatorPass(array('required' => false)),
      'gtu_location'             => new sfValidatorPass(array('required' => false)),
      'taxon_name'               => new sfValidatorPass(array('required' => false)),
      'taxon_name_indexed'       => new sfValidatorPass(array('required' => false)),
      'taxon_name_order_by'      => new sfValidatorPass(array('required' => false)),
      'taxon_level_ref'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'taxon_level_name'         => new sfValidatorPass(array('required' => false)),
      'taxon_status'             => new sfValidatorPass(array('required' => false)),
      'taxon_path'               => new sfValidatorPass(array('required' => false)),
      'taxon_parent_ref'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'taxon_extinct'            => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'litho_name'               => new sfValidatorPass(array('required' => false)),
      'litho_name_indexed'       => new sfValidatorPass(array('required' => false)),
      'litho_name_order_by'      => new sfValidatorPass(array('required' => false)),
      'litho_level_ref'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'litho_level_name'         => new sfValidatorPass(array('required' => false)),
      'litho_status'             => new sfValidatorPass(array('required' => false)),
      'litho_local'              => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'litho_color'              => new sfValidatorPass(array('required' => false)),
      'litho_path'               => new sfValidatorPass(array('required' => false)),
      'litho_parent_ref'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'chrono_name'              => new sfValidatorPass(array('required' => false)),
      'chrono_name_indexed'      => new sfValidatorPass(array('required' => false)),
      'chrono_name_order_by'     => new sfValidatorPass(array('required' => false)),
      'chrono_level_ref'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'chrono_level_name'        => new sfValidatorPass(array('required' => false)),
      'chrono_status'            => new sfValidatorPass(array('required' => false)),
      'chrono_local'             => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'chrono_color'             => new sfValidatorPass(array('required' => false)),
      'chrono_path'              => new sfValidatorPass(array('required' => false)),
      'chrono_parent_ref'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'lithology_name'           => new sfValidatorPass(array('required' => false)),
      'lithology_name_indexed'   => new sfValidatorPass(array('required' => false)),
      'lithology_name_order_by'  => new sfValidatorPass(array('required' => false)),
      'lithology_level_ref'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'lithology_level_name'     => new sfValidatorPass(array('required' => false)),
      'lithology_status'         => new sfValidatorPass(array('required' => false)),
      'lithology_local'          => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'lithology_color'          => new sfValidatorPass(array('required' => false)),
      'lithology_path'           => new sfValidatorPass(array('required' => false)),
      'lithology_parent_ref'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'mineral_name'             => new sfValidatorPass(array('required' => false)),
      'mineral_name_indexed'     => new sfValidatorPass(array('required' => false)),
      'mineral_name_order_by'    => new sfValidatorPass(array('required' => false)),
      'mineral_level_ref'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'mineral_level_name'       => new sfValidatorPass(array('required' => false)),
      'mineral_status'           => new sfValidatorPass(array('required' => false)),
      'mineral_local'            => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'mineral_color'            => new sfValidatorPass(array('required' => false)),
      'mineral_path'             => new sfValidatorPass(array('required' => false)),
      'mineral_parent_ref'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'host_taxon_name'          => new sfValidatorPass(array('required' => false)),
      'host_taxon_name_indexed'  => new sfValidatorPass(array('required' => false)),
      'host_taxon_name_order_by' => new sfValidatorPass(array('required' => false)),
      'host_taxon_level_ref'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'host_taxon_level_name'    => new sfValidatorPass(array('required' => false)),
      'host_taxon_status'        => new sfValidatorPass(array('required' => false)),
      'host_taxon_path'          => new sfValidatorPass(array('required' => false)),
      'host_taxon_parent_ref'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'host_taxon_extinct'       => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'ig_num'                   => new sfValidatorPass(array('required' => false)),
      'ig_num_indexed'           => new sfValidatorPass(array('required' => false)),
      'ig_date_mask'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'collecting_methods_list'  => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'CollectingMethods', 'required' => false)),
      'collecting_tools_list'    => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'CollectingTools', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('specimens_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function addCollectingMethodsListColumnQuery(Doctrine_Query $query, $field, $values)
  {
    if (!is_array($values))
    {
      $values = array($values);
    }

    if (!count($values))
    {
      return;
    }

    $query
      ->leftJoin($query->getRootAlias().'.SpecimensMethods SpecimensMethods')
      ->andWhereIn('SpecimensMethods.collecting_method_ref', $values)
    ;
  }

  public function addCollectingToolsListColumnQuery(Doctrine_Query $query, $field, $values)
  {
    if (!is_array($values))
    {
      $values = array($values);
    }

    if (!count($values))
    {
      return;
    }

    $query
      ->leftJoin($query->getRootAlias().'.SpecimensTools SpecimensTools')
      ->andWhereIn('SpecimensTools.collecting_tool_ref', $values)
    ;
  }

  public function getModelName()
  {
    return 'Specimens';
  }

  public function getFields()
  {
    return array(
      'id'                       => 'Number',
      'category'                 => 'Text',
      'collection_ref'           => 'ForeignKey',
      'expedition_ref'           => 'ForeignKey',
      'gtu_ref'                  => 'ForeignKey',
      'taxon_ref'                => 'ForeignKey',
      'litho_ref'                => 'ForeignKey',
      'chrono_ref'               => 'ForeignKey',
      'lithology_ref'            => 'ForeignKey',
      'mineral_ref'              => 'ForeignKey',
      'host_taxon_ref'           => 'ForeignKey',
      'host_specimen_ref'        => 'ForeignKey',
      'host_relationship'        => 'Text',
      'acquisition_category'     => 'Text',
      'acquisition_date_mask'    => 'Number',
      'acquisition_date'         => 'Text',
      'station_visible'          => 'Boolean',
      'multimedia_visible'       => 'Boolean',
      'ig_ref'                   => 'ForeignKey',
      'collection_type'          => 'Text',
      'collection_code'          => 'Text',
      'collection_name'          => 'Text',
      'collection_is_public'     => 'Boolean',
      'collection_parent_ref'    => 'Number',
      'collection_path'          => 'Text',
      'expedition_name'          => 'Text',
      'expedition_name_ts'       => 'Text',
      'expedition_name_indexed'  => 'Text',
      'gtu_code'                 => 'Text',
      'gtu_parent_ref'           => 'Number',
      'gtu_path'                 => 'Text',
      'gtu_from_date_mask'       => 'Number',
      'gtu_from_date'            => 'Text',
      'gtu_to_date_mask'         => 'Number',
      'gtu_to_date'              => 'Text',
      'gtu_tag_values_indexed'   => 'Text',
      'gtu_country_tag_indexed'  => 'Text',
      'gtu_country_tag_value'    => 'Text',
      'gtu_location'             => 'Text',
      'taxon_name'               => 'Text',
      'taxon_name_indexed'       => 'Text',
      'taxon_name_order_by'      => 'Text',
      'taxon_level_ref'          => 'Number',
      'taxon_level_name'         => 'Text',
      'taxon_status'             => 'Text',
      'taxon_path'               => 'Text',
      'taxon_parent_ref'         => 'Number',
      'taxon_extinct'            => 'Boolean',
      'litho_name'               => 'Text',
      'litho_name_indexed'       => 'Text',
      'litho_name_order_by'      => 'Text',
      'litho_level_ref'          => 'Number',
      'litho_level_name'         => 'Text',
      'litho_status'             => 'Text',
      'litho_local'              => 'Boolean',
      'litho_color'              => 'Text',
      'litho_path'               => 'Text',
      'litho_parent_ref'         => 'Number',
      'chrono_name'              => 'Text',
      'chrono_name_indexed'      => 'Text',
      'chrono_name_order_by'     => 'Text',
      'chrono_level_ref'         => 'Number',
      'chrono_level_name'        => 'Text',
      'chrono_status'            => 'Text',
      'chrono_local'             => 'Boolean',
      'chrono_color'             => 'Text',
      'chrono_path'              => 'Text',
      'chrono_parent_ref'        => 'Number',
      'lithology_name'           => 'Text',
      'lithology_name_indexed'   => 'Text',
      'lithology_name_order_by'  => 'Text',
      'lithology_level_ref'      => 'Number',
      'lithology_level_name'     => 'Text',
      'lithology_status'         => 'Text',
      'lithology_local'          => 'Boolean',
      'lithology_color'          => 'Text',
      'lithology_path'           => 'Text',
      'lithology_parent_ref'     => 'Number',
      'mineral_name'             => 'Text',
      'mineral_name_indexed'     => 'Text',
      'mineral_name_order_by'    => 'Text',
      'mineral_level_ref'        => 'Number',
      'mineral_level_name'       => 'Text',
      'mineral_status'           => 'Text',
      'mineral_local'            => 'Boolean',
      'mineral_color'            => 'Text',
      'mineral_path'             => 'Text',
      'mineral_parent_ref'       => 'Number',
      'host_taxon_name'          => 'Text',
      'host_taxon_name_indexed'  => 'Text',
      'host_taxon_name_order_by' => 'Text',
      'host_taxon_level_ref'     => 'Number',
      'host_taxon_level_name'    => 'Text',
      'host_taxon_status'        => 'Text',
      'host_taxon_path'          => 'Text',
      'host_taxon_parent_ref'    => 'Number',
      'host_taxon_extinct'       => 'Boolean',
      'ig_num'                   => 'Text',
      'ig_num_indexed'           => 'Text',
      'ig_date_mask'             => 'Number',
      'collecting_methods_list'  => 'ManyKey',
      'collecting_tools_list'    => 'ManyKey',
    );
  }
}
