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
       'name' => 'List role',
       'slug' => 'role.index',
       'description' => 'A user can list role',
   ]);

   $permission_all[] = $permission->id;
           
   $permission = Permission::create([
       'name' => 'Show role',
       'slug' => 'role.show',
       'description' => 'A user can see role',
   ]);

   $permission_all[] = $permission->id;
           
   $permission = Permission::create([
       'name' => 'Create role',
       'slug' => 'role.create',
       'description' => 'A user can create role',
   ]);

   $permission_all[] = $permission->id;
           
   $permission = Permission::create([
       'name' => 'Edit role',
       'slug' => 'role.edit',
       'description' => 'A user can edit role',
   ]);

   $permission_all[] = $permission->id;
           
   $permission = Permission::create([
       'name' => 'Destroy role',
       'slug' => 'role.destroy',
       'description' => 'A user can destroy role',
   ]);

   $permission_all[] = $permission->id;

   


   //permission user
   $permission = Permission::create([
       'name' => 'List user',
       'slug' => 'user.index',
       'description' => 'A user can list user',
   ]);
   
   $permission_all[] = $permission->id;
   
   $permission = Permission::create([
       'name' => 'Show user',
       'slug' => 'user.show',
       'description' => 'A user can see user',
   ]);        
   
   $permission_all[] = $permission->id;
   
   $permission = Permission::create([
       'name' => 'Edit user',
       'slug' => 'user.edit',
       'description' => 'A user can edit user',
   ]);
   
   $permission_all[] = $permission->id;
   
   $permission = Permission::create([
       'name' => 'Destroy user',
       'slug' => 'user.destroy',
       'description' => 'A user can destroy user',
   ]);
   
   $permission_all[] = $permission->id;


   //new
   $permission = Permission::create([
       'name' => 'Show own user',
       'slug' => 'userown.show',
       'description' => 'A user can see own user',
   ]);        
   
   $permission_all[] = $permission->id;
   
   $permission = Permission::create([
       'name' => 'Edit own user',
       'slug' => 'userown.edit',
       'description' => 'A user can edit own user',
   ]);
   
   
//    $permission = Permission::create([
//        'name' => 'Create user',
//        'slug' => 'user.create',
//        'description' => 'A user can create user',
//    ]);
   
//    $permission_all[] = $permission->id;
   
   
//    //table permission_role
//    $roladmin->permissions()->sync( $permission_all);

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


   
}
}