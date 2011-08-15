<?php

// This is an array of fake form values that should be coming from your
// database, or data storage system. This is simply defined here for
// example purposes only.

/*
$fake_db_vals = array(
				'form_hash'=>'1f5629c844161727f84bc9f35c90e34141498859',
				'form_structure'=>'a:4:{i:0;a:3:{s:8:"cssClass";s:10:"input_text";s:8:"required";s:5:"false";s:6:"values";s:4:"Name";}i:1;a:3:{s:8:"cssClass";s:10:"input_text";s:8:"required";s:4:"true";s:6:"values";s:15:"E-mail Address?";}i:2;a:4:{s:8:"cssClass";s:8:"checkbox";s:8:"required";s:5:"false";s:5:"title";s:11:"Choose any:";s:6:"values";a:4:{i:2;a:2:{s:5:"value";s:3:"PHP";s:8:"baseline";s:4:"true";}i:3;a:2:{s:5:"value";s:6:"jQuery";s:8:"baseline";s:4:"true";}i:4;a:2:{s:5:"value";s:3:"XML";s:8:"baseline";s:4:"true";}i:5;a:2:{s:5:"value";s:5:"Aspen";s:8:"baseline";s:5:"false";}}}i:3;a:4:{s:8:"cssClass";s:5:"radio";s:8:"required";s:4:"true";s:5:"title";s:11:"Choose one:";s:6:"values";a:2:{i:2;a:2:{s:5:"value";s:3:"Yes";s:8:"baseline";s:4:"true";}i:3;a:2:{s:5:"value";s:2:"No";s:8:"baseline";s:5:"false";}}}}');


$fake_db_vals = array(
				'form_hash' => 'ac5e4df3af01a7199ce7aeb76b8bbb83d4daa0e4',
				'form_structure' => 'a:4:{i:0;a:4:{s:8:"cssClass";s:10:"input_text";s:8:"required";s:7:"checked";s:6:"values";s:4:"Name";s:4:"code";s:9:"__TEST1__";}i:1;a:4:{s:8:"cssClass";s:10:"input_text";s:8:"required";s:7:"checked";s:6:"values";s:15:"E-mail Address?";s:4:"code";s:9:"__TEST2__";}i:2;a:5:{s:8:"cssClass";s:8:"checkbox";s:8:"required";s:9:"undefined";s:5:"title";s:11:"Choose any:";s:4:"code";s:9:"__TEST3__";s:6:"values";a:4:{i:0;a:2:{s:5:"value";s:3:"PHP";s:8:"baseline";s:7:"checked";}i:1;a:2:{s:5:"value";s:6:"jQuery";s:8:"baseline";s:7:"checked";}i:2;a:2:{s:5:"value";s:3:"XML";s:8:"baseline";s:7:"checked";}i:3;a:2:{s:5:"value";s:5:"Aspen";s:8:"baseline";s:9:"undefined";}}}i:3;a:5:{s:8:"cssClass";s:5:"radio";s:8:"required";s:9:"undefined";s:5:"title";s:11:"Choose one:";s:4:"code";s:9:"__TEST4__";s:6:"values";a:2:{i:0;a:2:{s:5:"value";s:3:"Yes";s:8:"baseline";s:7:"checked";}i:1;a:2:{s:5:"value";s:2:"No";s:8:"baseline";s:9:"undefined";}}}}',
				'form_data' => 'a:7:{s:9:"__TEST1__";s:5:"roger";s:9:"__TEST2__";s:13:"test@test.com";s:11:"__TEST3__-0";s:3:"PHP";s:11:"__TEST3__-1";s:6:"jQuery";s:11:"__TEST3__-2";b:0;s:11:"__TEST3__-3";b:0;s:9:"__TEST4__";s:3:"Yes";}');
*/

$fake_db_vals = array(
				'form_hash' => '1133082411f654ef8bc06f3879993159fe60d063',
				'form_structure' => 'a:5:{i:0;a:4:{s:8:"cssClass";s:10:"input_text";s:8:"required";s:7:"checked";s:6:"values";s:3:"Nom";s:4:"code";s:9:"__TEST1__";}i:1;a:4:{s:8:"cssClass";s:10:"input_text";s:8:"required";s:7:"checked";s:6:"values";s:7:"Prénom";s:4:"code";s:9:"__TEST2__";}i:2;a:5:{s:8:"cssClass";s:8:"checkbox";s:8:"required";s:9:"undefined";s:5:"title";s:19:"Choisir des options";s:4:"code";s:9:"__TEST3__";s:6:"values";a:4:{i:0;a:2:{s:5:"value";s:3:"PHP";s:8:"baseline";s:9:"undefined";}i:1;a:2:{s:5:"value";s:6:"jQuery";s:8:"baseline";s:9:"undefined";}i:2;a:2:{s:5:"value";s:3:"XML";s:8:"baseline";s:9:"undefined";}i:3;a:2:{s:5:"value";s:5:"Aspen";s:8:"baseline";s:9:"undefined";}}}i:3;a:5:{s:8:"cssClass";s:5:"radio";s:8:"required";s:9:"undefined";s:5:"title";s:19:"Vous êtes humain ?";s:4:"code";s:9:"__TEST4__";s:6:"values";a:2:{i:0;a:2:{s:5:"value";s:3:"Yes";s:8:"baseline";s:7:"checked";}i:1;a:2:{s:5:"value";s:2:"No";s:8:"baseline";s:9:"undefined";}}}i:4;a:6:{s:8:"cssClass";s:6:"select";s:8:"required";s:9:"undefined";s:8:"multiple";s:9:"undefined";s:5:"title";s:19:"Choisir une couleur";s:4:"code";s:9:"__TEST5__";s:6:"values";a:4:{i:0;a:2:{s:5:"value";s:0:"";s:8:"baseline";s:7:"checked";}i:1;a:2:{s:5:"value";s:4:"vert";s:8:"baseline";s:9:"undefined";}i:2;a:2:{s:5:"value";s:5:"rouge";s:8:"baseline";s:9:"undefined";}i:3;a:2:{s:5:"value";s:4:"bleu";s:8:"baseline";s:9:"undefined";}}}}',
				'form_data' => 'a:8:{s:9:"__TEST1__";s:6:"Régis";s:9:"__TEST2__";s:7:"Houssin";s:11:"__TEST3__-0";s:3:"PHP";s:11:"__TEST3__-1";b:0;s:11:"__TEST3__-2";s:3:"XML";s:11:"__TEST3__-3";b:0;s:9:"__TEST4__";s:2:"No";s:9:"__TEST5__";s:5:"rouge";}');
?>