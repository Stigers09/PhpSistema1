<?php headerTienda($data); ?>
<?php headerTienda($data); ?>
<section>
    <div class="h2">
        <h2><?= $data['page_title']; ?></h2>
    </div>
    <h1>Hola ${usuario.nombreUsuario}</h1>

        <?php
          include ("cn.php");
          $usuarios = "SELECT * FROM usuarios";    
        dep($data);
        /* verUsuario(1); */
        $result = mysqli_query($connect, $usuarios);
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <div> <?php echo $row["id"]; ?> </div>
            <div> <?php echo $row["nombres"]; ?> </div>
            <div> <?php echo $row["estado"]; ?> </div>
        <?php } ?>

        <div class="box">
            <div class="box-header with-border">
                <i class="fa fa-edit"></i> <h3 class="box-title">Actualizar Datos Usuario</h3>  
            </div>
            <form class="form-horizontal" action="srvUsuario?accion=actualizarUsuario" method="post">
                <input type="hidden" name="hCodigo" value="${usuario.id_usuario}">
                <div class="box-body">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nombre Usuario</label>
                        <div class="">
                            <span class="input-group-addon"><i class=""></i></span>
                            <input id="nombre" type="text" class="" placeholder="Ejem: Alexander" name="txtNombre" maxlength="10"
                                   value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Clave</label>
                        <div class="col-sm-4 input-group">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            <input id="nombre" type="password" class="form-control" placeholder="Ejem: $%Ale!**" name="txtClave" maxlength="10"
                                   value="<?php ?>">
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
<?php footerTienda($data); ?>
<?php mysqli_free_result($result); ?>