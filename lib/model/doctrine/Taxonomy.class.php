<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Taxonomy extends BaseTaxonomy
{
  public function getNameWithFormat()
  {
    if($this->_get('extinct'))
    {
      return $this->_get('name') . ' †';
    }
    else
    {
      return $this->_get('name');
    }
  }
}