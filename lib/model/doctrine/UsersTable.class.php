<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class UsersTable extends DarwinTable
{
  /**
  * Get a user with his username and password in internal system
  * @param string $username The username
  * @param string $password The password of the user
  * @return a record with the user or null if it's not found
  */
  public function getUserByPassword($username, $password)
  {
      $q = Doctrine_Query::create()
          ->useResultCache(null)
          ->from('Users u')
          ->leftJoin('u.UsersLoginInfos ul')
          ->andWhere('ul.user_name = ?',$username)
          ->andWhere('ul.password = ?',sha1(sfConfig::get('app_salt').$password))
          ->andWhere('ul.login_system is null')
          ->andWhere('ul.login_type = ?', 'local');
      return $q->fetchOne();
  }

  public function findUser($id)
  {
    $q = Doctrine_Query::create()
      ->from('users u')
      ->where('u.id = ?', $id);
    return $q->fetchOne(); 
  }
  
  public  function getManagerWithId($id)
  {
    $q = Doctrine_Query::create()
      ->from('users u')
      ->where('u.db_user_type >= 4')
      ->andwhere('u.id = ?', $id);

    return $q->fetchOne(); 
  }
  public function getDistinctTitle()
  {
      return $this->createDistinct('Users', 'title', 'title')->execute();
  }	
  
  public function getDistinctSubType()
  {
      return $this->createDistinct('Users', 'sub_type', 'sub_type')->execute();
  }	
}
