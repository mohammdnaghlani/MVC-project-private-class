<?php

namespace Core ;
use Exception;
class Request 
{
    public string $current_uri ;
    public string $request_method ;

    public function __construct()
    {
       $this->current_uri = $this->getCurrentUri() ; 
       $this->request_method = $this->getRequestMethod();
    }

    public function getCurrentUri() : string
    {
        return strtolower($_SERVER['REQUEST_URI']); 
    }

    public function getRequestMethod()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }
    public function is_in(string $method) : bool
    {
        if($this->request_method !==$method){
            throw new Exception("Access Denide 403 !") ;
        }
        return true ;
    }

}