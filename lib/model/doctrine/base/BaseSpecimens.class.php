<?php

/**
 * BaseSpecimens
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $collection_ref
 * @property integer $expedition_ref
 * @property integer $gtu_ref
 * @property integer $taxon_ref
 * @property integer $litho_ref
 * @property integer $chrono_ref
 * @property integer $lithology_ref
 * @property integer $mineral_ref
 * @property string $identification_qual
 * @property string $sp
 * @property integer $identification_taxon_ref
 * @property integer $host_taxon_ref
 * @property integer $host_specimen_ref
 * @property string $host_relationship
 * @property string $acquisition_category
 * @property integer $acquisition_date_mask
 * @property date $acquisition_date
 * @property string $collecting_method
 * @property string $collecting_tool
 * @property integer $specimen_count_min
 * @property integer $specimen_count_max
 * @property boolean $station_visible
 * @property boolean $multimedia_visible
 * @property Collections $Collections
 * @property Expeditions $Expeditions
 * @property Taxonomy $Taxonomy
 * @property Lithostratigraphy $Lithostratigraphy
 * @property Chronostratigraphy $Chronostratigraphy
 * @property Lithology $Lithology
 * @property Mineralogy $Mineralogy
 * @property Taxonomy $IdentificationsTaxon
 * @property Taxonomy $HostTaxon
 * @property Specimens $HostSpecimen
 * @property Doctrine_Collection $Specimens
 * @property Doctrine_Collection $SpecimenIndividuals
 * @property Doctrine_Collection $SpecimensAccompanying
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 5845 2009-06-09 07:36:57Z jwage $
 */
abstract class BaseSpecimens extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('specimens');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('collection_ref', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('expedition_ref', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('gtu_ref', 'integer', null, array(
             'type' => 'integer',
             'default' => 0,
             ));
        $this->hasColumn('taxon_ref', 'integer', null, array(
             'type' => 'integer',
             'default' => 0,
             ));
        $this->hasColumn('litho_ref', 'integer', null, array(
             'type' => 'integer',
             'default' => 0,
             ));
        $this->hasColumn('chrono_ref', 'integer', null, array(
             'type' => 'integer',
             'default' => 0,
             ));
        $this->hasColumn('lithology_ref', 'integer', null, array(
             'type' => 'integer',
             'default' => 0,
             ));
        $this->hasColumn('mineral_ref', 'integer', null, array(
             'type' => 'integer',
             'default' => 0,
             ));
        $this->hasColumn('identification_qual', 'string', null, array(
             'type' => 'string',
             ));
        $this->hasColumn('sp', 'string', null, array(
             'type' => 'string',
             ));
        $this->hasColumn('identification_taxon_ref', 'integer', null, array(
             'type' => 'integer',
             'default' => 0,
             ));
        $this->hasColumn('host_taxon_ref', 'integer', null, array(
             'type' => 'integer',
             'default' => 0,
             ));
        $this->hasColumn('host_specimen_ref', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('host_relationship', 'string', null, array(
             'type' => 'string',
             ));
        $this->hasColumn('acquisition_category', 'string', null, array(
             'type' => 'string',
             'default' => 'expedition',
             ));
        $this->hasColumn('acquisition_date_mask', 'integer', null, array(
             'type' => 'integer',
             'default' => 0,
             ));
        $this->hasColumn('acquisition_date', 'date', null, array(
             'type' => 'date',
             'default' => '0001-01-01',
             ));
        $this->hasColumn('collecting_method', 'string', null, array(
             'type' => 'string',
             ));
        $this->hasColumn('collecting_tool', 'string', null, array(
             'type' => 'string',
             ));
        $this->hasColumn('specimen_count_min', 'integer', null, array(
             'type' => 'integer',
             'default' => '1',
             ));
        $this->hasColumn('specimen_count_max', 'integer', null, array(
             'type' => 'integer',
             'default' => '1',
             ));
        $this->hasColumn('station_visible', 'boolean', null, array(
             'type' => 'boolean',
             'default' => true,
             ));
        $this->hasColumn('multimedia_visible', 'boolean', null, array(
             'type' => 'boolean',
             'default' => true,
             ));
    }

    public function setUp()
    {
        $this->hasOne('Collections', array(
             'local' => 'collection_ref',
             'foreign' => 'id'));

        $this->hasOne('Expeditions', array(
             'local' => 'expedition_ref',
             'foreign' => 'id'));

        $this->hasOne('Taxonomy', array(
             'local' => 'taxon_ref',
             'foreign' => 'id'));

        $this->hasOne('Lithostratigraphy', array(
             'local' => 'litho_ref',
             'foreign' => 'id'));

        $this->hasOne('Chronostratigraphy', array(
             'local' => 'chrono_ref',
             'foreign' => 'id'));

        $this->hasOne('Lithology', array(
             'local' => 'lithology_ref',
             'foreign' => 'id'));

        $this->hasOne('Mineralogy', array(
             'local' => 'mineral_ref',
             'foreign' => 'id'));

        $this->hasOne('Taxonomy as IdentificationsTaxon', array(
             'local' => 'identification_taxon_ref',
             'foreign' => 'id'));

        $this->hasOne('Taxonomy as HostTaxon', array(
             'local' => 'host_taxon_ref',
             'foreign' => 'id'));

        $this->hasOne('Specimens as HostSpecimen', array(
             'local' => 'host_specimen_ref',
             'foreign' => 'id'));

        $this->hasMany('Specimens', array(
             'local' => 'id',
             'foreign' => 'host_specimen_ref'));

        $this->hasMany('SpecimenIndividuals', array(
             'local' => 'id',
             'foreign' => 'specimen_ref'));

        $this->hasMany('SpecimensAccompanying', array(
             'local' => 'id',
             'foreign' => 'specimen_ref'));
    }
}