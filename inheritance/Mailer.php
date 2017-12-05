<?php

//if you won't actually ever have a single Mailer object, but instead just want 
//to use the Mailer class to extract common behavior, use `abstract class Mailer`
// abstract class Mailer
class Mailer
{
    //send method for both child classes
    public function send($to, $from, $body)
    {
        //single point of entry for actually firing off email
    }
}

class UserMailer extends Mailer
{
    
}

class AdminMailer extends Mailer
{

}