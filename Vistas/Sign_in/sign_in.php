<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">                
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">        
        <title><?php echo $data['page_tag']; ?></title>
        <link rel="shortcut icon" href="<?= mediaEdwinimages(); ?>/Logo.ico">
        <link rel="stylesheet" type="text/css" href="<?= mediaEdwincss(); ?>/normalize.css">
        <link rel="stylesheet" type="text/css" href="<?= mediaEdwincss(); ?>/form_NB_css.css">        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >	
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">	
        <link type="text/javascript" href="<?= mediaEdwinjs(); ?>/js/index_NB_js.js">	
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>

    <body>
        <a href="<?php base_url(); ?>home"><div class="gray"></div></a>

<!--
        STIVEN ACA PUEDE COLOCAR EL FORMULARIO
-->

        <form class="formulario" action="tienda" method="post" >
            <h1>Registro</h1>
            <div class="contenedor">

                <div class="input-contenedor">
                    <i class="fas fa-user icon"></i>
                    <input type="text" placeholder="Correo Electrónico">

                </div>

                <div class="input-contenedor" >
                    <i class="fas fa-envelope icon"></i>
                    <input type="text" id="nombre" type="text"  placeholder="Usuario" name="txtNombre" maxlength="10"
                           value="">

                </div>

                <div class="input-contenedor">
                    <i class="fas fa-key icon"></i>
                    <input id="nombre" type="password" placeholder="Ejem: $%Ale!**" name="txtClave" maxlength="10"
                           value="">
                </div>
                <p>Hola nuevo 
                    <select type="hidden" class="form-control"  name="cboCargo" autofocus=""  required="">
                        <option type="hidden" value="3">USUARIO</option>                                              
                    </select>
                    al registrarte, estas aceptando las Condiciones de uso y Política de privacidad.</p><br>

                <!-- Precio:
                    <input id="precio" name="precio" type="text" /> -->

                <input type="hidden" type="checkbox" name="chkEstado" checked="">

                <button type="submit" id="" name="btnRegistrar" value="Registrar" class="button"> Registrar</button>
                <br><br>
                <p>¿Ya tienes una cuenta?<a class="link" href="<?php base_url(); ?>login">Iniciar Sesion</a></p>
            </div>
        </form>


<!--
        FONDO DE ENTRADA PRINCIPAL NO BORRAR
-->


        <header>
            <ul class="header__ul">
                <li><a href="identificar.jsp">Iniciar</a></li>
                <li><a href="tienda.jsp">Registrarse</a></li>			
            </ul>
            <div class="imagen">
                <img src="<?= mediaEdwinimages() ?>/Logo.png"  alt="Logo">	
            </div>
            <div class="titulo">			
                <h1 class="titulo__h1">NUBECITAS DE COLORES</h1>
            </div>
            <script src="js/index_NB_js.js"></script>
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

    </body>
</html>