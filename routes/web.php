<?php

use App\Defined\Car;
use App\Defined\Engine;
use App\Defined\Tire;
use Illuminate\Support\Facades\App;
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

//App::bind('Car', function()
//{
//    return new Car(new Tire, new Engine);
//});

Route::get('/', function () {
//    $app = app();
//
//    print_r($app);

    dd(App::make('App\Defined\Car'));
//    return view('welcome');
});
