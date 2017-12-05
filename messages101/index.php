<?php 
//Business depends on the staff in order to run
$matt = new Person('Matt Larson');
$staff = new Staff([$matt]);
$usi = new Business($staff);

$usi->hire(new Person('Jane Doe'));
$usi->hire(new Person('Sarah White'));

var_dump($usi->getStaffMembers());