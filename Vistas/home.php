<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<meta name="description" content="E-commerce de Ropa para Bebe" />
	<meta name="keywords" content="Ropa Bebe Niños Niñas" />
	<title><?php echo $data['page_tag'];?></title>	
        <link rel="shortcut icon" href="<?= media(); ?>/images/Logo.ico">
        <link href="<?= media(); ?>css/parteEdwin/index_NB_css.css" rel="stylesheet" type="text/css"/>	        
        <link href="<?= media(); ?>js/index_NB_js.js" type="text/javascript">        
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" type="text/css">
        
</head>
<body>
	<header>
		<ul class="header__ul">
                    <li><a href="<?php base_url(); ?>login">Iniciar</a></li>
			<li><a href="sign_in">Registrarse</a></li>
		</ul>
		<div class="imagen">
                    <img src="<?= media(); ?>/images/Logo1.png"  alt="Logo">
		</div>
		<div class="titulo">
			<h1 class="titulo__h1">NUBECITAS DE...<?= $data['page_title'];?></h1>
		</div>
		<script src="./Recursos/js/index_NB_js.js"></script>
	</header>

	<section id="<?php $data['page_id']; ?>">
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

