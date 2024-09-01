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
    $router->resource('news', \App\Admin\Controllers\User\NewsController::class);
    $router->resource('stories', \App\Admin\Controllers\User\StoryController::class);
    $router->post('froala-editor/upload','User\Api\FroalaEditorUploadController@uploadImage');
});
