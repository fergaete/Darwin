<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Users extends BaseUsers
{
  const REGISTERED_USER = 1;
  const ENCODER = 2;
  const MANAGER = 4;
  const ADMIN = 8;

  public function __toString()
  {
    return $this->getFormatedName();
  }

  /**
  * function getStatus
  * @return string a 'title' for a user : 'M' for a Male, 'F' for a female, and 'moral' for a non physical user
  */
  public function getStatus()
  {
    if (!$this->getIsPhysical())
    	return ("moral") ;
    else
    {
      $gender = $this->getGender();
      return (strtolower( $gender=='' ? 'M' : $gender));
    }
  }

  public static function getTypes($options = null)
  {
    if (isset($options['screen']) && $options['screen'] == 1)
      return array( self::REGISTERED_USER => Users::getTypeName(self::REGISTERED_USER) );

    $db_user_type = array(
      self::REGISTERED_USER => self::getTypeName(self::REGISTERED_USER),
      self::ENCODER => self::getTypeName(self::ENCODER),
      self::MANAGER => self::getTypeName(self::MANAGER),
      //self::ADMIN => self::getTypeName(self::ADMIN)
    );
    
    if (isset($options['screen']) && $options['screen'] == 3)
    {
      array_pop($db_user_type) ;
      return $db_user_type ;
    }	 
    return $db_user_type ;
  }

  public function isAtLeast($role)
  {
    return $this->getDbUserType() >= $role;
  }

  public function isA($role)
  {
    return $this->getDbUserType() == $role;
  }

  public static function getTypeName($db_user_type)
  {
    switch ($db_user_type)
    {
      case self::REGISTERED_USER : $type = 'Registered user'; break ;
      case self::ENCODER : $type = 'Encoder'; break ;
      case self::MANAGER : $type = 'Conservator'; break ;
      case self::ADMIN : $type = 'Administrator'; break ;  
    }
    try{
        $i18n_object = sfContext::getInstance()->getI18n();
    }
    catch( Exception $e )
    {
        return $type;
    }
    return $i18n_object->__($type);
  }


  /**
  * function to add all user's widgets in my_widgets table
  * use user id and db_user_type
  * @return the number of widget added
  */
  public function addUserWidgets($thisWidget = null)
  {
    $count_widget = 0;
    $array_right = Users::getTypes(array('db_user_type' => self::ADMIN)) ;
    foreach ($array_right as $key => $right)
    {
      $file = MyWidgets::getFileByRight($key) ;
      if($file)
      {
        $data = new Doctrine_Parser_Yml();
        $array = $data->loadData($file);
        foreach ($array as $widget => $array_values)
        {
          if($thisWidget && ($thisWidget['name'] != $array_values['group_name'] || $thisWidget['category'] != $array_values['category'])) continue;
          $pref = new MyWidgets() ;
          $array_values['user_ref'] = $this->getId();
          $pref->fromArray($array_values);
          $pref->setIsAvailable(true);
          try
          {
            $pref->save();
            $count_widget++;            
          }
          catch(Doctrine_Exception $ne) {}
        }
      }
    }
    return $count_widget;
  }
  
  public function getCorrespondingImage()
  {
    if(!$this->getIsPhysical()) return "user_suit_moral.png" ;
    if($this->getGender() == 'M') return "user_suit_m.png" ;
    return "user_suit_f.png" ;
  }  
}
