<?php

/**
 * BaseClassificationSynonymies
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $referenced_relation
 * @property integer $record_id
 * @property integer $group_id
 * @property string $group_name
 * @property boolean $is_basionym
 * @property integer $order_by
 * 
 * @method integer                  getId()                  Returns the current record's "id" value
 * @method string                   getReferencedRelation()  Returns the current record's "referenced_relation" value
 * @method integer                  getRecordId()            Returns the current record's "record_id" value
 * @method integer                  getGroupId()             Returns the current record's "group_id" value
 * @method string                   getGroupName()           Returns the current record's "group_name" value
 * @method boolean                  getIsBasionym()          Returns the current record's "is_basionym" value
 * @method integer                  getOrderBy()             Returns the current record's "order_by" value
 * @method ClassificationSynonymies setId()                  Sets the current record's "id" value
 * @method ClassificationSynonymies setReferencedRelation()  Sets the current record's "referenced_relation" value
 * @method ClassificationSynonymies setRecordId()            Sets the current record's "record_id" value
 * @method ClassificationSynonymies setGroupId()             Sets the current record's "group_id" value
 * @method ClassificationSynonymies setGroupName()           Sets the current record's "group_name" value
 * @method ClassificationSynonymies setIsBasionym()          Sets the current record's "is_basionym" value
 * @method ClassificationSynonymies setOrderBy()             Sets the current record's "order_by" value
 * 
 * @package    darwin
 * @subpackage model
 * @author     DB team <collections@naturalsciences.be>
 * @version    SVN: $Id: Builder.php 7380 2010-03-15 21:07:50Z jwage $
 */
abstract class BaseClassificationSynonymies extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('classification_synonymies');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('referenced_relation', 'string', null, array(
             'type' => 'string',
             'notnull' => true,
             ));
        $this->hasColumn('record_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('group_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('group_name', 'string', null, array(
             'type' => 'string',
             'notnull' => true,
             ));
        $this->hasColumn('is_basionym', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('order_by', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 0,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}