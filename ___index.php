<?php
    
    use Psr\Http\Message\ServerRequestInterface as Request;
    use Psr\Http\Message\ResponseInterface as Response;

    require_once "vendor/autoload.php";

    $conf = [
        'settings' => [
            'displayErrorDetails' => true,
        ]
    ];
    $conf = new \Slim\Container($conf);

    $app = new \Slim\App($conf);

    // Rota Home
    $app->get('/', function($request, $response, $args){
        return $response->getBody()->write('Bem vindo!');
    });
    
    // Rota via GET de produtos com parametros
    $app->get('/produtos[/{nome}]', function(Request $request, Response $response, array $args):Response{

        $limit = $request->getQueryParams()["limit"] ?? 10;
        $nome = $args["nome"] ?? '';
        $response->getBody()->write("{$limit} Produtos do banco de dados <strong>{$nome}</strong>");
        return $response;

    });

    // Rota via POST
    $app->post('/produto', function(Request $request, Response $response, array $args){
        $data = $request->getParsedBody();
        //print_r($data);die;
        return json_encode($data);die;
    });

    // Rota via PUT
    $app->put('/produto', function(Request $request, Response $response, array $args){
        $data = $request->getParsedBody();
        //print_r($data);die;
        return json_encode($data);die;
    });

    // Rota via DELETE
    $app->delete('/produto', function(Request $request, Response $response, array $args){
        $data = $request->getParsedBody();
        //print_r($data);die;
        return json_encode($data);die;
    });

    

    $app->run();