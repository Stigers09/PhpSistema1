<?php
    require_once "./Configuracion/config.php";
    require_once './Helpers/Helpers.php';
    
    /*
     * Esta parte es para controlar las carpetas
     */
    $url = !empty($_GET['url']) ?$_GET['url'] :'home/home';
    $arrUrl = explode("/",$url);
    $controller = $arrUrl[0];
    $method = $arrUrl[0];
    $params = "";

    if (!empty($arrUrl[1])) {
        if ($arrUrl[1] != "") {
            $method = $arrUrl[1];
        }
    }
    if (!empty($arrUrl[2])) {
        if ($arrUrl[2] != "") {
            for ($i = 2; $i < count($arrUrl); $i++) {
                $params .= $arrUrl[$i].',';
                # code...
            }
            $params = trim($params,',');
        }
    }
    require_once './Librerias/Core/Autoload.php';    
    require_once "./Librerias/Core/Load.php";

    /*
    echo "<br>";
    echo "Controlador: ".$controller;
    echo "<br>";
    echo " Método: ".$method;
    echo "<br>";
    echo "Parametros: ". $params;
    */