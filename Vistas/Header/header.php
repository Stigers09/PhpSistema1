<!DOCTYPE html>

<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?= mediaEdwincss(); ?>/_10headerFavoritos.css" rel="stylesheet" type="text/css"/>
        <link href="<?= mediaEdwincss(); ?>/_20menu.css" rel="stylesheet" type="text/css"/>
    </head>

    <header>
        <a href="tienda.jsp">
            <img src="<?= mediaEdwinimages(); ?>/Logo1.png" alt="Nubecitas de Colores">
        </a>
        <div class="header__div">
            <h1>NUBECITAS DE COLORES</h1>
            <div>
                <ul class="header__div-ul">
                    <li><a class="active" href="#">Principal</a>
                    <li><a href="">Categorias<ion-icon name="caret-down-outline"></ion-icon></a>
                        <ul class="subMenu">
                            <li><a href="">Ropa</a></li>
                            <li><a href="">Juguetes</a></li>
                            <li><a href="">Zapatos</a></li>
                        </ul>
                    </li>
                    <li><a href="loMasVisto">Lo mas visto</a></li>
                    <li><a href="ofertas">Ofertas</a></li>
                    <li><a href="seLeTrae">Se le trae</a></li>
                    <li><a href="">Mi configuración<ion-icon name="caret-down-outline"></ion-icon></a>
                        <ul class="subMenu">
                            <li><a href="miConfiguracion">Mis Datos</a></li>
                            <li><a href="">Mis compras</a></li>
                            <li><a href="">Mis favoritos</a></li>
                            <li><a href="">PQRS</a></li>
                            <li><a href="index">Cerrar Sesión</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </header>
</html>