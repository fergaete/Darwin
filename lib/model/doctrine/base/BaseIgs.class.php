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
 * @property Doctrine_Collection $SpecimenSearch
 * @property Doctrine_Collection $IndividualSearch
 * @property Doctrine_Collection $PartSearch
 * @property Doctrine_Collection $IgsSearch
 * @property Doctrine_Collection $LoanItems
 * 
 * @method integer             getId()               Returns the current record's "id" value
 * @method string              getIgNum()            Returns the current record's "ig_num" value
 * @method string              getIgNumIndexed()     Returns the current record's "ig_num_indexed" value
 * @method integer             getIgDateMask()       Returns the current record's "ig_date_mask" value
 * @method string              getIgDate()           Returns the current record's "ig_date" value
 * @method Doctrine_Collection getSpecimens()        Returns the current record's "Specimens" collection
 * @method Doctrine_Collection getSpecimenSearch()   Returns the current record's "SpecimenSearch" collection
 * @method Doctrine_Collection getIndividualSearch() Returns the current record's "IndividualSearch" collection
 * @method Doctrine_Collection getPartSearch()       Returns the current record's "PartSearch" collection
 * @method Doctrine_Collection getIgsSearch()        Returns the current record's "IgsSearch" collection
 * @method Doctrine_Collection getLoanItems()        Returns the current record's "LoanItems" collection
 * @method Igs                 setId()               Sets the current record's "id" value
 * @method Igs                 setIgNum()            Sets the current record's "ig_num" value
 * @method Igs                 setIgNumIndexed()     Sets the current record's "ig_num_indexed" value
 * @method Igs                 setIgDateMask()       Sets the current record's "ig_date_mask" value
 * @method Igs                 setIgDate()           Sets the current record's "ig_date" value
 * @method Igs                 setSpecimens()        Sets the current record's "Specimens" collection
 * @method Igs                 setSpecimenSearch()   Sets the current record's "SpecimenSearch" collection
 * @method Igs                 setIndividualSearch() Sets the current record's "IndividualSearch" collection
 * @method Igs                 setPartSearch()       Sets the current record's "PartSearch" collection
 * @method Igs                 setIgsSearch()        Sets the current record's "IgsSearch" collection
 * @method Igs                 setLoanItems()        Sets the current record's "LoanItems" collection
 * 
 * @package    darwin
 * @subpackage model
 * @author     DB team <darwin-ict@naturalsciences.be>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
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

        $this->hasMany('SpecimenSearch', array(
             'local' => 'id',
             'foreign' => 'ig_ref'));

        $this->hasMany('IndividualSearch', array(
             'local' => 'id',
             'foreign' => 'ig_ref'));

        $this->hasMany('PartSearch', array(
             'local' => 'id',
             'foreign' => 'ig_ref'));

        $this->hasMany('IgsSearch', array(
             'local' => 'id',
             'foreign' => 'ig_ref'));

        $this->hasMany('LoanItems', array(
             'local' => 'id',
             'foreign' => 'ig_ref'));
    }
}