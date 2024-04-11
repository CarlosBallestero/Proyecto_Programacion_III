cargarTabla();

//Consumir el API y obtener las peliculas de la base de datos
function cargarTabla() {
    //peticion asincrona
    $.ajax({
        type: "GET",
        url: "http://localhost:8080/casas",
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
            <td scope="col">${p.id}</td>
            <td scope="col">${p.nombre}</td>
            <td scope="col">${p.metros}</td>
            <td scope="col">${p.ubicacion}</td>
            <td scope="col">${p.precio}</td>
            <td scope="col">${p.detalles}</td>
            <td scope="col">
            <button class="me-3 btn btn-outline-warning"><i class="fa-solid fa-pencil"></i></button>
            <button class="me-3 btn btn-outline-danger"><i class="fa-solid fa-trash"></i></button>
            </td>
        </tr>
    
    `;
    
}