<?php

/**
 * InformativeWorkflow
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    darwin
 * @subpackage model
 * @author     DB team <collections@naturalsciences.be>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class InformativeWorkflow extends BaseInformativeWorkflow
{
  private static $status = array(
      'all' => array('all' => 'All','checked' => 'Checked','suggestion' => 'Suggestion','to check' => 'To check'),
      Users::REGISTERED_USER => array('suggestion' => 'Suggestion'),
      Users::ENCODER => array('to check' => 'To check'),
      Users::MANAGER => array('checked' => 'Checked'),
      Users::ADMIN => array('checked' => 'Checked','suggestion' => 'Suggestion','to check' => 'To check')
    );
    
  public function getFormattedStatus()
  {
    return self::$status['all'][$this->getStatus()] ;
  }
 
  /* if $user _right = all then we want all the status for the filter */
  public static function getAvailableStatus($user_right)
  { 
    try{
        $i18n_object = sfContext::getInstance()->getI18n();
    }
    catch( Exception $e )
    {
        return self::$status[$user_right];
    }
    return array_map(array($i18n_object, '__'), self::$status[$user_right]);
  }
  
  public function getLink()
  {
    $result = $this->getLinkforKnownTable($this->_get('referenced_relation') , $this->_get('record_id'));
    if($result)
      return $result;
    $result = $this->getLinkforRefTable($this->_get('referenced_relation') , $this->_get('record_id'));
    if($result)
      return $result;
    return "";
  }
  
  protected function getLinkforKnownTable($table, $id)
  {
    switch($table)
    {
      case 'collections':
        $link = 'collection/view?id='.$id; break;
      case 'specimens':
        $link = 'specimen/view?id='.$id; break;
      case 'specimen_individuals':
        $link = 'individuals/view?id='.$id; break;
      case 'specimen_parts':
        $link = 'parts/view?id='.$id; break;
      case 'expeditions':
        $link = 'expedition/view?id='.$id; break;
      case 'taxonomy':
      case 'lithology':
      case 'lithostratigraphy':
      case 'chronostratigraphy':
      case 'mineralogy':
      case 'people':
      case 'insurances':
      case 'igs':
      case 'gtu':
        $link = $table.'/view?id='.$id; break;
      default:
        $link = false; break;
    }
    return $link;  
  }
}
