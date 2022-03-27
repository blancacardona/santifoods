<?php

use App\Models\Recipe;
use App\Models\Category;

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
    // $rec->nombre = 'ÁRBOL DE FERRERO ROCHER';
    // $rec->slug = 'ÁRBOL DE FERRERO ROCHER';
    // $rec->descripcion = 'La receta de esta Navidad por excelencia, es súper fácil y te dejará sin palabras al probarlo.';
    // $rec->tiempo = '01:30';
    // $rec->raciones = 8;
    // $rec->ingredientes = 'Caja de Ferrero, 1 masa de hojaldre, 1 huevo, 1 cucharada de leche condensada';
    // $rec->elaboracion = '1.-Precalentamos el horno a 180 grados, con ventilación y calor arriba y abajo.
    //                     2.- Colocamos la masa en una bandeja de horno, hacemos cortes verticales y horizontales.
    //                     3.- Haciendo cuadrados encima colocamos los bombones y cerramos uno a uno con mucho cuidado.
    //                     4.- Hacemos la forma del árbol y pintamos con el huevo batido.
    //                     5.- Metemos al horno hasta que veamos el hojaldre dorado.
    //                     6.- Añadimos la leche condensada por encima y disfrutamos.
    //                     7.- Qué nadie se libre de probar este manjar estas navidades con tu familia o amigos ❤️
    
    //                     “Una Navidad en familia, llena de ilusión y magia” 🎄✨';
    // $rec->category_id = 1;
    // $rec->principal = 'Si';
    // $rec->save();
    // return $rec;

   

    return view('index');
});


// Router Auth
// Route::get('/login', 'ConnectController@getLogin')->name('login');

// Route::get('/recetas', 'StoreController@index');

// Route::get('recetas/{slug}',
// [
//     'as'   => 'product-details',
//     'uses' => 'StoreController@show'
// ]);

// Route::get('categoria/{slug}',[
//     'uses' => 'StoreController@searchCategory',
// ])->name('searchCategory');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

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
Route::get('showcooking','ShowcookingController@create');
Route::post('showcooking','ShowcookingController@store');

/*SANTIFOODS*/
Route::get('santifoods', function () {
    return view('santifoods'); 
});
