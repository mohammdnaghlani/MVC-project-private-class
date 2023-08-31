<?php

namespace RouterService ;

use Core\Request;

class Router 
{
    protected Request $request ;

    protected array $routes ;





    public function __construct(Request $request)
    {
        $this->request = $request ;
    }
   
    public function start()
    {
        
    }

    public function setRoute(string $uri , string $method , $information)
    {       
        $this->routes[$uri] = [
            'method' => $method ,
            'info' => $information ,
        ];
        return $this;
    }
    public function get(string $uri , $information)
    {
      return $this->setRoute($uri , 'get' , $information)  ;
    }
    public function post(string $uri , $information)
    {
      return $this->setRoute($uri , 'post' , $information)  ;
    }
    public function delete(string $uri , $information)
    {
      return $this->setRoute($uri , 'delete' , $information)  ;
    }
    





    public function getRoutes()
    {
       return $this->routes ; 
    }
}