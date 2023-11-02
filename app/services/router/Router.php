<?php

namespace RouterService ;

use Core\Request;
use Exception;

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
      $current_uri = $this->checkCurrentUri();


      $this->request->is_in($current_uri['method']) ;

      return true ;
    }
    
    protected function checkCurrentUri()
    {
      $current_uri =  $this->request->getCurrentUri() ; 
      $checkUri = key_exists($current_uri , $this->routes) ;
      if(!$checkUri){
        throw new Exception("Page not found 404 !") ;
      }
      return $this->routes[$current_uri];
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