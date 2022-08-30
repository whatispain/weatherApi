<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

//Базовый пример

$router->get('/', function () use ($router) {
    return $router->app->version();
});

//Параметры
$router->get('user2/{id}', function ($id) { //Приер передачи параметров
    return 'User '.$id;
});

//Много параметров
$router->get('posts/{postId}/comments/{commentId}', function ($postId, $commentId) {
    $res = array("posts" => $postId, "comments" => $commentId); //Ассоциативный массив
    return  $res;
});

//Необязательные параметры
$router->get('user1[/{name}]', function ($name = null) {
    return $name;
});

//POST запросы
$router->post('send_data', 'PostController@get_data');
