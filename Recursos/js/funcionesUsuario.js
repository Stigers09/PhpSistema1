$(document).ready(function () {
    $("tr #deleteUser").click(function (e) {
        e.preventDefault();
        var cod = $(this).parent().find('#codigo').val();
        swal({
            title: "Esta Seguro de Eliminar?",
            text: "Una vez eliminado deberá agregar de nuevo!",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Sí, Eliminar!",
            cancelButtonText: "No, Cancelar!",
            closeOnConfirm: false,
            closeOnCancel: false
        },
                function (isConfirm) {
                    if (isConfirm) {
                        eliminarUsuario(cod);
                        swal("Eliminado!", "El usuario se ha eliminado", "success");
                        setTimeout(function () {
                            parent.location.href = "srvUsuario?accion=listarUsuarios"
                        }, 1800);
                    } else {
                        swal("Cancelado", "Cancelaste la eliminación", "error");
                    }
                });
    });

    function eliminarUsuario(cod) {
        var url = "srvUsuario?accion=eliminarUsuario&cod=" + cod;
        console.log("eliminado");
        $.ajax({
            type: 'POST',
            url: url,
            async: true,
            success: function (r) {

            }
        });
    }
});

$(document).ready(function () {
    $("#activarUsuario").click(function (e) {
        e.preventDefault();
        var cod = $(this).parent().find("#item").val();
        swal({
            title: "Esta Seguro de Activar este Usuario?",
            text: "Una vez activado ingresará al sistema!",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Sí, Activar!",
            cancelButtonText: "No, Cancelar!",
            closeOnConfirm: false,
            closeOnCancel: false
        },
            function (isConfirm) {
                if (isConfirm) {
                   activarUsuario(cod);
                    swal("Activado!", "El usuario se ha activado", "success");
                    setTimeout(function () {
                    parent.location.href = "srvUsuario?accion=listarUsuarios"
                    }, 1800);
                    } else {
                        swal("Cancelado", "No se desactivo", "error");
                    }
                });
    });

    function activarUsuario(cod) {
        var url = "srvUsuario?cambiar=activar&cod=" + cod;
        console.log("activado");
        $.ajax({
            type: 'POST',
            url: url,
            async: true,
            success: function (r) {

            }
        });
    }
});

$(document).ready(function () {
    $("#desactivarUsuario").click(function (e) {
        e.preventDefault();
        var cod = $(this).parent().find("#item").val();
        swal({
            title: "Esta Seguro de Desactivar este Usuario?",
            text: "Una vez desactivado no podrá ingresar al sistema!",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Sí, Desactivar!",
            cancelButtonText: "No, Cancelar!",
            closeOnConfirm: false,
            closeOnCancel: false
        },
            function (isConfirm) {
                if (isConfirm) {
                   desactivarUsuario(cod);
                    swal("Desactivado!", "El usuario se ha desactivado", "success");
                    setTimeout(function () {
                    parent.location.href = "srvUsuario?accion=listarUsuarios"
                    }, 1800);
                    } else {
                        swal("Cancelado", "No se desactivo", "error");
                    }
                });
    });

    function desactivarUsuario(cod) {
        var url = "srvUsuario?cambiar=desactivar&cod=" + cod;
        console.log("desactivado");
        $.ajax({
            type: 'POST',
            url: url,
            async: true,
            success: function (r) {

            }
        });
    }
});



