<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">                
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">        
        <title>Sistema | Iniciar Session</title>
        <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/parteEdwin/normalize.css">
        <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/parteEdwin/form_NB_css.css">        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >	
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">	
        <link type="text/javascript" href="<?= media(); ?>/js/index_NB_js.js">	
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    <body>
        <a href="<?php base_url(); ?>home"><div class="gray"></div></a>
        <form class="formulario" action="tienda" method="POST">
            <h1>Bienvenid@</h1>
            <div class="contenedor">
                <div class="input-contenedor">
                    <i class="fas fa-envelope icon"></i>
                    <input type="text" name="txtUsu" id="txtUsu" value="" placeholder="Usuario">
                </div>
                <div class="input-contenedor">
                    <i class="fas fa-key icon"></i>
                    <input type="text" name="txtPass" id="txtPass" value="" placeholder="Contraseña">
                </div>
                <label>
                    <input type="checkbox"> Recuérdame
                </label>
                <input type="submit" name="verificar" value="Verificar" class="button">
                <div>
                    <p>- Verificación Credenciales -</p>
                    <a href="#"> Mensaje: ${msje}</a>
                </div>
                <p>¿Si aún no tienes una cuenta? <a class="link" href="form1.php"> Registrate</a></p>
            </div>
        </form>



        <header>
            <ul class="header__ul">
                <li><a href="<?php base_url();?>login.php">Iniciar</a></li>
                <li><a href="form1.php">Registrarse</a></li>			
            </ul>
            <div class="imagen">
                <img src="<?= media(); ?>images/Logo.PNG"  alt="Logo">	
            </div>
            <div class="titulo">			
                <h1 class="titulo__h1">NUBECITAS DE COLORES</h1>
            </div>
            <script src="<?= media(); ?>js/index_NB_js.js"></script>
        </header>

        <section>
            <h1 class="section__h1">TODO PARA TU BEBE</h1>
            <br>
            <div class="section__div">
                <a class="section__a1" href="" id="link1"><img src="" id="imagen1"></a>
                <a class="section__a2" href="" id="link2"><img src="" id="imagen2"></a>
                <a class="section__a3" href="" id="link3"><img src="" id="imagen3"></a>

            </div>
        </section>

        <footer class="footer">
            <h3>Derechos Reservados</h3>
        </footer>
        <script src="plugins/iCheck/icheck.min.js"></script>
        <script src="<?= $data['page_functions_js']; ?>"></script>        
        
    </body>

</html>


