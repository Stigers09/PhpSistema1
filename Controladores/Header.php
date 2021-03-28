<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Header extends Controllers
{

    public function __construct()
    {
        parent::__construct();
    }

    public function header()
    {
        $data['page_id'] = 1;
        $data['page_tag'] = "Header";
        $data['page_title'] = "Header";
        $data['page_name'] = "header";
        $data['page_content'] = "Puede llevar algun comentario";
        $this->views->getView($this,"header",$data);
    }
}
