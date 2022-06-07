<?php 
define('URL','http://localhost/bgb');
define('ROOTPATH', dirname(__FILE__));

function myAutoloader($class_name){
    $models = './Models/'.$class_name.'.php';
    $controllers = './Controllers/'.$class_name.'.php';

    if(file_exists($models)){
        require_once($models);
    }else if(file_exists($controllers)){
        require_once($controllers);
    }  
}

spl_autoload_register('myAutoloader');