<?php

/**
 * Taxonomy filter form base class.
 *
 * @package    darwin
 * @subpackage filter
 * @author     DB team <collections@naturalsciences.be>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseTaxonomyFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'                         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'name_indexed'                 => new sfWidgetFormFilterInput(),
      'level_ref'                    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Level'), 'add_empty' => true)),
      'status'                       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'path'                         => new sfWidgetFormFilterInput(),
      'parent_ref'                   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Parent'), 'add_empty' => true)),
      'domain_ref'                   => new sfWidgetFormFilterInput(),
      'domain_indexed'               => new sfWidgetFormFilterInput(),
      'kingdom_ref'                  => new sfWidgetFormFilterInput(),
      'kingdom_indexed'              => new sfWidgetFormFilterInput(),
      'super_phylum_ref'             => new sfWidgetFormFilterInput(),
      'super_phylum_indexed'         => new sfWidgetFormFilterInput(),
      'phylum_ref'                   => new sfWidgetFormFilterInput(),
      'phylum_indexed'               => new sfWidgetFormFilterInput(),
      'sub_phylum_ref'               => new sfWidgetFormFilterInput(),
      'sub_phylum_indexed'           => new sfWidgetFormFilterInput(),
      'infra_phylum_ref'             => new sfWidgetFormFilterInput(),
      'infra_phylum_indexed'         => new sfWidgetFormFilterInput(),
      'super_cohort_botany_ref'      => new sfWidgetFormFilterInput(),
      'super_cohort_botany_indexed'  => new sfWidgetFormFilterInput(),
      'cohort_botany_ref'            => new sfWidgetFormFilterInput(),
      'cohort_botany_indexed'        => new sfWidgetFormFilterInput(),
      'sub_cohort_botany_ref'        => new sfWidgetFormFilterInput(),
      'sub_cohort_botany_indexed'    => new sfWidgetFormFilterInput(),
      'infra_cohort_botany_ref'      => new sfWidgetFormFilterInput(),
      'infra_cohort_botany_indexed'  => new sfWidgetFormFilterInput(),
      'super_class_ref'              => new sfWidgetFormFilterInput(),
      'super_class_indexed'          => new sfWidgetFormFilterInput(),
      'class_ref'                    => new sfWidgetFormFilterInput(),
      'class_indexed'                => new sfWidgetFormFilterInput(),
      'sub_class_ref'                => new sfWidgetFormFilterInput(),
      'sub_class_indexed'            => new sfWidgetFormFilterInput(),
      'infra_class_ref'              => new sfWidgetFormFilterInput(),
      'infra_class_indexed'          => new sfWidgetFormFilterInput(),
      'super_division_ref'           => new sfWidgetFormFilterInput(),
      'super_division_indexed'       => new sfWidgetFormFilterInput(),
      'division_ref'                 => new sfWidgetFormFilterInput(),
      'division_indexed'             => new sfWidgetFormFilterInput(),
      'sub_division_ref'             => new sfWidgetFormFilterInput(),
      'sub_division_indexed'         => new sfWidgetFormFilterInput(),
      'infra_division_ref'           => new sfWidgetFormFilterInput(),
      'infra_division_indexed'       => new sfWidgetFormFilterInput(),
      'super_legion_ref'             => new sfWidgetFormFilterInput(),
      'super_legion_indexed'         => new sfWidgetFormFilterInput(),
      'legion_ref'                   => new sfWidgetFormFilterInput(),
      'legion_indexed'               => new sfWidgetFormFilterInput(),
      'sub_legion_ref'               => new sfWidgetFormFilterInput(),
      'sub_legion_indexed'           => new sfWidgetFormFilterInput(),
      'infra_legion_ref'             => new sfWidgetFormFilterInput(),
      'infra_legion_indexed'         => new sfWidgetFormFilterInput(),
      'super_cohort_zoology_ref'     => new sfWidgetFormFilterInput(),
      'super_cohort_zoology_indexed' => new sfWidgetFormFilterInput(),
      'cohort_zoology_ref'           => new sfWidgetFormFilterInput(),
      'cohort_zoology_indexed'       => new sfWidgetFormFilterInput(),
      'sub_cohort_zoology_ref'       => new sfWidgetFormFilterInput(),
      'sub_cohort_zoology_indexed'   => new sfWidgetFormFilterInput(),
      'infra_cohort_zoology_ref'     => new sfWidgetFormFilterInput(),
      'infra_cohort_zoology_indexed' => new sfWidgetFormFilterInput(),
      'super_order_ref'              => new sfWidgetFormFilterInput(),
      'super_order_indexed'          => new sfWidgetFormFilterInput(),
      'order_ref'                    => new sfWidgetFormFilterInput(),
      'order_indexed'                => new sfWidgetFormFilterInput(),
      'sub_order_ref'                => new sfWidgetFormFilterInput(),
      'sub_order_indexed'            => new sfWidgetFormFilterInput(),
      'infra_order_ref'              => new sfWidgetFormFilterInput(),
      'infra_order_indexed'          => new sfWidgetFormFilterInput(),
      'section_zoology_ref'          => new sfWidgetFormFilterInput(),
      'section_zoology_indexed'      => new sfWidgetFormFilterInput(),
      'sub_section_zoology_ref'      => new sfWidgetFormFilterInput(),
      'sub_section_zoology_indexed'  => new sfWidgetFormFilterInput(),
      'super_family_ref'             => new sfWidgetFormFilterInput(),
      'super_family_indexed'         => new sfWidgetFormFilterInput(),
      'family_ref'                   => new sfWidgetFormFilterInput(),
      'family_indexed'               => new sfWidgetFormFilterInput(),
      'sub_family_ref'               => new sfWidgetFormFilterInput(),
      'sub_family_indexed'           => new sfWidgetFormFilterInput(),
      'infra_family_ref'             => new sfWidgetFormFilterInput(),
      'infra_family_indexed'         => new sfWidgetFormFilterInput(),
      'super_tribe_ref'              => new sfWidgetFormFilterInput(),
      'super_tribe_indexed'          => new sfWidgetFormFilterInput(),
      'tribe_ref'                    => new sfWidgetFormFilterInput(),
      'tribe_indexed'                => new sfWidgetFormFilterInput(),
      'sub_tribe_ref'                => new sfWidgetFormFilterInput(),
      'sub_tribe_indexed'            => new sfWidgetFormFilterInput(),
      'infra_tribe_ref'              => new sfWidgetFormFilterInput(),
      'infra_tribe_indexed'          => new sfWidgetFormFilterInput(),
      'genus_ref'                    => new sfWidgetFormFilterInput(),
      'genus_indexed'                => new sfWidgetFormFilterInput(),
      'sub_genus_ref'                => new sfWidgetFormFilterInput(),
      'sub_genus_indexed'            => new sfWidgetFormFilterInput(),
      'section_botany_ref'           => new sfWidgetFormFilterInput(),
      'section_botany_indexed'       => new sfWidgetFormFilterInput(),
      'sub_section_botany_ref'       => new sfWidgetFormFilterInput(),
      'sub_section_botany_indexed'   => new sfWidgetFormFilterInput(),
      'serie_ref'                    => new sfWidgetFormFilterInput(),
      'serie_indexed'                => new sfWidgetFormFilterInput(),
      'sub_serie_ref'                => new sfWidgetFormFilterInput(),
      'sub_serie_indexed'            => new sfWidgetFormFilterInput(),
      'super_species_ref'            => new sfWidgetFormFilterInput(),
      'super_species_indexed'        => new sfWidgetFormFilterInput(),
      'species_ref'                  => new sfWidgetFormFilterInput(),
      'species_indexed'              => new sfWidgetFormFilterInput(),
      'sub_species_ref'              => new sfWidgetFormFilterInput(),
      'sub_species_indexed'          => new sfWidgetFormFilterInput(),
      'variety_ref'                  => new sfWidgetFormFilterInput(),
      'variety_indexed'              => new sfWidgetFormFilterInput(),
      'sub_variety_ref'              => new sfWidgetFormFilterInput(),
      'sub_variety_indexed'          => new sfWidgetFormFilterInput(),
      'form_ref'                     => new sfWidgetFormFilterInput(),
      'form_indexed'                 => new sfWidgetFormFilterInput(),
      'sub_form_ref'                 => new sfWidgetFormFilterInput(),
      'sub_form_indexed'             => new sfWidgetFormFilterInput(),
      'abberans_ref'                 => new sfWidgetFormFilterInput(),
      'abberans_indexed'             => new sfWidgetFormFilterInput(),
      'extinct'                      => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
    ));

    $this->setValidators(array(
      'name'                         => new sfValidatorPass(array('required' => false)),
      'name_indexed'                 => new sfValidatorPass(array('required' => false)),
      'level_ref'                    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Level'), 'column' => 'id')),
      'status'                       => new sfValidatorPass(array('required' => false)),
      'path'                         => new sfValidatorPass(array('required' => false)),
      'parent_ref'                   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Parent'), 'column' => 'id')),
      'domain_ref'                   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'domain_indexed'               => new sfValidatorPass(array('required' => false)),
      'kingdom_ref'                  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'kingdom_indexed'              => new sfValidatorPass(array('required' => false)),
      'super_phylum_ref'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'super_phylum_indexed'         => new sfValidatorPass(array('required' => false)),
      'phylum_ref'                   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'phylum_indexed'               => new sfValidatorPass(array('required' => false)),
      'sub_phylum_ref'               => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'sub_phylum_indexed'           => new sfValidatorPass(array('required' => false)),
      'infra_phylum_ref'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'infra_phylum_indexed'         => new sfValidatorPass(array('required' => false)),
      'super_cohort_botany_ref'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'super_cohort_botany_indexed'  => new sfValidatorPass(array('required' => false)),
      'cohort_botany_ref'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cohort_botany_indexed'        => new sfValidatorPass(array('required' => false)),
      'sub_cohort_botany_ref'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'sub_cohort_botany_indexed'    => new sfValidatorPass(array('required' => false)),
      'infra_cohort_botany_ref'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'infra_cohort_botany_indexed'  => new sfValidatorPass(array('required' => false)),
      'super_class_ref'              => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'super_class_indexed'          => new sfValidatorPass(array('required' => false)),
      'class_ref'                    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'class_indexed'                => new sfValidatorPass(array('required' => false)),
      'sub_class_ref'                => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'sub_class_indexed'            => new sfValidatorPass(array('required' => false)),
      'infra_class_ref'              => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'infra_class_indexed'          => new sfValidatorPass(array('required' => false)),
      'super_division_ref'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'super_division_indexed'       => new sfValidatorPass(array('required' => false)),
      'division_ref'                 => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'division_indexed'             => new sfValidatorPass(array('required' => false)),
      'sub_division_ref'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'sub_division_indexed'         => new sfValidatorPass(array('required' => false)),
      'infra_division_ref'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'infra_division_indexed'       => new sfValidatorPass(array('required' => false)),
      'super_legion_ref'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'super_legion_indexed'         => new sfValidatorPass(array('required' => false)),
      'legion_ref'                   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'legion_indexed'               => new sfValidatorPass(array('required' => false)),
      'sub_legion_ref'               => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'sub_legion_indexed'           => new sfValidatorPass(array('required' => false)),
      'infra_legion_ref'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'infra_legion_indexed'         => new sfValidatorPass(array('required' => false)),
      'super_cohort_zoology_ref'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'super_cohort_zoology_indexed' => new sfValidatorPass(array('required' => false)),
      'cohort_zoology_ref'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cohort_zoology_indexed'       => new sfValidatorPass(array('required' => false)),
      'sub_cohort_zoology_ref'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'sub_cohort_zoology_indexed'   => new sfValidatorPass(array('required' => false)),
      'infra_cohort_zoology_ref'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'infra_cohort_zoology_indexed' => new sfValidatorPass(array('required' => false)),
      'super_order_ref'              => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'super_order_indexed'          => new sfValidatorPass(array('required' => false)),
      'order_ref'                    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'order_indexed'                => new sfValidatorPass(array('required' => false)),
      'sub_order_ref'                => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'sub_order_indexed'            => new sfValidatorPass(array('required' => false)),
      'infra_order_ref'              => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'infra_order_indexed'          => new sfValidatorPass(array('required' => false)),
      'section_zoology_ref'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'section_zoology_indexed'      => new sfValidatorPass(array('required' => false)),
      'sub_section_zoology_ref'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'sub_section_zoology_indexed'  => new sfValidatorPass(array('required' => false)),
      'super_family_ref'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'super_family_indexed'         => new sfValidatorPass(array('required' => false)),
      'family_ref'                   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'family_indexed'               => new sfValidatorPass(array('required' => false)),
      'sub_family_ref'               => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'sub_family_indexed'           => new sfValidatorPass(array('required' => false)),
      'infra_family_ref'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'infra_family_indexed'         => new sfValidatorPass(array('required' => false)),
      'super_tribe_ref'              => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'super_tribe_indexed'          => new sfValidatorPass(array('required' => false)),
      'tribe_ref'                    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tribe_indexed'                => new sfValidatorPass(array('required' => false)),
      'sub_tribe_ref'                => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'sub_tribe_indexed'            => new sfValidatorPass(array('required' => false)),
      'infra_tribe_ref'              => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'infra_tribe_indexed'          => new sfValidatorPass(array('required' => false)),
      'genus_ref'                    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'genus_indexed'                => new sfValidatorPass(array('required' => false)),
      'sub_genus_ref'                => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'sub_genus_indexed'            => new sfValidatorPass(array('required' => false)),
      'section_botany_ref'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'section_botany_indexed'       => new sfValidatorPass(array('required' => false)),
      'sub_section_botany_ref'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'sub_section_botany_indexed'   => new sfValidatorPass(array('required' => false)),
      'serie_ref'                    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'serie_indexed'                => new sfValidatorPass(array('required' => false)),
      'sub_serie_ref'                => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'sub_serie_indexed'            => new sfValidatorPass(array('required' => false)),
      'super_species_ref'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'super_species_indexed'        => new sfValidatorPass(array('required' => false)),
      'species_ref'                  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'species_indexed'              => new sfValidatorPass(array('required' => false)),
      'sub_species_ref'              => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'sub_species_indexed'          => new sfValidatorPass(array('required' => false)),
      'variety_ref'                  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'variety_indexed'              => new sfValidatorPass(array('required' => false)),
      'sub_variety_ref'              => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'sub_variety_indexed'          => new sfValidatorPass(array('required' => false)),
      'form_ref'                     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'form_indexed'                 => new sfValidatorPass(array('required' => false)),
      'sub_form_ref'                 => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'sub_form_indexed'             => new sfValidatorPass(array('required' => false)),
      'abberans_ref'                 => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'abberans_indexed'             => new sfValidatorPass(array('required' => false)),
      'extinct'                      => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
    ));

    $this->widgetSchema->setNameFormat('taxonomy_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Taxonomy';
  }

  public function getFields()
  {
    return array(
      'id'                           => 'Number',
      'name'                         => 'Text',
      'name_indexed'                 => 'Text',
      'level_ref'                    => 'ForeignKey',
      'status'                       => 'Text',
      'path'                         => 'Text',
      'parent_ref'                   => 'ForeignKey',
      'domain_ref'                   => 'Number',
      'domain_indexed'               => 'Text',
      'kingdom_ref'                  => 'Number',
      'kingdom_indexed'              => 'Text',
      'super_phylum_ref'             => 'Number',
      'super_phylum_indexed'         => 'Text',
      'phylum_ref'                   => 'Number',
      'phylum_indexed'               => 'Text',
      'sub_phylum_ref'               => 'Number',
      'sub_phylum_indexed'           => 'Text',
      'infra_phylum_ref'             => 'Number',
      'infra_phylum_indexed'         => 'Text',
      'super_cohort_botany_ref'      => 'Number',
      'super_cohort_botany_indexed'  => 'Text',
      'cohort_botany_ref'            => 'Number',
      'cohort_botany_indexed'        => 'Text',
      'sub_cohort_botany_ref'        => 'Number',
      'sub_cohort_botany_indexed'    => 'Text',
      'infra_cohort_botany_ref'      => 'Number',
      'infra_cohort_botany_indexed'  => 'Text',
      'super_class_ref'              => 'Number',
      'super_class_indexed'          => 'Text',
      'class_ref'                    => 'Number',
      'class_indexed'                => 'Text',
      'sub_class_ref'                => 'Number',
      'sub_class_indexed'            => 'Text',
      'infra_class_ref'              => 'Number',
      'infra_class_indexed'          => 'Text',
      'super_division_ref'           => 'Number',
      'super_division_indexed'       => 'Text',
      'division_ref'                 => 'Number',
      'division_indexed'             => 'Text',
      'sub_division_ref'             => 'Number',
      'sub_division_indexed'         => 'Text',
      'infra_division_ref'           => 'Number',
      'infra_division_indexed'       => 'Text',
      'super_legion_ref'             => 'Number',
      'super_legion_indexed'         => 'Text',
      'legion_ref'                   => 'Number',
      'legion_indexed'               => 'Text',
      'sub_legion_ref'               => 'Number',
      'sub_legion_indexed'           => 'Text',
      'infra_legion_ref'             => 'Number',
      'infra_legion_indexed'         => 'Text',
      'super_cohort_zoology_ref'     => 'Number',
      'super_cohort_zoology_indexed' => 'Text',
      'cohort_zoology_ref'           => 'Number',
      'cohort_zoology_indexed'       => 'Text',
      'sub_cohort_zoology_ref'       => 'Number',
      'sub_cohort_zoology_indexed'   => 'Text',
      'infra_cohort_zoology_ref'     => 'Number',
      'infra_cohort_zoology_indexed' => 'Text',
      'super_order_ref'              => 'Number',
      'super_order_indexed'          => 'Text',
      'order_ref'                    => 'Number',
      'order_indexed'                => 'Text',
      'sub_order_ref'                => 'Number',
      'sub_order_indexed'            => 'Text',
      'infra_order_ref'              => 'Number',
      'infra_order_indexed'          => 'Text',
      'section_zoology_ref'          => 'Number',
      'section_zoology_indexed'      => 'Text',
      'sub_section_zoology_ref'      => 'Number',
      'sub_section_zoology_indexed'  => 'Text',
      'super_family_ref'             => 'Number',
      'super_family_indexed'         => 'Text',
      'family_ref'                   => 'Number',
      'family_indexed'               => 'Text',
      'sub_family_ref'               => 'Number',
      'sub_family_indexed'           => 'Text',
      'infra_family_ref'             => 'Number',
      'infra_family_indexed'         => 'Text',
      'super_tribe_ref'              => 'Number',
      'super_tribe_indexed'          => 'Text',
      'tribe_ref'                    => 'Number',
      'tribe_indexed'                => 'Text',
      'sub_tribe_ref'                => 'Number',
      'sub_tribe_indexed'            => 'Text',
      'infra_tribe_ref'              => 'Number',
      'infra_tribe_indexed'          => 'Text',
      'genus_ref'                    => 'Number',
      'genus_indexed'                => 'Text',
      'sub_genus_ref'                => 'Number',
      'sub_genus_indexed'            => 'Text',
      'section_botany_ref'           => 'Number',
      'section_botany_indexed'       => 'Text',
      'sub_section_botany_ref'       => 'Number',
      'sub_section_botany_indexed'   => 'Text',
      'serie_ref'                    => 'Number',
      'serie_indexed'                => 'Text',
      'sub_serie_ref'                => 'Number',
      'sub_serie_indexed'            => 'Text',
      'super_species_ref'            => 'Number',
      'super_species_indexed'        => 'Text',
      'species_ref'                  => 'Number',
      'species_indexed'              => 'Text',
      'sub_species_ref'              => 'Number',
      'sub_species_indexed'          => 'Text',
      'variety_ref'                  => 'Number',
      'variety_indexed'              => 'Text',
      'sub_variety_ref'              => 'Number',
      'sub_variety_indexed'          => 'Text',
      'form_ref'                     => 'Number',
      'form_indexed'                 => 'Text',
      'sub_form_ref'                 => 'Number',
      'sub_form_indexed'             => 'Text',
      'abberans_ref'                 => 'Number',
      'abberans_indexed'             => 'Text',
      'extinct'                      => 'Boolean',
    );
  }
}
