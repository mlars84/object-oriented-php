<?php

class Task {

    public $title;
    public $description;
    public $completed = false;

    public function __construct($title, $description)
    {
        $this->title = $title;
        $this->description = $description;
    }

    public function complete($completed)
    {   
        $this->completed = $completed;    
    }
}

$task = new Task('Learn OOP', 'Watching the laracasts videos to learn OOP in PHP.');

var_dump($task);
