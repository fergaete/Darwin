<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class SpecimenIndividualsTable extends DarwinTable
{
    protected static $widget_array = array(
      'type' => 'type' ,
      'type_group' => 'type' ,
      'type_search' => 'type' ,
      'sex' => 'sex' ,
      'state' => 'sex' ,
      'stage' => 'stage' ,
      'social_status' => 'socialStatus' ,
      'rock_form' => 'rockForm' ,
      'specimen_individuals_count_min' => 'specimenIndividualCount' ,
      'specimen_individuals_count_min' => 'specimenIndividualCount' 
    );


  public function findDuplicate($object)
  {
    $q = Doctrine_Query::create()
      ->from('SpecimenIndividuals s')
      ->andwhere('s.specimen_ref = ?', $object->getSpecimenRef())
      ->andwhere('s.type = ?', $object->getType())
      ->andwhere('s.sex = ?', $object->getSex())
      ->andwhere('s.stage = ?', $object->getStage())
      ->andwhere('s.state = ?', $object->getState())
      ->andwhere('s.social_status = ?', $object->getSocialStatus())
      ->andwhere('s.rock_form = ?', $object->getRockForm());
    return $q->fetchOne(); 
  }

    /**
    * Get distinct Types
    * @return Doctrine_collection with distinct "types" as column
    */
    public function getDistinctTypes()
    {
      $types = $this->createFlatDistinct('specimen_individuals', 'type', 'type')->execute();
      $types->add(new SpecimenIndividuals);
      return $types;
    }

    /**
    * Get distinct Type groups
    * @return Doctrine_collection with distinct "type groups" as column
    */
    public function getDistinctTypeGroups()
    {
      $types = $this->createFlatDistinct('specimen_individuals', 'type_group', 'type_group')->execute();
      $types->add(new SpecimenIndividuals);
      return $types;
    }

    /**
    * Get distinct Type searches
    * @return Doctrine_collection with distinct "type searches" as column
    */
    public function getDistinctTypeSearches()
    {
      $types = $this->createFlatDistinct('specimen_individuals', 'type_search', 'type_search')->execute();
      $types->add(new SpecimenIndividuals);
      return $types;
    }

    /**
    * Get distinct Sexes
    * @return Doctrine_collection with distinct "sexes" as column
    */
    public function getDistinctSexes()
    {
      $sexes = $this->createFlatDistinct('specimen_individuals', 'sex', 'sex')->execute();
      $sexes->add(new SpecimenIndividuals);
      return $sexes;
    }

    /**
    * Get distinct States
    * @return Doctrine_collection with distinct "states" as column
    */
    public function getDistinctStates()
    {
      $states = $this->createFlatDistinct('specimen_individuals', 'state', 'state')->execute();
      $states->add(new SpecimenIndividuals);
      return $states;
    }

    /**
    * Get distinct Stages
    * @return Doctrine_collection with distinct "stages" as column
    */
    public function getDistinctStages()
    {
      $stages = $this->createFlatDistinct('specimen_individuals', 'stage', 'stage')->execute();
      $stages->add(new SpecimenIndividuals);
      return $stages;
    }

    /**
    * Get distinct Social statuses
    * @return Doctrine_collection with distinct "social statuses" as column
    */
    public function getDistinctSocialStatuses()
    {
      $social_statuses = $this->createFlatDistinct('specimen_individuals', 'social_status', 'social_status')->execute();
      $social_statuses->add(new SpecimenIndividuals);
      return $social_statuses;
    }

    /**
    * Get distinct Rock forms
    * @return Doctrine_collection with distinct "rock forms" as column
    */
    public function getDistinctRockForms()
    {
      $rock_forms = $this->createFlatDistinct('specimen_individuals', 'rock_form', 'rock_form')->execute();
      $rock_forms->add(new SpecimenIndividuals);
      return $rock_forms;
    }
    
    public function getIndividualBySpecimen($id)
    {
      $q = Doctrine_Query::create()
        ->from('SpecimenIndividuals s');
      $alias = $q->getRootAlias() ;
      $q->andWhere($alias . '.specimen_ref = ?', $id);
      return $q->execute() ;
    }

    public function getSpecimenByIndividual($id)
    {
      $q = Doctrine_Query::create()
        ->select('id, specimen_ref')
        ->from('SpecimenIndividuals i')
        ->where('i.id = ?',$i);
      $alias = $q->getRootAlias() ;
      $r =  $q->execute();      
      if($r->count())
        return $r[0]->getSpecimenRef();
      return null;
    }

    public function getRandomPublicSpec($number)
    {
      $q = Doctrine_Query::create()
        ->from('SpecimenIndividuals i')
        ->innerJoin('i.SpecimensFlat s')
        ->where('s.collection_is_public = true')
        ->orderBy('random()')
        ->limit($number)
        ->useResultCache(new Doctrine_Cache_Apc() )
        ->setResultCacheLifeSpan( 60 * 30 ) // 30 min
        ;
      return $q->execute();
    }

    /**
    * Set required widget visible and opened 
    */   
    public function getRequiredWidget($criterias, $user, $category, $all = 0)
    {
      if(!$all)
      {
        $req_widget = array() ;
        $default_values = array(0,"Undefined","undefined","not applicable","0001/01/01");        
        foreach($criterias as $key => $fields)
        {
          if ($key == "rec_per_page") continue ;
          if ($fields == "") continue ;

          if(isset(self::$widget_array[$key]))
            $req_widget[self::$widget_array[$key]] = 1 ;
        }
        Doctrine::getTable('MyWidgets')->forceWidgetOpened($user, $category ,array_keys($req_widget));
      }
      else
        Doctrine::getTable('MyWidgets')->forceWidgetOpened($user, $category ,1);
    }    
}
