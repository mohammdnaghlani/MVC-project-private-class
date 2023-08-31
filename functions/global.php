<?php

function createPath(string $path , string $extention = 'php')
{
    $path = str_replace('.' , DIRECTORY_SEPARATOR , $path ) ;
    return basePath() . DIRECTORY_SEPARATOR . $path . '.' . $extention ;
}

function basePath()
{
    return dirname(__DIR__) ;
}