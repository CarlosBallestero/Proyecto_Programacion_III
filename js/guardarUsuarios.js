//validar formula - afuera
var validacion = $("#frmUsuarios").validate({
    rules: {
        cedula: {
            required: true
        },
        contraseña: {
            required: true
        },
        nombre: {
            required: true
        },
        primerApellido: {
            required: true
        },
        segundoApellido: {
            required: true
        },
        correo: {
            required: true
        },
        fechaNacimiento: {
            required: true
        },
        telefono: {
            required: true
        },
        numeroWA: {
            required: true
        },
    }
});

var ID = -1;
if (sessionStorage.getItem("cedula") != null) {
    $("#cedula").val(sessionStorage.getItem("cedula"));
    $("#contraseña").val(sessionStorage.getItem("contraseña"));
    $("#nombre").val(sessionStorage.getItem("nombre"));
    $("#primerApellido").val(sessionStorage.getItem("primerApellido"));
    $("#segundoApellido").val(sessionStorage.getItem("segundoApellido"));
    $("#correo").val(sessionStorage.getItem("correo"));
    $("#fechaNacimiento").val(sessionStorage.getItem("fechaNacimiento"));
    $("#telefono").val(sessionStorage.getItem("telefono"));
    $("#numeroWA").val(sessionStorage.getItem("numeroWA"));
    sessionStorage.clear();
    ID = 1;
}
$("#guardar").click(function (e) {
    if (validacion.form()) {
        //generar parametros
        let datos = $("#frmUsuarios").serialize();
        const accion = (ID == -1) ? "insertarUsuario" : "modificarUsuario";
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

