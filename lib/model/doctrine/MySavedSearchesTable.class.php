<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class MySavedSearchesTable extends DarwinTable
{
  public function addUserOrder(Doctrine_Query $q = null,$user)
  {
    if (is_null($q))
    {
        $q = Doctrine_Query::create()
            ->from('MySavedSearches s');
    }
    $alias = $q->getRootAlias();
    $q->andWhere($alias . '.user_ref = ?', $user)
        ->orderBy($alias . '.favorite DESC');
    return $q;
  }

  public function addIsSearch(Doctrine_Query $q, $is_search = false)
  {
    $q->andWhere($q->getRootAlias() . '.is_only_id = ?', !$is_search);
    return $q;
  }
  
  public function getSavedSearchByKey($id, $user )
  {       
    return $this->addUserOrder(null, $user)
      ->andWhere('id = ?', $id )
      ->fetchOne();
  }

  public function fetchSearch($user_ref, $num_per_page)
  {
    $q = $this->addUserOrder(null,$user_ref);
    $this->addIsSearch($q, true);
    $q->setLimit($num_per_page);

    return $q->execute();
  }

  public function fetchSpecimens($user_ref, $num_per_page)
  {
    $q = $this->addUserOrder(null,$user_ref);
    $this->addIsSearch($q, false);
    $q->setLimit($num_per_page);

    return $q->execute();
  }

  public function getAllFields()
  {
    return array('category'=>'category',
                 'collection'=>'collection',
                 'taxon'=>'taxon',
                 'type'=>'type',                 
                 'gtu'=>'gtu',
                 'chrono'=>'chrono',
                 'litho'=>'litho',
                 'lithologic'=>'lithologic',
                 'expedition'=>'expedition',
                 'mineral'=>'mineral',
                 'count'=>'count');
  
  }
}
