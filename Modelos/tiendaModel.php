<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    class tiendaModel extends Mysql
    {
        public function __construct()
        {
            parent::__construct(); // Ejecuta constructor padre (mysql)
        }
        

        public function selectProductos2(){
            $sql = "SELECT * FROM bdnubecitas.productos";
            $request = $this->select_all2($sql);
            return $request;
        }
        
    }
?>
