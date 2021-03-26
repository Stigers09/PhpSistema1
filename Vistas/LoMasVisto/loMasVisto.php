<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<meta name="description" content="E-commerce Ropa Bebe" />
	<meta name="keywords" content="Ropa Bebe Niños Niñas" />
	<title>Nubecitas de colores</title>
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
        <link href="<?= mediaEdwincss() ?>/loMasVisto_NB_css.css" rel="stylesheet" type="text/css"/>
        <link href="<?= mediaEdwincss() ?>/_10header.css" rel="stylesheet" type="text/css"/>        
        <link href="<?= mediaEdwincss() ?>/_20menu.css" rel="stylesheet" type="text/css"/>
        <link href="<?= mediaEdwincss() ?>/_30nav.css" rel="stylesheet" type="text/css"/>
        <link href="<?= mediaEdwincss() ?>/_50section.css" rel="stylesheet" type="text/css"/>
        <link href="<?= mediaEdwincss() ?>/_51tarjetas.css" rel="stylesheet" type="text/css"/>
        <link href="<?= mediaEdwincss() ?>/_70footer.css" rel="stylesheet" type="text/css"/>        
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">	
	<link rel="script" href="<?= mediaEdwinjs() ?>/index_NB_js.js">	

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
					<li><a href="">Categorias<ion-icon name="caret-down-outline"></ion-icon></a>
						<ul class="subMenu">
							<li><a href="">Ropa</a></li>
							<li><a href="">Juguetes</a></li>
							<li><a href="">Zapatos</a></li>							
						</ul>
					</li>
					<li><a href="loMasVisto">Lo mas visto</a></li>
					<li><a href="ofertas">Ofertas</a></li>
					<li><a href="seLesTrae">Se le trae</a></li>
					<li><a href="">Mi configuración<ion-icon name="caret-down-outline"></ion-icon></a>
						<ul class="subMenu">
							<li><a href="misDatos">Mis Datos</a></li>
							<li><a href="">Mis compras</a></li>
							<li><a href="">Mis favoritos</a></li>
							<li><a href="">PQRS</a></li>
							<li><a href="home">Cerrar Sesión</a></li>
						</ul>
					</li>
				</ul>
			</div>	
		</div>				

		<script src="<?= mediaEdwinjs() ?>/index_NB_js.js"></script>
	</header>

	<nav>
		<div>
			<ul class="nav__div-ul">
				<li><a href="">Categorias</li>
				<li><a href="">Lo mas visto</li>
				<li><a href="">Ofertas</li>
				<li><a href="">Se le trae</li>
				<li><a href="">Mi configuración</li>
			</ul>
		</div>			
	</nav>

	<section>
		<div class="h2"><h2>Lo que más has visto</h2></div>
			<div class="images">
				<div class="cont">
                                    <a class="section__a1" href=""><img src="<?= mediaEdwinimages() ?>/camiseta.jpg"></a>	
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
					<!-- <div class="images">
				<img src="images/Ropa de Bebe/camiseta.jpg" width="30%" height="30%" alt="">		
				<img src="images/Ropa de Bebe/Pijama.jpg" width="20%" height="20%" alt="">		
				<img src="images/Ropa de Bebe/vestido.jpg" width="20%" height="20%" alt="">
			</div> -->	
				<div class="cont">
				<a class="section__a1" href="" id="link1"><img src="" id="imagen1"></a>	
						<ul>	
							<li>nombreProducto</li>
							<li>$ 35,000</li>
						</ul>							
				</div>
				<div class="cont">
						<a class="section__a2" href="" id="link2"><img src="" id="imagen2"></a>	
						<ul>	
							<li>nombreProducto</li>							
							<li>$ 35,000</li>
						</ul>							
				</div>
				<div class="cont">
				<a class="section__a3" href="" id="link3"><img src="" id="imagen3"></a>	
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
	<script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>

</body>
</html>