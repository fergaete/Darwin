<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class PeopleTable extends Doctrine_Table
{
  public function searchPysical($name)
  {
    $q = Doctrine_Query::create()
	 ->from('People p')
	->andWhere('p.is_physical = ?', true)
	->andWhere('p.formated_name_ts @@ to_tsquery(?)',$name);
    return $q->execute();
  }
}