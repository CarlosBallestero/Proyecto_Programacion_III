cargarTabla();

//Consumir el API y obtener las peliculas de la base de datos
function cargarTabla() {
    //peticion asincrona
    $.ajax({
        type: "GET",
        url: "http://localhost:8080/usuarios",
        dataType: "JSON",

        success: function (res) {
            console.log(res)
            let filas = "";
            res.forEach(p => {
                filas += crearFila(p)
            });
            //mostrar filas en la tabla
            $("#datosTabla").html(filas);
        }, error: function (xhr) {
            console.log(xhr.statusText + xhr.responseText)
        }, complete: function () {
            console.log("Terminado")
        }
    });
}

function crearFila(p) {
    return `
        <tr>
            <td scope="col">${p.cedula}</td>
            <td scope="col">${p.contraseña}</td>
            <td scope="col">${p.nombre}</td>
            <td scope="col">${p.primerApellido}</td>
            <td scope="col">${p.segundoApellido}</td>
            <td scope="col">${p.correo}</td>
            <td scope="col">${p.fechaNacimiento}</td>
            <td scope="col">${p.telefono}</td>
            <td scope="col">${p.numeroWA}</td>
            <td scope="col">
            <button class="me-3 btn btn-outline-warning"><i class="fa-solid fa-pencil"></i></button>
            <button class="me-3 btn btn-outline-danger"><i class="fa-solid fa-trash"></i></button>
            </td>
        </tr>
    
    `;
    
}