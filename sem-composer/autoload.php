<?php



function __autoload($class_name)
{
    if(file_exists('Dados/' . $class_name. '.php'))
    {
        require_once 'Dados/' . $class_name . '.php';

    }
}