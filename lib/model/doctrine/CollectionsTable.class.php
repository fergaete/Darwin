<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class CollectionsTable extends DarwinTable
{

    public function fetchByInstitutionList($user, $institutionId = null, $public_only = false, $only_encodable = false)
    {
      $q = Doctrine_Query::create()
            ->select('p.*, col.*,r.id,r.db_user_type, CONCAT(col.path,col.id,E\'/\') as col_path_id,  regexp_split_to_array(CONCAT(col.path,col.id,E\'/\'), E\'/\') as col_path_id2')
            ->from('People p')
            ->innerJoin('p.Collections col')
            ->andWhere('p.is_physical = false')
            ->orderBy('p.id ASC, col_path_id2 ASC, col.name ASC');


      if($user && ! $user->isA(Users::ADMIN) )
      {
        $q->leftJoin('col.CollectionsRights r ON col.id=r.collection_ref AND r.user_ref = '.$user->getId())
          ->andWhere('r.id is not null OR col.is_public = TRUE');

        if($only_encodable)
            $q->andWhere('r.db_user_type >= ?',USERS::ENCODER);

      }

      elseif(!$user || $user->isA(Users::ADMIN)  )
      {
         $q->leftJoin('col.CollectionsRights r ON col.id=r.collection_ref AND r.user_ref = -1');
      }

      if($public_only)
        $q->andWhere('col.is_public = TRUE');
      if($institutionId != null)
        $q->andWhere('p.id = ?', $institutionId);

      return $q->execute();
    }

    public function getDistinctCollectionByInstitution($inst = null)
    {
      $q = Doctrine_Query::create()
           ->select('c.*, CONCAT(c.path,c.id,E\'/\') as col_path_id')
           ->from('Collections c')
           ->orderBy('col_path_id ASC,c.name ASC');
      if($inst != null)
        $q->andWhere('c.institution_ref = ?',$inst);

      $res = $q->execute();
      $results = array('' =>'');
      foreach($res as $row)
      {
        $results[$row->getId()] = $row->__toString();
      }
      return $results;
    }

    public function getCollectionByName($name)
    {
      $q = Doctrine_Query::create()
            ->from('collections c')
            ->where('c.name = ?', $name)
            ->orderBy('c.code ASC');

      return $q->fetchOne(); 
    }

    public function fetchByCollectionParent($curent_user, $user_id, $collection_id)
    {
      $expr = "%/$collection_id/%" ;
      $q = Doctrine_Query::create()
        ->select('c.*, r.*, CONCAT(c.path,c.id,E\'/\') as coll_path_id')
        ->from('Collections c')
        ->leftJoin('c.CollectionsRights r ON c.id=r.collection_ref AND r.user_ref = '.$user_id);
      if(! $curent_user->isAtLeast(Users::ADMIN))
        $q->innerJoin('c.CollectionsRights r2 ON c.id=r2.collection_ref AND r2.db_user_type >=4 AND r2.user_ref = '.$curent_user->getId());

      $q->andWhere('c.path like ?', $expr)
        ->orderBy('coll_path_id ASC');
      return $q->execute();
    }

    public function getAllCollections($public_only = false)
    {
      $q = Doctrine_Query::create()
            ->from('Collections c')
            ->orderBy('path,name ASC');
      if($public_only)
        $q->andWhere('c.is_public = TRUE');
      return $q->execute();
    }

    public function getAndUpdateLastCode($collectionId)
    {
      if (!isset($collectionId))
        return 0;
      $conn = Doctrine_Manager::connection();
      $collId = $conn->quote($collectionId, 'integer');
      $sql = "UPDATE collections SET code_last_value = code_last_value+1 WHERE id = $collId RETURNING code_last_value";
      $returnedVal = $conn->fetchOne($sql);
      return $returnedVal;
    }

    public function getInstitutionNameByCollection($collection_ref)
    {
      $q = Doctrine_Query::create()
            ->select('p.*')
            ->from('People p')
            ->innerJoin('p.Collections col')
            ->where('col.id = ?', $collection_ref);
      return $q->fetchOne();
    }

    public function getAllAvailableCollectionsFor($user_id)
    {
      $q = Doctrine_Query::create()
        ->select('c.*')
        ->from('Collections c')
        ->leftJoin('c.CollectionsRights r ON c.id=r.collection_ref AND r.user_ref = '.$user_id)
        ->orderBy('name ASC');
      $res = $q->execute();
      $results = array(0 =>'All');
      foreach($res as $row)
      {
        $results[$row->getId()] = $row->getName();
      }
      return $results;        
    }        
}
