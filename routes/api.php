<?php

global $app;

$app->get('/hello/{name}', function ($request, $response, $args) {
    return $response->write("Hello " . $args['name']);
});
$app->get(
    '/test',
    '\App\Http\Controllers\UserController:test'
)->setName('test');

?>