<?php

/**
 * BaseCollectionsAdmin
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $collection_ref
 * @property integer $user_ref
 * @property Collections $Collections
 * @property Users $Users
 * 
 * @method integer          getCollectionRef()  Returns the current record's "collection_ref" value
 * @method integer          getUserRef()        Returns the current record's "user_ref" value
 * @method Collections      getCollections()    Returns the current record's "Collections" value
 * @method Users            getUsers()          Returns the current record's "Users" value
 * @method CollectionsAdmin setCollectionRef()  Sets the current record's "collection_ref" value
 * @method CollectionsAdmin setUserRef()        Sets the current record's "user_ref" value
 * @method CollectionsAdmin setCollections()    Sets the current record's "Collections" value
 * @method CollectionsAdmin setUsers()          Sets the current record's "Users" value
 * 
 * @package    darwin
 * @subpackage model
 * @author     DB team <collections@naturalsciences.be>
 * @version    SVN: $Id: Builder.php 7380 2010-03-15 21:07:50Z jwage $
 */
abstract class BaseCollectionsAdmin extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('collections_admin');
        $this->hasColumn('collection_ref', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 0,
             ));
        $this->hasColumn('user_ref', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 0,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Collections', array(
             'local' => 'collection_ref',
             'foreign' => 'id'));

        $this->hasOne('Users', array(
             'local' => 'user_ref',
             'foreign' => 'id'));
    }
}