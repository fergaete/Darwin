<?php 
include(dirname(__FILE__).'/../../bootstrap/Doctrine.php');
$t = new lime_test(6, new lime_output_color());

$taxs = Doctrine::getTable('Taxonomy')->findOneByName('Falco Peregrinus eliticus');
$t->info('findWithParents($id)');
$taxa = Doctrine::getTable('Taxonomy')->findWithParents($taxs->getId());
$t->isnt($taxa,null, 'we got a taxa');
$t->is($taxa->count(),2, 'we all parent of the taxa');
$t->is($taxa[0]->getId(),$taxs->getKingdomRef(), 'Parent is correct');

$t->is($taxa[0]->Level->__toString(),'kingdom', 'get Level');
$t->is($taxs->getNameWithFormat(),'Falco Peregrinus eliticus', 'get Name without extinct');

$taxs->setExtinct('true');

$t->is($taxs->getNameWithFormat(),'Falco Peregrinus eliticus  †', 'get Name without extinct');
