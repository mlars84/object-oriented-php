<?php 

class Person
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;    
    }
}

class Business
{
    protected $staff;

    public function __construct(Staff $staff)
    {
        $this->staff = $staff;
    }

    //Type hinting the object name to specify expected val should be of type Person
    public function hire(Person $person)
    {
        //add $person to the staff collection
        $this->staff->add($person);
    }

    public function getStaffMembers()
    {
        return $this->staff->getMembers();
    }
}

class Staff
{
    protected $members = [];

    public function __construct($members = []) 
    {
        $this->members = $members;
    }

    public function add(Person $person)
    {
        $this->members[] = $person;
    }

    public function getMembers()
    {
        return $this->members;
    }
}

//Business depends on the staff in order to run

$matt = new Person('Matt Larson');
$staff = new Staff([$matt]);
$usi = new Business($staff);

$usi->hire(new Person('Jane Doe'));
$usi->hire(new Person('Sarah White'));

var_dump($usi->getStaffMembers());