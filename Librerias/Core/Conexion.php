<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    class Conexion{        
        private $connect;

        public function __construct(){
            $connectionString= "mysql:host=".DB_HOST.";dbname=".DB_NAME.";.DB_CHARSET.";
            try{
                $this->connect = new PDO($connectionString,DB_USER,DB_PASSWORD);
                //PDO::ATTR_ERRMODE_EXCEPTION, Falla con esto
                $this->connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
                // echo "Si la conexión es exitosa";
            } catch (Exception $ex) {
                $this->connect = "Error de Conexión";
                echo "Error: ".$ex->getMessage();
            }
        }
        
        public function connect(){
            return $this->connect;
        }
    }
    
    