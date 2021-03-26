<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class LomasVisto extends Controllers
{

    public function __construct()
    {
        parent::__construct();
    }

    public function loMasvisto()
    {
        $data['page_id'] = 1;
        $data['page_tag'] = "Home";
        $data['page_title'] = "Página Principal";
        $data['page_name'] = "home";
        $data['page_content'] = "Puede llevar algun comentario";
        $this->views->getView($this,"loMasVisto",$data);
    }
}
