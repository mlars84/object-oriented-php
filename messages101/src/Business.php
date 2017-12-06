<?php

namespace USI;

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