<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    // Retorna la url del proyecto
    function base_url(){
        return BASE_URL;
    }
    function media(){
        return BASE_URL."Recursos/";
    }
    function mediaJonathancss(){
        return BASE_URL."Recursos/css/parteJonathan/";
    }
    function mediaJonathanjs(){
        return BASE_URL."Recursos/js/parteJonathan/";
    }
    function mediaJonathanimages(){
        return BASE_URL."Recursos/images/parteJonathan/";
    }
    function mediaEdwincss(){
        return BASE_URL."Recursos/css/parteEdwin/";
    }
    function mediaEdwinjs(){
        return BASE_URL."Recursos/js/parteEdwin/";
    }
    function mediaEdwinimages(){
        return BASE_URL."Recursos/images/parteEdwin/";
    }
    function mediaStivencss(){
        return BASE_URL."Recursos/css/parteStiven/";
    }
    function mediaStivenjs(){
        return BASE_URL."Recursos/js/parteStiven/";
    }
    function mediaStivenimages(){
        return BASE_URL."Recursos/images/parteStiven/";
    }
    function mediaOscarcss(){
        return BASE_URL."Recursos/css/parteOscar/";
    }
    function mediaOscarjs(){
        return BASE_URL."Recursos/js/parteOscar/";
    }
    function mediaOscarimages(){
        return BASE_URL."Recursos/images/parteOscar/";
    }
    function mediaManuelcss(){
        return BASE_URL."Recursos/css/parteManuel/";
    }
    function mediaManueljs(){
        return BASE_URL."Recursos/js/parteManuel/";
    }
    function mediaManuelimages(){
        return BASE_URL."Recursos/images/parteManuel/";
    }

    // Formatea información
    function dep($data){
        $format  = print_r("<pre>");
        $format .= print_r($data);
        $format .= print_r("</pre>");
        return $format;
    }
    
    function strClean($strCadena){
        $string = preg_replace(['/\s+/','/^\s|\s$/'],[' ',''],$strCadena);
        $string = trim($string); // Elimina espacion en blanco al inicio y al final
        $string = stripslashes($string); // Elimina \
        return $string;
    }
    
    function passGenerator($length=10){
        $pass = "";
        $longitudPass = $length;
        $cadena = "ABCDEFGHIJKLMNÑOPQRSTUVWXYZabcdefghijklmnñopqrstuvwxyz1234567890";
        $longitudCadena = strlen($cadena);
        
        for ($i = 1; $i <= longitudPass ; $i++) {
            $pos = rand(0,$longitudCadena-1);
            $pass .= substr($cadena,$pos,1);            
        }
        return $pass;
    }
    
    function token(){
        $r1 = bin2hex(random_bytes(10));
        $r2 = bin2hex(random_bytes(10));
        $r3 = bin2hex(random_bytes(10));
        $r4 = bin2hex(random_bytes(10));
        $token= $r1.'-'.$r2.'-'.$r3.'-'.$r4;
        return $token;
    }
    
    function formatMoney($cantidad){
        $cantidad = number_format($cantidad,2,SPD,SPM);
        return $cantidad;
    }