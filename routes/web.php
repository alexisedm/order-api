<?php

use Illuminate\Http\Request;

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
//retornar version de lumen
$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/arcaxd', 'ExampleController@index');

$router->group(['prefix' => 'products'], function () use ($router) {
    $router->get('/', 'ProductsController@index');
    $router->get('/{id}', 'ProductsController@show');
    $router->post('/', 'ProductsController@store');
    $router->put('/{id}', 'ProductsController@update');
    $router->delete('/{id}', 'ProductsController@destroy');
});


// $router->group(['prefix' => 'example'], function () use ($router) {
//     $router->get('/', 'ExampleController@index');
//     $router->get('{id}', 'ExampleController@show');
//     $router->post('/', 'ExampleController@store');
//     $router->put('{id}', 'ExampleController@update');
//     $router->delete('{id}', 'ExampleController@destroy');

// });


// $router->get('ecommerce', ['middleware' => 'example', function(){
//     return "Hola compradors compulsivos";

// }]);

// para no repetir prefijos en la URL podemos crear un group
// $router->group(['prefix' => 'ecommerce'], function () use ($router) {
//     //retornar un array
//     $router->get('/', function () {
//         return [
//             "company" => 'Ecommerce',
//         ];
//     });
//     //retornar un string
//     $router->get('{id}', function (int $id) {
//         return "Se paso el parametro" . $id;
//     });

//     //metodo post
//     $router->post('/', function (Request $request) {
//         //retorna todos los campos en formato json
//         return response($request->all(), 201);
//     });

//     $router->put('{id}', function (Request $request) {  //estos no deben responde run contenido por eso 204 / de lo contrario 200
//         return response(null, 204);
//     });

//     $router->delete('{id}', function (Request $request) {
//         return response(null, 204);
//     });
// });
