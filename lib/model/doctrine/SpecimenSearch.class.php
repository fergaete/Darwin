<?php

/**
 * SpecimenSearch
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    darwin
 * @subpackage model
 * @author     DB team <collections@naturalsciences.be>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class SpecimenSearch extends BaseSpecimenSearch
{

    public function getCountryTags()
    {
      $tags = explode(';',$this->getGtuCountryTagValue(''));
      $nbr = count($tags);
      if(! $nbr) return "-";
      $str = '<ul class="name_tags">';
      foreach($tags as $value)
        if (strlen($value))
          $str .=  '<li>' . trim($value).'</li>';
      $str .= '</ul>';
      
      return $str;
    }

    public function getOtherGtuTags()
    {
      $tags = explode(';',$this->getGtuCountryTagValue(''));
      $nbr = count($tags);
      if(! $nbr) return "-";
      $str = '<ul class="name_tags">';
      foreach($tags as $value)
        if (strlen($value))
          $str .=  '<li>' . trim($value).'</li>';
      $str .= '</ul>';
      
      return $str;
    }
}