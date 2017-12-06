<?php 
require 'vendor/autoload.php';

//Business depends on the staff in order to run
$matt = new USI\Person('Matt Larson');
$staff = new USI\Staff([$matt]);
$usi = new USI\Business($staff);

$usi->hire(new USI\Person('Jane Doe'));
$usi->hire(new USI\Person('Sarah White'));

var_dump($usi->getStaffMembers());