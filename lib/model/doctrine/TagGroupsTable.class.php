<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class TagGroupsTable extends DarwinTable
{
  public function getDistinctSubGroups($group)
  {
    $q = $this->createDistinct('TagGroups  INDEXBY sgn', 'sub_group_name', 'sgn','');
    $q->andWhere('group_name_indexed = fulltoIndex(?)', $group);
    $results = $q->fetchArray();
    if(count($results))
      $results = array_combine(array_keys($results),array_keys($results));

    return array_merge(array(''=>''), $results);
  }

  public function getPropositions($value, $group="", $sub_group="")
  {
    $conn = Doctrine_Manager::connection();
    $tags = $conn->quote($value, 'string');
    $q_group = $conn->quote($group, 'string');
    $grouping_clause = " AND group_type = $q_group";
    $q_sub_group = $conn->quote($sub_group, 'string');
    $sub_grouping_clause = " AND sub_group_type = $q_sub_group";
    $group_by = " GROUP by tag";
    $order_by = " ORDER BY tag asc";
    $limit = " LIMIT 10";

    $sql = "SELECT tag, sum(cnt) as cnt, 1 as precision
            FROM tags as t RIGHT JOIN 
              (SELECT x.group_ref,COUNT(*) as cnt 
               FROM 
                (SELECT group_ref 
                 FROM tags 
                 WHERE tag_indexed IN 
                  (SELECT distinct(fulltoIndex(tags)) as u_tag 
                   FROM regexp_split_to_table($tags, ';') as tags 
                   WHERE fulltoIndex(tags) != ''
                  )
                ) as x GROUP BY x.group_ref
               ORDER BY cnt DESC
              ) AS y ON t.group_ref = y.group_ref
            WHERE tag_indexed NOT IN 
              (SELECT distinct(fulltoIndex(tags)) as u_tag 
               FROM regexp_split_to_table($tags, ';') as tags 
               WHERE fulltoIndex(tags) != ''
              )";

    if($group !="")
      $sql .= $grouping_clause;
    if($sub_group != "")
      $sql .= $sub_grouping_clause;

    $sql .= $group_by . $order_by . $limit;
    $result = $conn->fetchAssoc($sql);

    $max = 0;
    $min = 0;
    $nbr_of_steps= 5;
    foreach($result as $i => $item)
    {
      if($max < $item['cnt'])
        $max = $item['cnt'];
      if($min > $item['cnt'])
        $min = $item['cnt'];
    }
    $step = ($max - $min) / $nbr_of_steps;
    foreach($result as $i => $item)
    {
      $value .= ';'.$item['tag'];
      $result[$i]['size'] = round($item['cnt'] / $step);
    }
    /* @TODO: Modifiy this hard coded value to use an application parameter instead*/
    if (count($result) < 4)
    {
      $tags_excluded = $conn->quote($value, 'string');
      $group_by = " GROUP BY similarity(tag, u_tags), tag";
      $order_by = " ORDER BY similarity(tag, u_tags) desc, tag asc";
      $sql = "select tag, similarity(tag, u_tags) as sims
              from tags as t inner join 
                   (select distinct (tagsi) as u_tags
                    from regexp_split_to_table($tags, ';') as tagsi
                    where fulltoIndex(tagsi) != ''
                   ) as taglist on t.tag % u_tags
              where tag_indexed NOT IN 
              (SELECT distinct(fulltoIndex(tags)) as u_tag 
               FROM regexp_split_to_table($tags_excluded, ';') as tags 
               WHERE fulltoIndex(tags) != ''
              )";

      if($group !="")
        $sql .= $grouping_clause;
      if($sub_group != "")
        $sql .= $sub_grouping_clause;

      $sql .= $order_by;

      $sql = "select distinct tag, 2 as size, 0 as precision
              from (" .$sql.") as subquery ".$limit;
      $fuzzyResults = $conn->fetchAssoc($sql);
      $result = array_merge($result, $fuzzyResults);
    }
    
    return $result;
  }

  public function fetchTag($ids)
  {
    $q = Doctrine_Query::create()
         ->from('TagGroups g')
         ->innerJoin('g.Tags t')
         ->andWherein('g.gtu_ref', $ids);
    $r = $q->execute();
    $results = array();
    foreach($r as $i)
    {
      if(!isset($results[$i->getGtuRef()]))
        $results[$i->getGtuRef()] = array();

      $results[$i->getGtuRef()][] = $i;
    }
    return $results;
  }

}