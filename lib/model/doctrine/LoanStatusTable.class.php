<?php

/**
 * LoanStatusTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class LoanStatusTable extends DarwinTable
{
  /**
  * Returns an instance of this class.
  *
  * @return object LoanStatusTable
  */
  public static function getInstance()
  {
    return Doctrine_Core::getTable('LoanStatus');
  }

  /**
  * getFromLoans
  *
  * Returns an array that contains the LoanStatusses for the loans
  * whose ids are mentioned in the $loan_ids variable.
  * When $loan_ids is an empty array, an empty array will be returned.
  *
  * Only loans that are not Closed/Returned/Rejected will be returned
  * because only ids of loans that are not Closed/Returned/Rejected are
  * received.
  * 
  * @param $loan_ids an array of ids of loans
  * 
  * @return an array of statusses for the given loan_ids
  *            key: id of the loan
  *            value: the (last) status of that loan
  *         or an empty array if no loan_ids were given.   
  */ 

  public function getFromLoans( array $loan_ids )
  { 
    $res_array = array();
    if( !empty($loan_ids) ) 
    {
      $q = Doctrine_Query::create()
        ->from('LoanStatus')
        ->whereIn('loan_ref', $loan_ids)
        ->andWhere( 'is_last = true');
      $result = $q->execute();

      foreach( $result as $res )
        $res_array[$res->getLoanRef()] = $res; 
    }
    return $res_array;
  }

  public function getDistinctStatus()
  {
    $status = array('' => 'All','opened' => 'Opened');
    $all_status = LoanStatus::getAvailableStatus() ;
    foreach($this->createFlatDistinct('loan_status', 'status', 'status')->execute() as $record)
      $status[$record->getStatus()] = $all_status[$record->getStatus()] ;
    return $status ;
  }
  
  private function prepare_query($loan_ref)
  {
    $q = Doctrine_Query::create()
       ->from('LoanStatus')    
       ->orderBy('modification_date_time DESC')       
       ->where('loan_ref= ?', $loan_ref);
    return $q ;       
  }
  
  public function getLoanStatus($loan_ref)
  {
    $q = $this->prepare_query($loan_ref);
    $q->limit(5) ;
    return $q->execute();       
  }
  
  public function getallLoanStatus($loan_ref)
  { 
    $q = $this->prepare_query($loan_ref);
    return $q->execute();   
  }
  
  public function getStatusRelatedArray($loan_refs = array())
  {
    if(!is_array($loan_refs))
      $loan_refs = array($loan_refs);
    if(empty($loan_refs)) return array();
    $q = Doctrine_Query::create()->
         from('LoanStatus')->
         andWhere('is_last = ?', true)->
         andWhereIn('loan_ref', $loan_refs)->
         orderBy('id desc');
    return $q->execute();
  }

}

