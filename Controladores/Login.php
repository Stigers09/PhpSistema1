<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Login extends Controllers
{

    public function __construct()
    {
        parent::__construct();
    }

    public function login()
    {
        $data['page_id'] = 2;
        $data['page_tag'] = "Login - Tienda Virtual";
        $data['page_title'] = "Login";
        $data['page_name'] = "login";
        $data['page_content'] = "Puede llevar algun comentario";
        $data['page_functions_js']="functions_login.js";
        $this->views->getView($this,"login",$data);
    }
    public function insertar(){
        $data = $this->model->setUser("Carlos",1);
        print_r($data);
    }
    public function verUsuario($id){
        $data = $this->model->getUser($id);
        print_r($data);
    }
    public function verUsuarios(){
        $data = $this->model->getUsers();
        print_r($data);
    }
    public function actualizar(){
        $data = $this->model->updateUser(1,"Carlos",1);
        print_r($data);
    }
    public function eliminarUsuario($id){
        $data = $this->model->delUser($id);
        print_r($data);
    }
}
