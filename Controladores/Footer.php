<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Footer extends Controllers
{

    public function __construct()
    {
        parent::__construct();
    }

    public function footer()
    {
        $data['page_id'] = 1;
        $data['page_tag'] = "Footer";
        $data['page_title'] = "Página Principal";
        $data['page_name'] = "footer";
        $data['page_content'] = "Puede llevar algun comentario";
        $this->views->getView($this,"footer",$data);
    }
}
