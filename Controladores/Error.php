<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    class Errors extends Controllers{
        public function __construct()
        {
            parent::__construct(    );
        }

        public function notFound()
        {
            $this->views->getView($this, "error");
        }        
    }
    $notFound = new Errors();
    $notFound->notFound();
