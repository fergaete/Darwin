<?php

/**
 * BibliographyTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class BibliographyTable extends DarwinTable
{
  /**
    * Returns an instance of this class.
    *
    * @return object BibliographyTable
    */
  public static function getInstance()
  {
      return Doctrine_Core::getTable('Bibliography');
  }

  /**
   * if a there is at least on collections matching criterias where you don't have rights to encod, 
   * return collections ids
   * @param string $field_name field of the darwin_flat
   * @param int $unit_id An field value
   * @param int $user_id the id of the user to test
   * @return an array of collections where you do not have rights
  **/
  public function testNoRightsCollections($field_name, $unit_id, $user_id)
  {
    return array();
  }

}