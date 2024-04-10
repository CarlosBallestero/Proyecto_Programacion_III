<?php

declare(strict_types=1);

use App\Application\Actions\User\ListUsersAction;
use App\Application\Actions\User\ViewUserAction;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

return function (App $app) {
    $app->options('/{routes:.*}', function (Request $request, Response $response) {
        // CORS Pre-Flight OPTIONS Request Handler
        return $response;
    });

    
    //CRUD Usuarios
    $app->post('/insertarUsuario', function (Request $request, Response $response) {
        $response->getBody()->write('Insertar Usuario');
        return $response;
    });

    $app->put('/modificarUsuario', function (Request $request, Response $response, array $args) {
        $response->getBody()->write('Modificar Usuario');
        return $response;
    });

    $app->delete('/eliminarUsuario', function (Request $request, Response $response, array $args) {
        $response->getBody()->write('Eliminar Usuario');
        return $response;
    });


    //CRUD Usuarios
    $app->post('/insertarCasa', function (Request $request, Response $response) {
        $response->getBody()->write('Insertar Casa');
        return $response;
    });

    $app->put('/modificarCasa', function (Request $request, Response $response, array $args) {
        $response->getBody()->write('Modificar Casa');
        return $response;
    });

    $app->delete('/eliminarCasa', function (Request $request, Response $response, array $args) {
        $response->getBody()->write('Eliminar Casa');
        return $response;
    });


    $app->group('/users', function (Group $group) {
        $group->get('', ListUsersAction::class);
        $group->get('/{id}', ViewUserAction::class);
    });
};
