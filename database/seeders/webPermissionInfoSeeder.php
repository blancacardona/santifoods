<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\WebPermission\Models\Role;
use App\Models\WebPermission\Models\Permission;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class webPermissionInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        
       //truncate tables
       DB::statement("SET foreign_key_checks=0");
       DB::table('role_user')->truncate();
       DB::table('permission_role')->truncate();
       Permission::truncate();
       Role::truncate();
   DB::statement("SET foreign_key_checks=1");



   //user admin
   $useradmin= User::where('email','admin@admin.com')->first();
   if ($useradmin) {
       $useradmin->delete();
   }
   $useradmin= User::create([
       'name'      => 'admin',
       'email'     => 'admin@admin.com',
       'password'  => Hash::make('admin')    
   ]);

   //rol admin
   $roladmin=Role::create([
       'name' => 'Admin',
       'slug' => 'admin',
       'description' => 'Administrator',
       'full-access' => 'yes'

   ]);

    //rol Registered User
    $roluser=Role::create([
       'name' => 'Registered User',
       'slug' => 'registereduser',
       'description' => 'Registered User',
       'full-access' => 'no'

   ]);
   
   //table role_user
   $useradmin->roles()->sync([ $roladmin->id ]);
 
   
   //permission
   $permission_all = [];

   
   //permission role
   $permission = Permission::create([
       'name' => 'Listar rol',
       'slug' => 'role.index',
       'description' => 'El usuario puede listar un rol',
   ]);

   $permission_all[] = $permission->id;
           
   $permission = Permission::create([
       'name' => 'Ver rol',
       'slug' => 'role.show',
       'description' => 'El usuario puede ver un rol',
   ]);

   $permission_all[] = $permission->id;
           
   $permission = Permission::create([
       'name' => 'Crear rol',
       'slug' => 'role.create',
       'description' => 'El usuario puede crear un rol',
   ]);

   $permission_all[] = $permission->id;
           
   $permission = Permission::create([
       'name' => 'Editar rol',
       'slug' => 'role.edit',
       'description' => 'El usuario puede editar un role',
   ]);

   $permission_all[] = $permission->id;
           
   $permission = Permission::create([
       'name' => 'Eliminar rol',
       'slug' => 'role.destroy',
       'description' => 'El usuario puede eliminar un rol',
   ]);

   $permission_all[] = $permission->id;

   


   //permission user
   $permission = Permission::create([
       'name' => 'Listar usuario',
       'slug' => 'user.index',
       'description' => 'El usuario puede listar un usuario',
   ]);
   
   $permission_all[] = $permission->id;
   
   $permission = Permission::create([
       'name' => 'Ver usuario',
       'slug' => 'user.show',
       'description' => 'El usuario puede ver un usuario',
   ]);        
   
   $permission_all[] = $permission->id;
   
   $permission = Permission::create([
       'name' => 'Editar usuario',
       'slug' => 'user.edit',
       'description' => 'El usuario puede editar un usuario',
   ]);
   
   $permission_all[] = $permission->id;
   
   $permission = Permission::create([
       'name' => 'Eliminar usuario',
       'slug' => 'user.destroy',
       'description' => 'El usuario puede eliminar un usuario',
   ]);
   
   $permission_all[] = $permission->id;


   //new
   $permission = Permission::create([
       'name' => 'Ver propio usuario',
       'slug' => 'userown.show',
       'description' => 'El usuario puede ver su propio usuario',
   ]);        
   
   $permission_all[] = $permission->id;
   
   $permission = Permission::create([
       'name' => 'Editar propio usuario',
       'slug' => 'userown.edit',
       'description' => 'El usuario puede editar su propio usuario',
   ]);
   

   //permission category
   $permission = Permission::create([
       'name' => 'Listar categoria',
       'slug' => 'category.index',
       'description' => 'El usuario puede listar una categoria',
   ]);

   $permission_all[] = $permission->id;
           
   $permission = Permission::create([
       'name' => 'Ver categoria',
       'slug' => 'category.show',
       'description' => 'El usuario puede ver una categoria',
   ]);

   $permission_all[] = $permission->id;
           
   $permission = Permission::create([
       'name' => 'Crear categoria',
       'slug' => 'category.create',
       'description' => 'El usuario puede crear una categoria',
   ]);

   $permission_all[] = $permission->id;
           
   $permission = Permission::create([
       'name' => 'Editar categoria',
       'slug' => 'category.edit',
       'description' => 'El usuario puede editar una categoria',
   ]);

   $permission_all[] = $permission->id;
           
   $permission = Permission::create([
       'name' => 'Eliminar categoria',
       'slug' => 'category.destroy',
       'description' => 'El usuario puede eliminar una categoria',
   ]);

   $permission_all[] = $permission->id;

   //permission recipe
   $permission = Permission::create([
       'name' => 'Listar receta',
       'slug' => 'recipe.index',
       'description' => 'El usuario puede listar una receta',
   ]);

   $permission_all[] = $permission->id;
           
   $permission = Permission::create([
       'name' => 'Ver receta',
       'slug' => 'recipe.show',
       'description' => 'El usuario puede ver una receta',
   ]);

   $permission_all[] = $permission->id;
           
   $permission = Permission::create([
       'name' => 'Crear receta',
       'slug' => 'recipe.create',
       'description' => 'El usuario puede crear una receta',
   ]);

   $permission_all[] = $permission->id;
           
   $permission = Permission::create([
       'name' => 'Editar receta',
       'slug' => 'recipe.edit',
       'description' => 'El usuario puede editar una receta',
   ]);

   $permission_all[] = $permission->id;
           
   $permission = Permission::create([
       'name' => 'Eliminar receta',
       'slug' => 'recipe.destroy',
       'description' => 'El usuario puede eliminar una receta',
   ]);

   $permission_all[] = $permission->id;



    //permission blog
    $permission = Permission::create([
        'name' => 'Listar Blog',
        'slug' => 'blog.index',
        'description' => 'El usuario puede listar un blog',
    ]);
 
    $permission_all[] = $permission->id;
            
    $permission = Permission::create([
        'name' => 'Ver Blog',
        'slug' => 'blog.show',
        'description' => 'El usuario puede ver un blog',
    ]);
 
    $permission_all[] = $permission->id;
            
    $permission = Permission::create([
        'name' => 'Crear Blog',
        'slug' => 'blog.create',
        'description' => 'El usuario puede crear un blog',
    ]);
 
    $permission_all[] = $permission->id;
            
    $permission = Permission::create([
        'name' => 'Editar Blog',
        'slug' => 'blog.edit',
        'description' => 'El usuario puede editar un blog',
    ]);
 
    $permission_all[] = $permission->id;
            
    $permission = Permission::create([
        'name' => 'Eliminar Blog',
        'slug' => 'blog.destroy',
        'description' => 'El usuario puede eliminar un blog',
    ]);
 
    $permission_all[] = $permission->id;


   
}
}