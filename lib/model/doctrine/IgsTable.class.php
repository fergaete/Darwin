<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class IgsTable extends DarwinTable
{
  public function getIgLike($ig_num, $from_date, $to_date, $orderBy='ig_num', $orderByOrder='asc')
  {
    $q = Doctrine_Query::create()
         ->from('Igs i');
    if ($ig_num != "")
    {
      $q->andWhere("i.ig_num_indexed like concat(fullToIndex(?), '%') ", $ig_num);
    }

    if (($from_date->getMask() > 0) && ($to_date->getMask() > 0))
    {
      $q->andWhere(" i.ig_date Between ? and ? ", 
                   array($from_date->format('d/m/Y'), 
                         $to_date->format('d/m/Y')
                        )
                  );
    }
    elseif (($from_date->getMask() > 0) && ($to_date->getMask() == 0))
    {
      $q->andWhere(" i.ig_date >= ? ", 
                   $from_date->format('d/m/Y')
                  );
    } 
    elseif (($from_date->getMask() == 0) && ($to_date->getMask() > 0))
    {
      $q->andWhere(" i.ig_date >= ? ", 
                   $to_date->format('d/m/Y')
                  );
    } 

    $q->andWhere("i.id > 0 ")
      ->orderby($orderBy . ' ' . $orderByOrder);
    return $q;
  }
}