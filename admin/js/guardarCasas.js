//validar formula
var validacion = $("#frmCasas").validate({
    rules: {
        nombre: {
            required: true
        },
        metros: {
            required: true
        },
        ubicacion: {
            required: true
        },
        precio: {
            required: true
        },
        detalles: {
            required: true
        },
    }
});

var ID = -1;
if (sessionStorage.getItem("id") != null) {
    $("#id").val(sessionStorage.getItem("id"));
    $("#nombre").val(sessionStorage.getItem("nombre"));
    $("#metros").val(sessionStorage.getItem("metros"));
    $("#ubicacion").val(sessionStorage.getItem("ubicacion"));
    $("#precio").val(sessionStorage.getItem("precio"));
    $("#detalles").val(sessionStorage.getItem("detalles"));
    sessionStorage.clear();
    ID = 1;
}
$("#guardar").click(function (e) {
    if (validacion.form()) {
        //generar parametros
        let datos = $("#frmCasas").serialize();
        const accion = (ID == -1) ? "insertarCasa" : "modificarCasa";
        const petición = (ID == -1) ? "post" : "put";
        peticionGuardar(accion, petición, datos);
    } else {
        Swal.fire({
            title: "Error de ingreso de datos",
            text: "Debe corregir datos",
            icon: "warning"
        })
    }

});

function peticionGuardar(accion, petición, datos) {
    const URL = `http://localhost:8080/${accion}?${datos}`
    console.log(URL);
    $.ajax({
        type: petición,
        url: URL,
        success: function (res) {
            Swal.fire({
                title: "Mensaje",
                text: "Datos Guardados Correctamente",
                icon: "success"
            })

        }, error: function (xhr) {
            console.log(xhr.statusText + xhr.responseText)
        }, complete: function () {
            console.log("Terminado")
        }
    });
}