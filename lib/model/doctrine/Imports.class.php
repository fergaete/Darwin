<?php

/**
 * Imports
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    darwin
 * @subpackage model
 * @author     DB team <collections@naturalsciences.be>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Imports extends BaseImports
{
  private static $state = array('' => 'All', 'imported' => 'Imported', 'processing' => 'Processing', 'ok' => 'Ready', 'rejected' => 'Rejected', 'computing' => 'Computing') ;  
    
  public static function getFormats()
  {
    return self::$formatArray ;
  }
  
  public static function getStateList()
  {
    return self::$state ;
  }    

  public function getLastModifiedDate()
  {
    
    $dateTime = new FuzzyDateTime($this->_get('updated_at')!=''?$this->_get('updated_at'):$this->_get('created_at'));
    return $dateTime->getDateMasked('em','d/m/Y H:i');
  }  
}
