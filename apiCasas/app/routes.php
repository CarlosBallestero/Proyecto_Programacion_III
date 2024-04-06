<?php

declare(strict_types=1);

use App\Application\Actions\User\ListUsersAction;
use App\Application\Actions\User\ViewUserAction;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

include "../public/conexion.php";

return function (App $app) {
    $app->options('/{routes:.*}', function (Request $request, Response $response) {
        // CORS Pre-Flight OPTIONS Request Handler
        return $response;
    });

    //CRUD PELICULAS
    //INSERTAR
    $app->post('/insertar', function (Request $request, Response $response) {
        //Abrir la conexión
        $db = conectar();

        //obrener el registro a guardar
        $rec = $request->getQueryParams();

        //guardar en bd        
        $res = $db->AutoExecute("peliculas", $rec, "INSERT");

        $response->getBody()->write(strval($res));
        return $response;
    });
    //MODIFCAR
    $app->put('/modificar', function (Request $request, Response $response, array $args) {
        //Abrir la conexión
        $db = conectar();

        //obrener el registro a guardar
        $rec = $request->getQueryParams();

        //guardar en bd        
        $res = $db->AutoExecute("peliculas", $rec, "UPDATE","id=$rec[id]");

        $response->getBody()->write(strval($res));
        return $response;
    });
    //ELIMINAR
    $app->delete('/eliminar/{id}', function (Request $request, Response $response, array $args) {
        $id = $args['id'];
        //Abrir la conexión
        $db = conectar();
        //consulta de borrado
        $sql="DELETE FROM peliculas WHERE id='$id'";
        $res=$db->Execute($sql);

        $response->getBody()->write(strval(var_dump($res)));
        return $response;
    });
    //ONBTENER INFORMACION
    //ontener todas las peliculas
    $app->get('/peliculas', function (Request $request, Response $response) {
        //Abrir la conexión
        $db = conectar();

        //cambiar metodo fecth
        $db->SetFetchMode(ADODB_FETCH_ASSOC);

        //consulta de 
        $sql="SELECT * FROM peliculas";
        $res=$db->GetAll($sql);

        $response->getBody()->write(json_encode($res));
        return $response;
    });
    //pelicula x id
    $app->get('/pelicula/{id}', function (Request $request, Response $response, array $args) {
        $id = $args['id'];
        //Abrir la conexión
        $db = conectar();

        //cambiar metodo fecth
        $db->SetFetchMode(ADODB_FETCH_ASSOC);

        //consulta de 
        $sql="SELECT * FROM peliculas WHERE id='$id'";
        $res=$db->GetAll($sql);

        $response->getBody()->write(json_encode($res[0]));
        return $response;
    });


    $app->get('/peliculasencartelera', function (Request $request, Response $response, array $args) {
        //Abrir la conexión
        $db = conectar();

        //cambiar metodo fecth
        $db->SetFetchMode(ADODB_FETCH_ASSOC);

        //consulta de 
        $sql="SELECT * FROM peliculas WHERE activo=1";
        
        $res=$db->GetAll($sql);

        $response->getBody()->write(json_encode($res));
        return $response;
    });

    //bsucar todaS las peliculas que contegan el texto  buscar y que esten activas
    $app->get('/peliculas/{buscar}', function (Request $request, Response $response, array $args) {
        $buscar = $args['buscar'];
        //Abrir la conexión
        $db = conectar();

        //cambiar metodo fecth
        $db->SetFetchMode(ADODB_FETCH_ASSOC);

        //consulta de 
        $sql="SELECT * FROM peliculas WHERE  nombre like '%$buscar%' and  activo=1";
        
        $res=$db->GetAll($sql);

        $response->getBody()->write(json_encode($res));
        return $response;
    });


    //Administración de Usuarios

    //insertar Usuario

    //modificar usuario

    //eliminar usuario

    //Obtener usuario por id

    //obtener todos los usuarios

    //obtener usuarios bloqueados



    $app->group('/users', function (Group $group) {
        $group->get('', ListUsersAction::class);
        $group->get('/{id}', ViewUserAction::class);
    });
};
