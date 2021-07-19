<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','WelcomeController@welcome');

Route::get('/{name?}/{lastname?}/{age?}','WelcomeController@welcome')->where(['name'=>'[a-zA-Z]+', 'lastname'=>'[a-zA-Z]+','age'=>'[0-9]{0,3}']);;

/*ciao tes deploy
sgd
gdgsgsggregeg
g
g

g
*/

/*
 *
 *  function ($name= '',$lastname= '', $age='') {
    return "Hello world ".$name." ".$lastname." ".$age;})
    ->where(['name'=>'[a-zA-Z]+', 'lastname'=>'[a-zA-Z]+','age'=>'[0-9]{0,3}']);

 */
//php 8
//Route::get('/',[\App\Http\Controllers::class, 'index'] );




/*
Route::get('/users', function () {
    return view('users');
});
Route::get('/', function () {
    return view('welcome');
});
*/
//******************************************************************************************
/*
Route::get('/{name?}/{lastname?}/{age?}', function ($name= '',$lastname= '', $age='') {
    return "Hello world ".$name." ".$lastname." ".$age;})
    ->where(['name'=>'[a-zA-Z]+', 'lastname'=>'[a-zA-Z]+','age'=>'[0-9]{0,3}']);

*/
//->where('name','[a-zA-Z]+')
//->where('lastname','[a-zA-Z]+')
//******************************************************************************************



