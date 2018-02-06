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

/** @var \Laravel\Lumen\Routing\Router $router */
$router->get('/', function() use ($router) {
    return $router->app->version();
});

// Lock group, Authentication required.
// Using The "App\Http\Controllers\Locks" namespace
$router->group(['prefix' => 'lock', 'middleware' => 'auth', 'namespace' => 'Locks'], function() use ($router) {
    // Get lock info
    $router->get('{id}', [
        'uses' => 'LocksController@get'
    ]);

    // Add lock
    $router->post('add', function() {
        // Add lock
    });

    // Update lock
    $router->put('{id}', function($id) {
        return "lock " . $id;
    });

    // Delete lock
    $router->delete('{id}', function($id) {
        // Delete lock
    });
});

// Using The "App\Http\Controllers\Users" namespace
$router->group(['prefix' => 'user', 'middleware' => 'auth', 'namespace' => 'Users'], function() use ($router) {
    // Get lock info
    $router->get('{id}', function($id) {
        return "user " . $id;
    });

    // Add lock
    $router->post('add', function() {
        // Add lock
    });

    // Update lock
    $router->put('{id}', function($id) {
        return "lock " . $id;
    });

    // Delete lock
    $router->delete('{id}', function($id) {
        // Delete lock
    });
});