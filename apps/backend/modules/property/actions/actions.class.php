<?php

/**
 * property actions.
 *
 * @package    darwin
 * @subpackage property
 * @author     DB team <darwin-ict@naturalsciences.be>
 */
class propertyActions extends DarwinActions
{
  protected $ref_id = array('specimens' => 'spec_ref','specimen_individuals' => 'individual_ref','specimen_parts' => 'part_ref') ;
  public function executeAdd(sfWebRequest $request)
  {
    if(!$this->getUser()->isA(Users::ADMIN)) 
    {
      if($request->getParameter('table') == 'loans' || $request->getParameter('table') == 'loan_items')
      {
        $loan = Doctrine::getTable($request->getParameter('table')=='loans'?'Loans':'LoanItems')->find($request->getParameter('id')) ;
        if(!Doctrine::getTable('loanRights')->isAllowed($this->getUser()->getId(),$request->getParameter('table')=='loans'?$loan->getId():$loan->getLoanRef()))
          $this->forwardToSecureAction();
      }
      elseif($this->getUser()->isA(Users::REGISTERED_USER)) 
        $this->forwardToSecureAction();
    }  
    if($request->hasParameter('id'))
    {  
      $r = Doctrine::getTable( DarwinTable::getModelForTable($request->getParameter('table')) )->find($request->getParameter('id'));
      $this->forward404Unless($r,'No such item');     
      if(!$this->getUser()->isA(Users::ADMIN))   
      {      
        if(in_array($request->getParameter('table'),array_keys($this->ref_id)) )
        {

          if(! Doctrine::getTable('Specimens')->hasRights($this->ref_id[$request->getParameter('table')], $request->getParameter('id'), $this->getUser()->getId()))
            $this->forwardToSecureAction();    
        }
      }
    }
    $this->property = null;
    if($request->hasParameter('rid'))
    {
      $this->property = Doctrine::getTable('CatalogueProperties')->find($request->getParameter('rid'));
    }

    if(! $this->property)
    {
     $this->property = new CatalogueProperties();
     $this->property->setRecordId($request->getParameter('id'));
     $this->property->setReferencedRelation($request->getParameter('table'));
     if($request->hasParameter('model'))
       $this->property->setPropertyTemplate($request->getParameter('model'));     
    }
    $this->form = new CataloguePropertiesForm($this->property,array('ref_relation' => $request->getParameter('table'),'hasmodel' => $request->getParameter('model')?true:false));
    
    if($request->isMethod('post'))
    {
	    $this->form->bind($request->getParameter('catalogue_properties'));
	    if($this->form->isValid())
	    {
	      try{
	        $this->form->save();
	        return $this->renderText('ok');
	      }
	      catch(Exception $ne)
	      {
	              $e = new DarwinPgErrorParser($ne);
                $error = new sfValidatorError(new savedValidator(),$e->getMessage());
                $this->form->getErrorSchema()->addError($error); 
	      }
	    }
    }
  }
  
  public function executeGetUnit(sfWebRequest $request)
  {
    $this->items = Doctrine::getTable('CatalogueProperties')->getDistinctUnit($request->getParameter('type'));
    $this->setTemplate('options');
  }

  public function executeGetSubtype(sfWebRequest $request)
  {
    $this->items = Doctrine::getTable('CatalogueProperties')->getDistinctSubType($request->getParameter('type'));
    $this->setTemplate('options');
  }

  public function executeGetQualifier(sfWebRequest $request)
  {
    $this->items = Doctrine::getTable('CatalogueProperties')->getDistinctQualifier($request->getParameter('subtype'));
    $this->setTemplate('options');
  }

  public function executeAddValue(sfWebRequest $request)
  {
    $number = intval($request->getParameter('num'));
    $prop = null;

    if($request->hasParameter('id') && $request->getParameter('id'))
      $prop = Doctrine::getTable('CatalogueProperties')->find($request->getParameter('id') );

    $form = new CataloguePropertiesForm($prop, array('ref_relation' => $request->getParameter('table')));
    $form->addValue($number);
    return $this->renderPartial('prop_value',array('form' => $form['newVal'][$number]));
  }

}
