<?php

// use App\Models\Recipe;
// use App\Models\Category;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
/*NAVBAR*/
// Route::get('/', 'PublicofertController@ofertas');


Route::get('/', function () {
    // $rec = new Recipe();
    // $rec->nombre = 'GUISO DE LENTEJAS';
    // $rec->slug = 'GUISO DE LENTEJAS';
    // $rec->category_id = 3;
    // $rec->ingredientes = 'lentejas';
    // $rec->elaboracion = 'lentejas';
    // $rec->save();
    // return $rec;

    // return view('inicio');

    // $cat = Category::find(3)->recipes;
    // return $cat;
    // return view('plantilla.plantilla');
    return view('plantilla.index');
});

// Router Auth
// Route::get('/login', 'ConnectController@getLogin')->name('login');

Route::get('/recetas', 'StoreController@index');

Route::get('recetas/{slug}',
[
    'as'   => 'product-details',
    'uses' => 'StoreController@show'
]);

Route::get('categoria/{slug}',[
    'uses' => 'StoreController@searchCategory',
])->name('searchCategory');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* GESTION*/
Route::resource('usuarios','UserController')->middleware('auth')->middleware('auth');
Route::resource('roles','RoleController')->middleware('auth')->middleware('auth');

Route::resource('/Categoria', 'CategoriaController')->middleware('auth');
Route::resource('/receta', 'RecetasController')->middleware('auth');

/*ADMIN*/
