<!DOCTYPE html>
<html lang="es">  
    <head>        
        <meta charset="UTF-8" />
        <meta http-equiv="Content-Type" content="text/html" charset=UTF-8">
        <meta name="description" content="E-commerce Ropa Bebe" />
        <meta name="keywords" content="Ropa Bebe Niños Niñas" />
        <title>Nubecitas de colores</title>
        <link rel="stylesheet" type="text/css" href="css/parteEdwin/normalize.css">
        <link href="<?= mediaEdwincss() ?>tienda_NB_css.css" rel="stylesheet" type="text/css"/>
        <title><?php echo $data['page_tag'];?></title>	
        <link rel="shortcut icon" href="<?= mediaEdwinimages(); ?>/Logo.ico">        
        
        <link href="css/parteEdwin/_10header.css" rel="stylesheet" type="text/css"/>        
        <link href="css/parteEdwin/_20menu.css" rel="stylesheet" type="text/css"/>
        <link href="css/parteEdwin/_30nav.css" rel="stylesheet" type="text/css"/>
        <link href="css/parteEdwin/_50section.css" rel="stylesheet" type="text/css"/>
        <link href="css/parteEdwin/_51tarjetas.css" rel="stylesheet" type="text/css"/>
        <link href="css/parteEdwin/_70footer.css" rel="stylesheet" type="text/css"/>                
        
        <link rel="stylesheet" type="text/css" href="<?= mediaEdwincss() ?>/tienda_NB_css.css">		
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">	
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    </head>

    <body>    
        <header>		
            <a href="tienda">
                <img src="<?= mediaEdwinimages() ?>/Logo1.png" alt="Nubecitas de Colores">                
            </a>	            
            <div class="header__div">			
                <h1>NUBECITAS DE COLORES</h1>												
                <div>				
                    <ul class="header__div-ul">
                        <li><a class="active" href="#">Home</a>
                        <li><a href="categorias">Categorias<ion-icon name="caret-down-outline"></ion-icon></a>
                            <ul class="subMenu">							
                                <li><a href="">Ropa</a></li>
                                <li><a href="">Juguetes</a></li>
                                <li><a href="">Zapatos</a></li>							
                            </ul>
                        </li>
                        <li><a href="loMasVisto">Lo mas visto</a></li>
                        <li><a href="ofertas">Ofertas</a></li>
                        <li><a href="seLesTrae">Se le trae</a></li>
                        <li><a href="">USUARIO<ion-icon name="caret-down-outline"></ion-icon></a>
                            <ul class="subMenu">
                                <li><a href="<?php base_url(); ?>miConfiguracion">Mis Datos</a></li>
                                <li><a href="<?php base_url(); ?>misCompras">Mis compras</a></li>
                                <li><a href="<?php base_url(); ?>misFavoritos">Mis favoritos</a></li>
                                <li><a href="<?php base_url(); ?>pQRS">PQRS</a></li>
                                <li><a href="<?php base_url(); ?>home">Cerrar Sesión</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>				
            </div>
            <p>${usuario.cargo.nombreCargo} EN SECCION: <br>${usuario.nombreUsuario}</p>

        </header>

        <nav>
            <div>
                <ul class="nav__div-ul">
                    <li><a href="">Categorias</li>
                    <li><a href="loMasVisto">Lo mas visto</li>
                    <li><a href="ofertas">Ofertas</li>
                    <li><a href="seLesTrae">Se le trae</li>
                    <li><a href="miConfiguracion">Mi configuración</li>
                </ul>
            </div>			
        </nav>

        <section>						
            <div class="images">
                <div class="cont">
                    <a class="section__a1" href=""><img src="<?= mediaEdwinimages() ?>/ropaBebe/camiseta.jpg"></a>	
                    <ul>	
                        <li>nombreProducto</li>
                        <li>$ 35,000</li>
                    </ul>							
                </div>
                <div class="cont">
                    <a class="section__a1" href=""><img src="<?= mediaEdwinimages() ?>/ropaBebe/vestido.jpg"></a>	                                        
                    <ul>	
                        <li>nombreProducto</li>
                        <li>$ 35,000</li>
                    </ul>							
                </div>
                <div class="cont">
                    <a class="section__a1" href=""><img src="<?= mediaEdwinimages() ?>/ropaBebe/Pijama.jpg"></a>	
                    <ul>	
                        <li>nombreProducto</li>
                        <li>$ 35,000</li>
                    </ul>							
                </div>
                <div class="cont">
                    <a class="section__a1" href=""><img src="<?= mediaEdwinimages() ?>/ropaBebe/camiseta.jpg"></a>	
                    <ul>	
                        <li>nombreProducto</li>
                        <li>$ 35,000</li>
                    </ul>							
                </div>
                <div class="cont">
                    <a class="section__a1" href=""><img src="<?= mediaEdwinimages() ?>/ropaBebe/vestido.jpg"></a>	
                    <ul>	
                        <li>nombreProducto</li>
                        <li>$ 35,000</li>
                    </ul>							
                </div>
                <div class="cont">
                    <a class="section__a1" href=""><img src="<?= mediaEdwinimages() ?>/ropaBebe/Pijama.jpg"></a>	
                    <ul>	
                        <li>nombreProducto</li>
                        <li>$ 35,000</li>
                    </ul>							
                </div>

                <div class="cont">
                    <a class="section__a1" href=""><img src="<?= mediaEdwinimages() ?>/ropaBebe/camiseta.jpg"></a>	
                    <ul>	
                        <li>nombreProducto</li>
                        <li>$ 35,000</li>
                    </ul>							
                </div>
                <div class="cont">
                    <a class="section__a1" href=""><img src="<?= mediaEdwinimages() ?>/ropaBebe/vestido.jpg"></a>	
                    <ul>	
                        <li>nombreProducto</li>
                        <li>$ 35,000</li>
                    </ul>							
                </div>
                <div class="cont">
                    <a class="section__a1" href=""><img src="<?= mediaEdwinimages() ?>/ropaBebe/Pijama.jpg"></a>	
                    <ul>	
                        <li>nombreProducto</li>
                        <li>$ 35,000</li>
                    </ul>							
                </div>
                <div class="cont">
                    <a class="section__a1" href=""><img src="<?= mediaEdwinimages() ?>/ropaBebe/camiseta.jpg"></a>	
                    <ul>	
                        <li>nombreProducto</li>
                        <li>$ 35,000</li>
                    </ul>							
                </div>
                <div class="cont">
                    <a class="section__a1" href=""><img src="<?= mediaEdwinimages() ?>/ropaBebe/vestido.jpg"></a>	
                    <ul>	
                        <li>nombreProducto</li>
                        <li>$ 35,000</li>
                    </ul>							
                </div>
                <div class="cont">
                    <a class="section__a1" href=""><img src="<?= mediaEdwinimages() ?>/ropaBebe/Pijama.jpg"></a>	
                    <ul>	
                        <li>nombreProducto</li>
                        <li>$ 35,000</li>
                    </ul>							
                </div>
            </div>			
        </section>
        <footer>Derechos Reservados</footer>
    </body>
</html>
