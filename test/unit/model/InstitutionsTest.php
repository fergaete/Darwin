<?php 
include(dirname(__FILE__).'/../../bootstrap/Doctrine.php');
$t = new lime_test(7, new lime_output_color());

$t->info('Get Possible types from array');
$institution = new Institutions;
$types = $institution->getTypes();
$t->is(count($types), 1, 'There are "1" differents types');
$t->is($types[8], 'Expert', 'the type "Expert"');
$t->info('Test types for Institutions encoded');

$t->info('Get the toString of the first institution: RBINS');
$t->is($institutions[0]->__toString(), 'Institut Royal des Sciences Naturelles de Belgique', 'Correct toString of RBINS');
