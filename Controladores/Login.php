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
        $data['page_tag'] = "Login - Tienda Virtual";
        $data['page_title'] = "Login";
        $data['page_name'] = "login";
        $data['page_functions_js']="functions_login.js";
        $this->views->getView($this,"login",$data);
    }    

    public function loginUser(){
        //dep($_POST);
        if($_POST){
            if(empty($_POST['txtEmail']) || empty($_POST['txtPassword'])){
                $arrResponse = array ('status' => false, 'msg' => 'Error de datos');
            }else{
                $strUsuario = strtolower(strClean($_POST['txtEmail']));
                $strPassword = strClean($_POST['txtPassword']);
                $requestUser = $this->model->loginUser($strUsuario, $strPassword);
                if(empty($requestUser)){
                    $arrResponse = array('status' => false, 'msg' => 'El usuario o la contraseña es incorrecto. ');
                }else{
                    $arrData = $requestUser;
                    if($arrData['status'] == 1){
                        $_SESSION['idUser'] = $arrData['idpersona'];
                        $_SESSION['login'] = true;

                        $arrData = $this->model->sessionLogin($_SESSION['idUser']);
                        $_SESSION['userData'] = $arrData;
                        
                        $arrResponse = array('status' => true, 'msg' => 'ok');
                    }else{
                        $arrResponse = array('status' => false, 'msg' => 'Usuario inactivo.');
                    }
                }
            }
            echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
        }

        die();
    }
}
