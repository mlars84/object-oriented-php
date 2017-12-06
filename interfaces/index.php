<?php

interface Jsonable
{
    public function toJson();
}

class User implements Jsonable
{

}

class Collection implements Jsonable
{

}

/* ************************************ */

interface Logger
{
    public function execute($message);
}

class LogToFile implements Logger
{
    public function execute($message)
    {
        var_dump('Log the message to a file: ' . $message);
    }
}

class LogToDatabase implements Logger
{
    public function execute($message)
    {
        var_dump('Log the message to a database: ' . $message);
    }
}

//Why we need an interface . . .
class UsersController
{
    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function show()
    {
        $user = 'JohnDoe';

        $this->logger->execute($user);
    }
}

$controller = new UsersController(new LogToDatabase);
$controller->show();

/* ************************************ */

interface Animal
{
    //any concrete implementation must off this method:
    public function communicate();
}

class Dog implements Animal 
{
    public function communicate()
    {
        return 'bark!';
    }
}

class Cat implements Animal
{
    public function communicate()
    {
        return 'meow';
    }
}

/* ************************************ */

interface Filterable
{
    public function filter();
}

class Favorited implements Filterable
{
    public function filter()
    {
        //logic for specific filtering needed
    }
}

class Unwatched implements Filterable
{
    public function filter()
    {
        //logic for specific filtering needed
    }
}

class Difficulty implements Filterable
{
    public function filter()
    {
        //logic for specific filtering needed
    }
}