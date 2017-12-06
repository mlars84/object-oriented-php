<?php

//incorrect use of static
class Person
{
    //age is unique to one person and not shared
    public static $age = 1;

    public function haveBirthday()
    {
        static::$age++;
    }
}

//ok use of static, as it's just accepting a simple input and outputting something
class Math
{
    public static function add(...$nums)
    {
        return array_sum($nums);
    }
}

class BankAccount
{   
    //if you under-no-circumstance want to change a value, use a constant
    const TAX = .09;
}

echo Math::add(1, 2, 3);