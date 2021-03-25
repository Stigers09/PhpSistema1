<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    $controller = ucwords($controller);    
    $controllerFile = "./Controladores/".$controller.".php";    
    if (file_exists($controllerFile)){    
        require_once($controllerFile);
        $controller = new $controller();
        if(method_exists($controller, $method)){
            $controller->{$method}($params);
        } else {
            require_once './Controladores/Error.php';
        }
    } else {
        require_once './Controladores/Error.php';
    }