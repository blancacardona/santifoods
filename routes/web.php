<?php

use App\Models\Recipe;
use App\Models\Category;
use App\Models\Blog;
use App\Models\Image;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminRecipeController;
use App\Http\Controllers\Admin\AdminBlogController;

use App\Models\User;
use App\Models\WebPermission\Models\Role;
use App\Models\WebPermission\Models\Permission;
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
//pruebas imagenes

// Route::get('/prueba', function () {

//     // return $user;

//     $recipe = App\Models\Recipe::find(5);
//     return $recipe->images;    
    

// });
    
//mostrar resultados
// Route::get('/resultados', function () {

//    $image = App\Models\Image::orderBy('id','Desc')->get();
//    return  $image; 
// });


Route::get('/', function () {
 

    return view('index');
});




// /*NEWSLETTER*/
// Route::get('newsletter','NewsletterController@create');
// Route::post('newsletter','NewsletterController@store');



/*COCINAMOS*/
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


/*SOBRE MI*/
Route::get('/sobremi', function () {
    return view('sobremi'); 
});


/*ADMIN*/
Route::get('/admin', function () {
    return view('admin');
})->name('admin');

Route::resource('admin/category', AdminCategoryController::class)->names('admin.category');
Route::resource('admin/recipe', AdminRecipeController::class)->names('admin.recipe');
Route::resource('admin/blog', AdminBlogController::class)->names('admin.blog');


Route::get('cancelar/{ruta}', function($ruta) {
    return redirect()->route($ruta)->with('cancelar','Acción Cancelada!');
})->name('cancelar');


/*ROLES Y USUARIOS*/

Route::resource('/role', RoleController::class)->names('role');
Route::resource('/user', UserController::class, ['except'=>[
    'create','store']])->names('user');

Auth::routes();
Route::get('/index', [App\Http\Controllers\HomeController::class, 'index'])->name('index');



Route::resource('/category', CategoryController::class)->names('category');
Route::resource('/recipe', RecipeController::class)->names('recipe');
Route::resource('/blog', BlogController::class)->names('blog');

















Route::get('/test', function() {
    // return Permission::create([
    //     'name' => 'List recipe',
    //     'slug' => 'recipe.index',
    //     'description' => 'User can list permissions',
    // ]);

    // return Role::create([
    //     'name' => 'test',
    //     'slug' => 'test',
    //     'description' => 'test',
    //     'full-access' => 'no'
    // ]);

    // $role = Role::find(2);
    // $role->permissions()->sync([1,2]);
    // return $role->permissions;
    // $role = Role::find(2);
    // $role->permissions()->sync([1,2]);
    // return $role->permissions;
    return view('entrantes');
    

});