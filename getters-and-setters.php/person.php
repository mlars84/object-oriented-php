<?php

class Person {

    public $name;
    
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        if ($age < 18) {
            throw new Exception('Must be over 18.');
        }
        $this->age = $age;
    }
}

$john = new Person('John Doe');

$john->setAge(18);

var_dump();