<?php

/**
 * account actions.
 *
 * @package    darwin
 * @subpackage board_widget
 * @author     DB team <collections@naturalsciences.be>
 * @version    SVN: $Id: actions.class.php 12479 2008-10-31 10:54:40Z fabien $
 */
class cataloguewidgetComponents extends sfComponents
{

  public function executeRelationRename()
  {
    if( isset($this->options) )
    {
      $this->eid = $this->options->getObject()->getId();       //When restore widget on edit
    }
    if(isset($this->eid) && $this->eid != null)
    {
      //on edit
      $this->relations = Doctrine::getTable('CatalogueRelationships')->getRelationsForTable('taxonomy', 'Taxonomy', $this->eid, 'current_name');
    }
  }

  public function executeRelationRecombination()
  {
    if( isset($this->options) )
    {
      $this->eid = $this->options->getObject()->getId();       //When restore widget on edit
    }
    if(isset($this->eid) && $this->eid != null)
    {
      //on edit
      $this->relations = Doctrine::getTable('CatalogueRelationships')->getRelationsForTable('taxonomy', 'Taxonomy', $this->eid, 'recombined from');
    }
  }
}
