<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta name="description" content="E-commerce Ropa Bebe" />
        <meta name="keywords" content="Ropa Bebe Niños Niñas" />
        <title>Nubecitas de colores</title>
        <link rel="stylesheet" type="text/css" href="<?php mediaEdwincss(); ?>/normalize.css">
        <link href="<?= mediaEdwincss() ?>/_10header.css" rel="stylesheet" type="text/css"/>        
        <link href="<?= mediaEdwincss() ?>/_20menu.css" rel="stylesheet" type="text/css"/>
        <link href="<?= mediaEdwincss() ?>/_30nav.css" rel="stylesheet" type="text/css"/>
        <link href="<?= mediaEdwincss() ?>/_50section.css" rel="stylesheet" type="text/css"/>
        <link href="<?= mediaEdwincss() ?>/_51tarjetas.css" rel="stylesheet" type="text/css"/>
        <link href="<?= mediaEdwincss() ?>/_70footer.css" rel="stylesheet" type="text/css"/>        

        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">	
        <link rel="script" href="js/index_NB_js.js">		
    </head>

    <body>
        <header>		
            <a href="tienda.jsp">
                <img src="<?php mediaEdwinimages(); ?>/Logo.PNG" alt="Nubecitas de Colores">
            </a>		
            <div class="header__div">			
                <h1>NUBECITAS DE COLORES</h1>
                <div>
                    <ul class="header__div-ul">
                        <li><a href="loMasVisto">Principal</li>
                        <li><a href="">Categorias</li>
                        <li><a href="loMasVisto">Lo mas visto</li>
                        <li><a href="ofertas">Ofertas</li>
                        <li><a href="seLesTrae">Se le trae</li>
                        <li><a href="miConfiguracion.jsp">Mi configuración</li>
                    </ul>
                </div>	
            </div>				

            <script src="js/index_NB_js.js"></script>
        </header>

        <nav>
            <div>
                <ul class="nav__div-ul">
                    <li><a href="">Categorias</li>
                    <li><a href="loMasVisto.jsp">Lo mas visto</li>
                    <li><a href="ofertas.jsp">Ofertas</li>
                    <li><a href="seLeSTrae">Se le trae</li>
                    <li><a href="">Mi configuración</li>
                </ul>
            </div>			
        </nav>

        <section>				
            <h1>Hola ${usuario.nombreUsuario}</h1>
            <section class="content">
                <?php
                dep($data);
                verUsuarios();
                ?>
                <div class="box">
                    <div class="box-header with-border">
                        <i class="fa fa-edit"></i> <h3 class="box-title">Actualizar Datos Usuario</h3>  
                    </div>
                    <form class="form-horizontal" action="srvUsuario?accion=actualizarUsuario" method="post">
                        <input type="hidden" name="hCodigo" value="${usuario.id_usuario}">
                        <div class="box-body">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Nombre Usuario</label>
                                <div class="col-sm-4 input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input id="nombre" type="text" class="form-control" placeholder="Ejem: Alexander" name="txtNombre" maxlength="10"
                                           value="${usuario.nombreUsuario}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Clave</label>
                                <div class="col-sm-4 input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                    <input id="nombre" type="password" class="form-control" placeholder="Ejem: $%Ale!**" name="txtClave" maxlength="10"
                                           value="${usuario.clave}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Cargo</label>
                                <div class="col-sm-4 input-group">
                                    <span class="input-group-addon"><i class="fa fa-tags"></i></span>
                                    <select class="form-control"  name="cboCargo" autofocus=""  required="">
                                        <option value="0">Seleccione un cargo</option>
                                        <c:forEach items="${cargos}" var="car">
                                            <option value="${car.codigo}"  
                                        <c:if test="${car.codigo == 
                                              usuario.cargo.codigo}">
                                            selected
                                        </c:if>
                                        >${car.nombreCargo}</option>
                                    </c:forEach>
                                </select>
                            </div>                                  
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="chkEstado" 
                                               <c:out value="${usuario.estado == false ?
                                               'unchecked' : 'checked'}"
                                               default="" />>Activo
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="reset" class="btn btn-danger"><i class="fa fa-close red"></i> Cancelar</button>
                        <button type="submit" id="" name="btnRegistrar" value="Registrar" class="btn btn-success"><i class="fa fa-refresh"></i> Actualizar Usuario</button>

                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
        </section> 
    </section>
    <footer>Derechos Reservados</footer>

</body>
</html>