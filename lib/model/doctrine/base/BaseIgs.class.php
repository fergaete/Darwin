<?php

/**
 * BaseIgs
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $ig_num
 * @property string $ig_num_indexed
 * @property integer $ig_date_mask
 * @property string $ig_date
 * @property Doctrine_Collection $Specimens
 * 
 * @method integer             getId()             Returns the current record's "id" value
 * @method string              getIgNum()          Returns the current record's "ig_num" value
 * @method string              getIgNumIndexed()   Returns the current record's "ig_num_indexed" value
 * @method integer             getIgDateMask()     Returns the current record's "ig_date_mask" value
 * @method string              getIgDate()         Returns the current record's "ig_date" value
 * @method Doctrine_Collection getSpecimens()      Returns the current record's "Specimens" collection
 * @method Igs                 setId()             Sets the current record's "id" value
 * @method Igs                 setIgNum()          Sets the current record's "ig_num" value
 * @method Igs                 setIgNumIndexed()   Sets the current record's "ig_num_indexed" value
 * @method Igs                 setIgDateMask()     Sets the current record's "ig_date_mask" value
 * @method Igs                 setIgDate()         Sets the current record's "ig_date" value
 * @method Igs                 setSpecimens()      Sets the current record's "Specimens" collection
 * 
 * @package    darwin
 * @subpackage model
 * @author     DB team <collections@naturalsciences.be>
 * @version    SVN: $Id: Builder.php 7380 2010-03-15 21:07:50Z jwage $
 */
abstract class BaseIgs extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('igs');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('ig_num', 'string', null, array(
             'type' => 'string',
             'notnull' => true,
             ));
        $this->hasColumn('ig_num_indexed', 'string', null, array(
             'type' => 'string',
             'notnull' => true,
             ));
        $this->hasColumn('ig_date_mask', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 0,
             ));
        $this->hasColumn('ig_date', 'string', null, array(
             'type' => 'string',
             'default' => '0001-01-01',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Specimens', array(
             'local' => 'id',
             'foreign' => 'ig_ref'));
    }
}