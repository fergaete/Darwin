<?php 
include(dirname(__FILE__).'/../../bootstrap/Doctrine.php');
$t = new lime_test(12, new lime_output_color());

$fromDate = new FuzzyDateTime('1830/01/01', 32);
$toDate = new FuzzyDateTime('2009/12/31', 32);
$igs = Doctrine::getTable('Igs')->findAll();
$t->is( $igs[0]->getIgDateMasked() , '24/06/1868', 'Correct date masked: "24/06/1868"');
$t->is( $igs[3]->getIgDateMasked() , '<em>01/01/0001</em>', 'Correct date masked: "<em>01/01/0001</em>"');
$t->is( $igs[0]->getIgDate() , array('year'=>1868, 'month'=>06, 'day'=>24, 'hour'=>'', 'minute'=>'', 'second'=>''), 'Correct date masked as array');
$t->is( $igs[3]->getIgDate() , array('year'=>'', 'month'=>'', 'day'=>'', 'hour'=>'', 'minute'=>'', 'second'=>''), 'Correct date masked as array');
$igs[0]->setIgDate($fromDate);
$igs[3]->setIgDate($toDate);
$t->is( $igs[0]->getIgDateMasked() , '<em>01/01</em>/1830', 'Correct date masked: "<em>01/01/</em>1830"');
$t->is( $igs[3]->getIgDateMasked() , '<em>31/12</em>/2009', 'Correct date masked: "<em>31/12/</em>2009"');
$t->is( $igs[0]->getIgDate() , array('year'=>1830, 'month'=>'', 'day'=>'', 'hour'=>'', 'minute'=>'', 'second'=>''), 'Correct date masked as array');
$t->is( $igs[3]->getIgDate() , array('year'=>2009, 'month'=>'', 'day'=>'', 'hour'=>'', 'minute'=>'', 'second'=>''), 'Correct date masked as array');
$igs[0]->setIgDate('1975/01/01');
$igs[3]->setIgDate('2009/12/31');
$t->is( $igs[0]->getIgDateMasked() , '01/01/1975', 'Correct date masked: "01/01/1975"');
$t->is( $igs[3]->getIgDateMasked() , '31/12/2009', 'Correct date masked: "31/12/2009"');
$t->is( $igs[0]->getIgDate() , array('year'=>1975, 'month'=>01, 'day'=>01, 'hour'=>'', 'minute'=>'', 'second'=>''), 'Correct from date masked as array for "Antarctica 1988"');
$t->is( $igs[3]->getIgDate() , array('year'=>2009, 'month'=>12, 'day'=>31, 'hour'=>'', 'minute'=>'', 'second'=>''), 'Correct to date masked as array for "Antarctica 1988"');