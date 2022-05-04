<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('/service_user', UserController::class);
    $router->resource('/order', OrderController::class);
    $router->resource('/designer', DesignerController::class);
    $router->resource('/cart', CartController::class);
    $router->resource('/item', ItemController::class);
    
});
