  <?php



//0 saber si un usuario o producto tiene o no una imagen
$usuario = App\Models\User::find(1);

$image= $usuario->image;

if ($image) {
    echo 'tiene una imagen';
}
else {
    echo 'no tiene una imagen';
}

return $image;


//01 crear una imagen para un usuario utilizando el metodo save

$imagen = new App\Models\Image(['url'=> 'imagenes/avatar.png']);

$usuario = App\Models\User::find(1);

$usuario->image()->save($imagen);

return $usuario;


//02 obtener las informaciones de las imagenes a traves del usuario

$usuario = App\Models\User::find(1);

return $usuario->image->url;



//03 crear varias imagenes para un producto utilizando el metodo savemany

$receta = App\Models\Recipe::find(3);

$receta->images()->saveMany([
    new App\Models\Image(['url'=> 'imagenes/avatar.png']),
    new App\Models\Image(['url'=> 'imagenes/avatar2.png']),
    new App\Models\Image(['url'=> 'imagenes/avatar3.png']),


]);

return $receta->images;




//04 crear una imagen para un usuario utilizando el metodo create

$usuario = App\Models\User::find(1);

$usuario->image()->create([
    'url' => 'imagenes/avatar2.png',
]);

return $usuario;


// otra forma seria asi

$imagen = [];

$imagen['url'] = 'imagenes/avatar3.png';

$usuario = App\Models\User::find(1);

$usuario->image()->create( $imagen );

return $usuario;


//05 crear varias imagenes para un producto utilizando el metodo createmany

$imagen = [];

$imagen[]['url'] = 'imagenes/avatar.png';
$imagen[]['url'] = 'imagenes/avatar2.png';
$imagen[]['url'] = 'imagenes/avatar3.png';
$imagen[]['url'] = 'imagenes/a.png';
$imagen[]['url'] = 'imagenes/a.png';
$imagen[]['url'] = 'imagenes/a.png';

$receta = App\Models\Recipe::find(2);

$receta->images()->createMany($imagen);

return $receta->images;



    //06 actualizar la imagen del usuario.

    $usuario = App\Models\User::find(1);

    $usuario->image->url='imagenes/avatar2.png';
    
    $usuario->push();

    return $usuario->image;



   //07 actualizar la imagen de los productos

    $receta = App\Models\Recipe::find(3);

    $receta->images[0]->url='imagenes/a.png';
    $receta->push();

    return $receta->images;

        //08 buscar el registro relacionado en la imagen

        $image = App\Models\Image::find(7);

        return $image->imageable;
    

 //09 delimitar los registros
 $receta = App\Models\Recipe::find(2);

 return $receta->images()->where('url','imagenes/a.png')->get();



 //10 ordenar registros que provienen de la relacion.

    $receta = App\Models\Recipe::find(2);

    return $receta->images()->where('url','imagenes/a.png')->orderBy('id','Desc')->get();

  //11 contar los registros relacionados
   
  $usuario = App\Models\User::withCount('image')->get();
  $usuario= $usuario->find(1);
  return $usuario->image_count;



  //12 contar los registros relacionados a los productos
   
  $recetas = App\Models\Recipe::withCount('images')->get();
  $recetas= $recetas->find(2);
  return $recetas->images_count;

     //13 contar los registros relacionados a los productos de otra forma
   
     $recetas = App\Models\Recipe::find(2);
     return $recetas->loadCount('images');



//14 lazy loading carga diferida

$receta = App\Models\Recipe::find(3);

$imagen = $receta->image;

$categoria = $receta->category;


//15 carga previa (eager loading() 

 $usuario = App\Models\User::with('image')->get();

 return $usuario;


//16 carga previa (eager loading() 
    
$receta = App\Models\Recipe::with('images')->get();

return $receta;


 //17 carga previa de multiples relaciones
 $receta = App\Models\Recipe::with('images','category')->get();

 return $receta;
 
     //18 carga previa de multiples relaciones de un producto especifico
     $receta = App\Models\Recipe::with('images','category')->find(3);

     return $receta;


   //19 delimitar los campos.
   $receta = App\Models\Recipe::with('images:id,imageable_id,url','category:id,nombre,slug')->find(3);

   return $receta;    



    //20 eliminar una image

    $recipe = App\Models\Recipe::find(2);
    $recipe->images[0]->delete();
    return $recipe;
    
 //21 eliminar todas las imagenes

 $recipe = App\Models\Recipe::find(2);
 $recipe->images()->delete();
 return $recipe;
