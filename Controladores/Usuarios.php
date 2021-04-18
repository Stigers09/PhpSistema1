<?php

    class Usuarios extends Controllers
    {

        public function __construct()
        {
            parent::__construct();
            
            session_start();
            if(empty($_SESSION['login']))
            {
                header('Location: '.base_url().'login');
            }
        }

        public function Usuarios()
        {
            $data['page_tag'] = "Usuarios";
            $data['page_title'] = "USUARIOS <small>Tienda Virtual</small>";
            $data['page_name'] = "usuarios";
            $this->views->getView($this,"usuarios",$data);
        }
    }
?>