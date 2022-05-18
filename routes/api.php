<?php
use Slim\App;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use Davidvandertuijn\Password;


// use Slim\Container;
// $container = new Container();


require_once __DIR__.'/../vendor/autoload.php';


// $container['password'] = function ($container) {
//     return new Password();
// };


$app = new App();
// $app = new App($container);

$app->get('/', function (Request $request, Response $response, array $args) {
    // $name = $args['name'];
    $response->getBody()->write("Hello, Api development ");
    return $response;
});

$app->get('/login', function (Request $request, Response $response, array $args) {
    // $name = $args['name'];
    $response->getBody()->write("Hello,Login Api ");
    return $response;
});

$app->get('/signup', function (Request $request, Response $response, array $args) {
    // $name = $args['name'];
    $response->getBody()->write("Hello,Signup Api ");
    return $response;
});

$app->get('/pass', function (Request $request, Response $response, array $args) {
    $password = new Password();
    $response->getBody()->write($password->generate());
    return $response;

    // return $response->write($this->get('password')->generate());
});


