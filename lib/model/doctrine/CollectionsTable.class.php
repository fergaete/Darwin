<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class CollectionsTable extends DarwinTable
{

    public function fetchByInstitutionList($institutionId = null)
    {
      $q = Doctrine_Query::create()
            ->select('p.*, col.*, CONCAT(col.path,col.id,E\'/\') as col_path_id')
            ->from('People p')
            ->innerJoin('p.Collections col')
            ->andWhere('p.is_physical = false')
            ->orderBy('p.id ASC, col_path_id ASC');
      if($institutionId != null)
        $q->andWhere('p.id = ?', $institutionId);
      return $q->execute();
    }

    public function getDistinctCollectionByInstitution($inst = null)
    {
      $q = Doctrine_Query::create()
	    ->select('c.*, CONCAT(c.path,c.id,E\'/\') as col_path_id')
            ->from('Collections c')
            ->orderBy('col_path_id ASC');
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
		->where('c.name = ?', $name);

	   return $q->fetchOne(); 
    }
    
    public function findCollection($id)
    {
	   $q = Doctrine_Query::create()
		->from('collections c')
		->where('c.id = ?', $id);

	   return $q->fetchOne(); 
    }

    public function fetchByCollectionParent($ParentId)
    {
      $expr = "%/$ParentId/%" ;
      $q = Doctrine_Query::create()
	    ->select('c.id, c.name, c.path, CONCAT(c.path,c.id,E\'/\') as coll_path_id')
            ->from('Collections c')
            ->andWhere('c.path like ?', $expr)
            ->orderBy('coll_path_id ASC');
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
}
