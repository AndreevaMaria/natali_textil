<?php

use Illuminate\Http\Request;

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

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::get('fabricstype/', 'FabricsTypeController@getFabricsTypeList');
Route::get('/fabricstype/{id}', 'FabricsTypeController@getFabricsType');
Route::post('/fabricstype', 'FabricsTypeController@postFabricsType');
Route::put('/fabricstype/{id}', 'FabricsTypeController@updateFabricsType');
Route::delete('/fabricstype/{id}', 'FabricsTypeController@deleteFabricsType');

Route::get('fabricstype/', 'FabricController@getFabricsList');
Route::post('/fabricstype/{id}/fabric', 'FabricController@postFabric');
Route::put('/fabricstype/{id}/fabric/{idFabric}', 'FabricController@updateFabric');
Route::delete('/fabricstype/{id}/fabric/{idFabric}', 'FabricController@deleteFabric');

Route::post('/files/fabrics/upload', 'FabricController@addPhotos');

Route::get('users/', 'UserController@getUsersList');
Route::get('/users/{idUser}', 'UserController@getUserById');
Route::put('/users/{idUser}', 'UserController@updateUser');
Route::delete('/users/{idUser}', 'UserController@deleteUser');



