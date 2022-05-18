<?php
namespace App\Http\Controllers;


use Slim\Container;

class UserController
{
    public function __construct(Container $app)
    {
        
    }

    public function test()
    {
        echo 'i am working';
    }

}
