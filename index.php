<?php


use Slim\App;
use Slim\Container;
use App\Classes\Db;

require __DIR__.'/vendor/autoload.php';

$db = new Db();
$conn = $db->getConnection();


$container = new Container(
    [
        'settings' => [
            'displayErrorDetails' => true
        ],
    ]
);

$container['conn'] = function () use ($conn) {
    return $conn;
};

$app = new App($container);

//Include API Routes
require_once(__DIR__ . '/routes/api.php');


try {
    $app->run();
} catch (Throwable $e) {
    die($e->getMessage());
}