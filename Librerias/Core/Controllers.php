<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Controllers
{
    public function __construct()
    {        
        $this->views = new Views();
        $this->loadModel();
    }

    public function loadModel()
    {
        $model = get_class($this)."Model";
        $routClass = "./Modelos/".$model.".php";
        if (file_exists($routClass)) {            
            require_once ($routClass);
            $this->model = new $model();
        }
        
    }
}