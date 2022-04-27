<?php

use App\Models\Recipe;
use App\Models\Category;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\AdminCategoryController;
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
    return view('index');
});

// Router Auth
// Route::get('/login', 'ConnectController@getLogin')->name('login');

// Auth::routes();

// /* GESTION*/
// Route::resource('usuarios','UserController')->middleware('auth')->middleware('auth');
// Route::resource('roles','RoleController')->middleware('auth')->middleware('auth');

// Route::resource('/Categoria', 'CategoriaController')->middleware('auth');
// Route::resource('/receta', 'RecetasController')->middleware('auth');

// /*ADMIN*/

// /*NEWSLETTER*/
// Route::get('newsletter','NewsletterController@create');
// Route::post('newsletter','NewsletterController@store');

/*SHOWCOOKING*/
// Route::get('cocinamos','ShowcookingController@create');
// Route::post('cocinamos','ShowcookingController@store');

Route::get('/cocinamos', function () {
    return view('cocinamos'); 
});

Route::get('/cocinamos/showcooking','ShowcookingController@create');
Route::post('/cocinamos/showcooking','ShowcookingController@store');

// Route::get('/cocinamos/showcooking', function () {
//     return view('showcooking'); 
// });
Route::get('/cocinamos/teambuilding', function () {
    return view('teambuilding'); 
});
Route::get('/cocinamos/chefencasa', function () {
    return view('chefencasa'); 
});

/*SANTIFOODS*/
Route::get('/sobremi', function () {
    return view('sobremi'); 
});

Route::get('/admin', function () {
    return view('admin');
})->name('admin');

Route::resource('admin/category', AdminCategoryController::class)->names('admin.category');


// Route::get('/admin', function () {
//     return view('admin');
// })->name('admin');

Route::resource('admin/category', AdminCategoryController::class)->names('admin.category');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

Route::get('cancelar/{ruta}', function($ruta) {
    return redirect()->route($ruta)->with('cancelar','Acción Cancelada!');
})->name('cancelar');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
