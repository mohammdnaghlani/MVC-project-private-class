<?php


 require_once '../bootstrap/init.php';

/**
 * $router   RouterService\Router
 */
try{
    echo '<pre>' ;
    var_dump($router->start()) ;
    echo '</pre>' ;
}catch(Exception $error)
{
    echo $error->getMessage();
}
