<?php
use App\User;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $cars = DB::table('cars')->get();
    return view('welcome', ['cars' => $cars]);
});

Route::group([
    'middleware' => 'roles',
    'roles' => 'Klient'
], function(){
    
});
Route::group([
    'middleware' => 'roles',
    'roles' => 'Admin'
], function (){
    Route::get('cars', [
        'uses' => 'CarsController@index',
        'as' => 'cars.index'
    ]);
    
    Route::get('cars/create',[
        'uses' => 'CarsController@create',
        'as' => 'cars.create'
    ]);

    Route::post('cars/store', [
        'uses' => 'CarsController@store',
        'as' => 'cars.store'
    ]);

    Route::delete('cars/{car}', [
        'uses' => 'CarsController@destroy',
        'as' => 'cars.delete'
    ]);

    Route::get('cars/edit/{car}', [
        'uses' => 'CarsController@edit',
        'as' => 'cars.edit'
    ]);

    Route::put('cars/{car}', [
        'uses' => 'CarsController@update',
        'as' => 'cars.update'
    ]);

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
