<?php

/**
 * BaseUsersComm
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $person_user_ref
 * @property string $comm_type
 * @property string $entry
 * @property string $tag
 * @property Users $Users
 * 
 * @method integer   getId()              Returns the current record's "id" value
 * @method integer   getPersonUserRef()   Returns the current record's "person_user_ref" value
 * @method string    getCommType()        Returns the current record's "comm_type" value
 * @method string    getEntry()           Returns the current record's "entry" value
 * @method string    getTag()             Returns the current record's "tag" value
 * @method Users     getUsers()           Returns the current record's "Users" value
 * @method UsersComm setId()              Sets the current record's "id" value
 * @method UsersComm setPersonUserRef()   Sets the current record's "person_user_ref" value
 * @method UsersComm setCommType()        Sets the current record's "comm_type" value
 * @method UsersComm setEntry()           Sets the current record's "entry" value
 * @method UsersComm setTag()             Sets the current record's "tag" value
 * @method UsersComm setUsers()           Sets the current record's "Users" value
 * 
 * @package    darwin
 * @subpackage model
 * @author     DB team <darwin-ict@naturalsciences.be>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseUsersComm extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('users_comm');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('person_user_ref', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('comm_type', 'string', null, array(
             'type' => 'string',
             'notnull' => true,
             'default' => 'phone/fax',
             ));
        $this->hasColumn('entry', 'string', null, array(
             'type' => 'string',
             'notnull' => true,
             ));
        $this->hasColumn('tag', 'string', null, array(
             'type' => 'string',
             'notnull' => true,
             'default' => '',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Users', array(
             'local' => 'person_user_ref',
             'foreign' => 'id'));
    }
}