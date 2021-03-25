<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Sign_in extends Controllers
{

    public function __construct()
    {
        parent::__construct();
    }

    public function sign_in()
    {
        $data['page_id'] = 3;
        $data['page_tag'] = "Sign in - Tienda Virtual";
        $data['page_title'] = "Sign in";
        $data['page_name'] = "Sign in";
        $data['page_content'] = "Puede llevar algun comentario";
        $data['page_functions_js']="functions_sign_in.js";
        $this->views->getView($this,"sign_in",$data);
    }
}
