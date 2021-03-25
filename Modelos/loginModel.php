<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    class loginModel extends Mysql
    {
        public function __construct()
        {
            parent::__construct(); // Ejecuta constructor padre (mysql)
        }
        

        public function setUser(string $nombres, int $estado){
            $query_insert = "INSERT INTO `bdnubecitas`.`usuarios` (`nombres`, `estado`) VALUES (?,?)";
            $arrData = array($nombres, $estado);
            $request_insert = $this->insert($query_insert, $arrData);
            return $request_insert;
        }
        
        public function getUser(int $id){
            $sql = "SELECT * FROM `bdnubecitas`.`usuarios` WHERE `id` = $id";            
            $request = $this->select($sql);
            return $request;
        }
        
        public function getUsers(){
            $sql = "SELECT * FROM `bdnubecitas`.`usuarios`";            
            $request = $this->select_all($sql);
            return $request;
        }
        
        public function updateUser(int $id, string $nombres, int $estado){
            $sql = "UPDATE `bdnubecitas`.`usuarios` SET `nombres`=?, `estado`=? WHERE `id`=$id";
            $arrData = array($nombres, $estado);
            $request = $this->update($sql, $arrData);
            return $request;
        }
        public function delUser(int $id){
            $sql = "DELETE FROM `bdnubecitas`.`usuarios` WHERE `id`=$id";            
            $request = $this->delete($sql);
            return $request;
        }
        
    }
?>
