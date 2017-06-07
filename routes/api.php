<?php

//use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/
/// our angular api
$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
    $api->post('authenticate', 'App\Http\Controllers\AuthenticateController@authenticate');


    // categories
    $api->group(['prefix' => 'categories'], function ($api) {
        $api->get('/', 'App\Http\Controllers\CategoriesController@index');
        $api->get('/{id}', 'App\Http\Controllers\CategoriesController@show');
        $api->post('/', 'App\Http\Controllers\CategoriesController@store');
        $api->put('/{id}', 'App\Http\Controllers\CategoriesController@update');
        $api->delete('/{id}', 'App\Http\Controllers\CategoriesController@destroy');

    });

    // Terms
    $api->group(['prefix' => 'articles'], function ($api) {
        $api->get('/', 'App\Http\Controllers\ArticlesController@index');
        $api->get('/{id}', 'App\Http\Controllers\ArticlesController@show');
        $api->post('/', 'App\Http\Controllers\ArticlesController@store');
        $api->put('/{id}', 'App\Http\Controllers\ArticlesController@update');
        $api->delete('/{id}', 'App\Http\Controllers\ArticlesController@destroy');
        $api->get('/search/{article}', 'App\Http\Controllers\ArticlesController@searchForTerm');

    });

    // Articles
    $api->group(['prefix' => 'users'], function ($api) {
        $api->get('/', 'App\Http\Controllers\UsersController@index');
        $api->get('/{id}', 'App\Http\Controllers\UsersController@show');
        $api->post('/', 'App\Http\Controllers\UsersController@store');
        $api->put('/{id}', 'App\Http\Controllers\UsersController@update');
        $api->delete('/{id}', 'App\Http\Controllers\UsersController@destroy');

    });


});
