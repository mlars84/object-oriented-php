//Interfaces VS Abstract Classes
<?php

interface Provider
{
    public function authorize();
}

//could setup login with any auth provider
function login(Provider $provider)
{
    $provider->authorize();
}


//abstract classes
abstract class AbstractProvider
{
    //yes we're building a class, however no one is allowed to instantiate it
    //create subclass and leverage inheritance
    abstract protected function getAuthorizationUrl();
    //require and mandate that the subclass creates and implements ^ method
}

class FacebookProvider extends AbstractProvider
{
    public function getAuthorizationUrl()
    {
        //has to exist
        return 'fb-url';
    }
}

/* *************************** */
//Interface and Abs class playing together:
interface Provider
{
    public function getAuthorizationUrl();
}

abstract class AbstractProvider
{
    protected function related()
    {
        //each subclass can now reference this logic with repeating over and over
    }
}

class TwitterProvider implements Provider
{
    protected function getAuthorizationUrl()
    {
        return 'twitter-url';
    }
}

class GithubProvider implements Provider
{
    protected function getAuthorizationUrl()
    {
        return 'github-url';
    }
}