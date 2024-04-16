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

    $app->get('/usuarios', function (Request $request, Response $response, array $args) {
        //Abrir la conexión
        $db = conectar();

        //cambiar metodo fecth
        $db->SetFetchMode(ADODB_FETCH_ASSOC);

        //consulta de 
        $sql="SELECT * FROM usuarios";
        $res=$db->GetAll($sql);

        $response->getBody()->write(json_encode($res));
        return $response;
    });


    //Login de usuarios
      
    

    $app->post('/login', function (Request $request, Response $response, $args) {
        $data = $request->getParsedBody();
        $cedula = $data['cedula'];
        $contraseña = $data['contraseña'];
    
        $pdo = $this->get('pdo');
    
        // Consulta a la base de datos utilizando PDO
        $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE username = :username AND password = :password");
        $stmt->execute(['cedula' => $cedula, 'contraseña' => $contraseña]);
        $user = $stmt->fetch();

        if ($user) {
            $data = ['message' => 'Inicio de sesión exitoso'];
            $jsonResponse = json_encode($data);

            $response->getBody()->write($jsonResponse);
            return $response->withHeader('Content-Type', 'application/json')->withStatus(200);
        } else {
            //return $response->withStatus(401)->withJson(['message' => 'Credenciales inválidas']);
            $data = ['message' => 'Credenciales incorrectas'];
            $jsonResponse = json_encode($data);

            $response->getBody()->write($jsonResponse);
            return $response->withHeader('Content-Type', 'application/json')->withStatus(401);
        }
    });

    
    //CRUD Casas
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
    
    $app->get('/casas', function (Request $request, Response $response, array $args) {
        //Abrir la conexión
        $db = conectar();

        //cambiar metodo fecth
        $db->SetFetchMode(ADODB_FETCH_ASSOC);

        //consulta de 
        $sql="SELECT * FROM casas";
        $res=$db->GetAll($sql);

        $response->getBody()->write(json_encode($res));
        return $response;
    });

    $app->group('/users', function (Group $group) {
        $group->get('', ListUsersAction::class);
        $group->get('/{id}', ViewUserAction::class);
    });
};
