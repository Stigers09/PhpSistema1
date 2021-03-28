<!DOCTYPE html>

<html lang="es" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
     <link rel="stylesheet" href="<?= mediaEdwincss(); ?>/style.css"> 
     <link href="<?= mediaEdwincss() ?>/seLeTrae_NB_css.css" rel="stylesheet" type="text/css"/>     
    <link href="<?= mediaEdwincss(); ?>/_20menu.css" rel="stylesheet" type="text/css"/>
    <link href="<?= mediaEdwincss(); ?>/_30nav.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
</head>


<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check">
            <i class="fas fa-bars" id="sidebar_btn"></i>
        </label>
        <div class="mobile_nav">
            <div class="nav_bar">
                <i class="fa fa-bars nav_btn" id="lanzarAlerta"></i>
            </div>
            <div class="mobile_nav_items">
                <a href="tienda"><i class="fas fa-desktop"></i><span>Principal</span></a>
                <a href="nosotros"><i class="fas fa-cogs"></i><span>Nosotros</span></a>
                <a href=""><i class="fas fa-table"></i><span>Categorias</span></a>
                <a href="loMasVisto"><i class="fas fa-th"></i><span>loMasVisto</span></a>
                <a href="ofertas"><i class="fas fa-info-circle"></i><span>Ofertas</span></a>
                <a href="miConfiguracion"><i class="fas fa-sliders-h"></i><span>${usuario.nombreUsuario}</span></a>
            </div>
        </div>
    </nav>
</body>

</html>