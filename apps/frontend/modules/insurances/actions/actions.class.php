<?php

/**
 * property actions.
 *
 * @package    darwin
 * @subpackage insurances
 * @author     DB team <collections@naturalsciences.be>
 */
class insurancesActions extends sfActions
{
  public function executeAdd(sfWebRequest $request)
  {
    $this->insurance = null;
    if($request->hasParameter('rid'))
    {
      $this->insurance = Doctrine::getTable('Insurances')->findExcept($request->getParameter('rid'));
    }

    if(! $this->insurance)
    {
     $this->insurance = new Insurances();
     $this->insurance->setRecordId($request->getParameter('id'));
     $this->insurance->setReferencedRelation($request->getParameter('table'));
    }
    $this->form = new InsurancesForm($this->insurance);
    
    if($request->isMethod('post'))
    {
	$this->form->bind($request->getParameter('insurances'));
	if($this->form->isValid())
	{
	  try{
	    $this->form->save();
	    $this->form->getObject()->refreshRelated();
	    $this->form = new InsurancesForm($this->form->getObject()); //Ugly refresh
	    $this->message = 'Your (insurance) value saved';
	  }
	  catch(Exception $e)
	  {
            $error = new sfValidatorError(new savedValidator(),$e->getMessage());
            $this->form->getErrorSchema()->addError($error); 
	  }
	}
    }
  }

  public function executeDelete(sfWebRequest $request)
  {
    $r = Doctrine::getTable('Insurances')->findExcept($request->getParameter('id'));
    $this->forward404Unless($r,'No such Value');
    try{
      $r->delete();
    }
    catch(Exception $e)
    {
      return $this->renderText($e->getMessage());
    }
    return $this->renderText('ok');
  }
  
}