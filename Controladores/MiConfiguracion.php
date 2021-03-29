<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class MiConfiguracion extends Controllers
{

    public function __construct()
    {
        parent::__construct();
    }

    public function miConfiguracion()
    {
        $data['page_id'] = 10;
        $data['page_tag'] = "MiConfiguracion";
        $data['page_title'] = "Página de Usuario";
        $data['page_name'] = "miConfiguracion";
        $data['page_content'] = "Puede llevar algun comentario";
        $this->views->getView($this,"miConfiguracion",$data);
    }
    public function insertar(){
        $data = $this->model->setUser("Carlos",1);
        print_r($data);
    }
    public function verUsuario($id){
        $data = $this->model->getUser($id);
        echo json_decode($data, JSON_UNESCAPED_UNICODE);
        die();
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
