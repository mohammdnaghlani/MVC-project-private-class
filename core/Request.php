<?php

namespace Core ;

class Request 
{
    public string $current_uri ;

    public function __construct()
    {
       $this->current_uri = $this->getCurrentUri() ; 
    }

    public function getCurrentUri() : string
    {
        return strtolower($_SERVER['REQUEST_URI']); 
    }

}