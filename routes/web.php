<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CasillaController;
use App\Http\Controllers\CandidatoController;
use App\Http\Controllers\VotoController;

use App\Http\Controllers\EleccionController;

use App\Http\Controllers\Auth\LoginController;


use App\Http\Controllers\GraphPdfController;



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
//Route::get('casilla/pdf',[CasillaController::class,'generatepdfHTML']);
//Route::get('casilla/pdf',[CasillaController::class,'generatepdf']);//la descargfa encimada

Route::get('casilla/pdf',[GraphPdfController::class,'generatepdf']);


//Route::get('voto/pdf',[GraphPdfController::class,'createPDF'])->name('download');

//Route::get('votograph',[VotoController::class,'index']);
Route::get('voto/graphic',[GraphPdfController::class,'vista']);
//Route::get('/productos', [Producto::class, 'index'])->name('productos.index');

Route::resource('casilla', CasillaController::class);
Route::resource('candidato', CandidatoController::class);
Route::resource('voto', VotoController::class);

Route::resource('eleccion',EleccionController::class);


//Route::get('/login','Auth\LoginController@index');
/*Route::get('/login/facebook', 'Auth\LoginController@redirectToFacebookProvider');
Route::get('/login/facebook/callback', 'Auth\LoginController@handleProviderFacebookCallback');
*/
//Auth::routes();
Route::get('/login',[LoginController::class,'index']);
Route::get('/login/facebook',[LoginController::class,'redirectToFacebookProvider']);;
Route::get('/login/facebook/callback',[LoginController::class,'handleProviderFacebookCallback']);
Route::get('logout',[LoginController::class,'logout']);


Route::get('graph',[GraphPdfController::class,'index']);//Vista de graph Normal 
//Route::get('download',[GraphPdfController::class,'dwn'])->name('download');
Route::get('download',[GraphPdfController::class,'dwn'])->name('download');






