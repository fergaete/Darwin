<?php

/**
 * Taxonomy filter form.
 *
 * @package    darwin
 * @subpackage filter
 * @author     DB team <collections@naturalsciences.be>
 * @version    SVN: $Id: sfDoctrineFormFilterTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class TaxonomyFormFilter extends BaseTaxonomyFormFilter
{
  public function configure()
  {
    $this->useFields(array('name'));
    $this->addPagerItems();
    $this->widgetSchema['name'] = new sfWidgetFormInputText();
    $this->widgetSchema['table'] = new sfWidgetFormInputHidden();
    $this->widgetSchema->setNameFormat('searchCatalogue[%s]');
    $this->validatorSchema['name'] = new sfValidatorString(array('required' => true,
                                                                 'trim' => true
                                                                )
                                                          );
    $this->validatorSchema['table'] = new sfValidatorString(array('required' => true));
  }

  public function doBuildQuery(array $values)
  {
    $query = parent::doBuildQuery($values);
    $this->addNamingColumnQuery($query, 'taxonomy', 'name_indexed', $values['name']);
    $query->andWhere("id != 0 ");
    return $query;
  }
}
