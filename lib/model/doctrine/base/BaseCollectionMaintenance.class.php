<?php

/**
 * BaseCollectionMaintenance
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $table_name
 * @property integer $people_ref
 * @property string $category
 * @property string $action_observation
 * @property string $description
 * @property string $description_ts
 * @property string $language_full_text
 * @property timestamp $modification_date_time
 * @property integer $modification_date_mask
 * @property Users $Users
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 5845 2009-06-09 07:36:57Z jwage $
 */
abstract class BaseCollectionMaintenance extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('collection_maintenance');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('table_name', 'string', null, array(
             'type' => 'string',
             'notnull' => true,
             ));
        $this->hasColumn('people_ref', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('category', 'string', null, array(
             'type' => 'string',
             'notnull' => true,
             'default' => 'action',
             ));
        $this->hasColumn('action_observation', 'string', null, array(
             'type' => 'string',
             'notnull' => true,
             ));
        $this->hasColumn('description', 'string', null, array(
             'type' => 'string',
             ));
        $this->hasColumn('description_ts', 'string', null, array(
             'type' => 'string',
             ));
        $this->hasColumn('language_full_text', 'string', null, array(
             'type' => 'string',
             ));
        $this->hasColumn('modification_date_time', 'timestamp', null, array(
             'type' => 'timestamp',
             'notnull' => true,
             ));
        $this->hasColumn('modification_date_mask', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 0,
             ));
    }

    public function setUp()
    {
        $this->hasOne('Users', array(
             'local' => 'user_ref',
             'foreign' => 'id'));
    }
}