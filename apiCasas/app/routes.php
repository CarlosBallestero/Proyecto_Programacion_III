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

    
    //CRUD Usuarios
    $app->post('/insertarUsuario', function (Request $request, Response $response) {
        //Abrir la conexion
        $db = conectar();

       //obtener el registro a guardar
       $rec = $request->getQueryParams();

       //guardar en bd
       $res = $db->AutoExecute("usuarios", $rec, "INSERT");

       $response->getBody()->write(strval($res));
       return $response;
    });

    $app->put('/modificarUsuario', function (Request $request, Response $response, array $args) {
        //Abrir la conexion
        $db = conectar();

        //obtener el registro a guardar
        $rec = $request->getQueryParams();

        //guardar en bd        
        $res = $db->AutoExecute("usuarios", $rec, "UPDATE","id=$rec[id]");

        $response->getBody()->write(strval($res));
        return $response;
    });

    $app->delete('/eliminarUsuario/{id}', function (Request $request, Response $response, array $args) {
        $id = $args['id'];
        //Abrir la conexión
        $db = conectar();
        //consulta de borrado
        $sql="DELETE FROM usuarios WHERE id='$id'";
        $res=$db->Execute($sql);

        $response->getBody()->write(strval(var_dump($res)));
        return $response;
    });

    
    //CRUD Usuarios
    $app->post('/insertarCasa', function (Request $request, Response $response) {
        //Abrir la conexion
        $db = conectar();

       //obtener el registro a guardar
       $rec = $request->getQueryParams();

       //guardar en bd
       $res = $db->AutoExecute("casas", $rec, "INSERT");

       $response->getBody()->write(strval($res));
       return $response;
    });

    $app->put('/modificarCasa', function (Request $request, Response $response, array $args) {
        //Abrir la conexion
        $db = conectar();

        //obtener el registro a guardar
        $rec = $request->getQueryParams();

        //guardar en bd        
        $res = $db->AutoExecute("casas", $rec, "UPDATE","id=$rec[id]");

        $response->getBody()->write(strval($res));
        return $response;
    });

    $app->delete('/eliminarCasa/{id}', function (Request $request, Response $response, array $args) {
        $id = $args['id'];
        //Abrir la conexión
        $db = conectar();
        //consulta de borrado
        $sql="DELETE FROM casas WHERE id='$id'";
        $res=$db->Execute($sql);

        $response->getBody()->write(strval(var_dump($res)));
        return $response;
    });


    $app->group('/users', function (Group $group) {
        $group->get('', ListUsersAction::class);
        $group->get('/{id}', ViewUserAction::class);
    });
};
