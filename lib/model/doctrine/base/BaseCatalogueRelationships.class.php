<?php

/**
 * BaseCatalogueRelationships
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $table_name
 * @property integer $record_id_1
 * @property integer $record_id_2
 * @property integer $relationship_type
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 5845 2009-06-09 07:36:57Z jwage $
 */
abstract class BaseCatalogueRelationships extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('catalogue_relationships');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('table_name', 'string', null, array(
             'type' => 'string',
             'notnull' => true,
             ));
        $this->hasColumn('record_id_1', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('record_id_2', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('relationship_type', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 'recombined from',
             ));
    }

}