<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class CatalogueProperties extends BaseCatalogueProperties
{
  private static function getModelList($table)
  {
    $file=sfConfig::get('sf_data_dir').'/feed/properties_template.yml' ;
    $data = new Doctrine_Parser_Yml();
    $array = $data->loadData($file);
    $model = array("" => "No templates") ;
    //This test below is theoricaly not necessary since the table should exist in properties_template.yml
    if(@is_array($array[$table]))
    {
      foreach($array[$table] as $key => $value)
        $model[$key] = $value['model_name'] ;
    }
    return $model ;
  }

  public static function getModels($table)
  {

    try{
        $i18n_object = sfContext::getInstance()->getI18n();
    }
    catch( Exception $e )
    {
        return self::getModelList($table);
    }
    return array_map(array($i18n_object, '__'), self::getModelList($table));
  }  
  
  /**
  * Set DateFrom field and mask if a fuzzyDateTime is passed
  * @param string|fuzzyDateTime $fd a fuzzyDateTime object or a string to pass to postgres
  * @return $this
  */
  public function setDateFrom($fd)
  {
     if(is_string($fd))
     {
	$this->_set('date_from',$fd);
     }
     else
     {
      $this->_set('date_from', $fd->format('Y/m/d H:i:s') );
      $this->_set('date_from_mask', $fd->getMask() );
     }
     return $this;
  }

  /**
  * Set DateTo field and mask if a fuzzyDateTime is passed
  * @param string|fuzzyDateTime $fd a fuzzyDateTime object or a string to pass to postgres
  * @return $this
  */
  public function setDateTo($fd)
  {
     if(is_string($fd))
     {
	$this->_set('date_to',$fd);
     }
     else
     {
      $this->_set('date_to', $fd->format('Y/m/d H:i:s') );
      $this->_set('date_to_mask', $fd->getMask() );
     }
     return $this;
  }
  
  /**
  * Get the From date masked with tag $tag depending on the mask value
  * @param string $tag Tag wich will be arround fuzzy values (default < em >)
  * @return string the Date masked
  */
  public function getFromDateMasked($tag='em')
  {
    $dateTime = new FuzzyDateTime($this->_get('date_from'), $this->_get('date_from_mask'),true,true);
    return $dateTime->getDateMasked($tag);
  }
 
  /**
  * Get the From date masked with tag $tag depending on the mask value
  * @param string $tag Tag wich will be arround fuzzy values (default < em >)
  * @return string the Date masked
  */
  public function getToDateMasked($tag='em')
  {
    $dateTime = new FuzzyDateTime($this->_get('date_to'), $this->_get('date_to_mask'),false,true);
    return $dateTime->getDateMasked($tag);
  }

  /** 
  * Get date To as array with masked values
  * @return array an array of masked elements with key year,month,day,hour,minute,second
  * @see FuzzyDateTime::getDateTimeMaskedAsArray
  */
  public function getDateTo()
  {
    $date = new FuzzyDateTime($this->_get('date_to'),$this->_get('date_to_mask'),true, true);
    return $date->getDateTimeMaskedAsArray();
  }

  /** 
  * Get date From as array with masked values
  * @return array an array of masked elements with key year,month,day,hour,minute,second
  * @see FuzzyDateTime::getDateTimeMaskedAsArray
  */
  public function getDateFrom()
  {
    $date = new FuzzyDateTime($this->_get('date_from'),$this->_get('date_from_mask'),false, true);
    return $date->getDateTimeMaskedAsArray();
  }
  
  public function setPropertyTemplate($template)
  {
    $file=sfConfig::get('sf_data_dir').'/feed/properties_template.yml' ;
    $data = new Doctrine_Parser_Yml();
    $array = $data->loadData($file);
    //This test below is theoricaly not necessary since the table should exist in properties_template.yml    
    if(@is_array($array[$this->getReferencedRelation()][$template]))
      $this->fromArray($array[$this->getReferencedRelation()][$template]) ;
    else
      return null ;
  }
}
