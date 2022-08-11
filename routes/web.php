<?php

use Illuminate\Support\Facades\Route;
use Intervention\Image\Facades\Image;

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
    return view('welcome');
});

Route::get('/index', ['App\Http\Controllers\FileController', 'index']);


Route::get('/canvas', function(){
    $img = Image::make(storage_path('app\images\2.jpg'));

    $img = Image::canvas(100, 100);

    $img->line(90, 90, 90, 30, function ($draw) {
        $draw->color('#000');
    });

    $img->line(10, 90, 90, 30, function ($draw) {
        $draw->color('#000');
    });

    $img->line(90, 90, 10, 30, function ($draw) {
        $draw->color('#000');
    });

    return $img->response('jpg');

});
