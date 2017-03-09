<?php

use Illuminate\Database\Seeder;
 use Kodeine\Acl\Models\Eloquent\Role;
 use Kodeine\Acl\Models\Permission;

 class Roles_Table_Seeder extends Seeder
 {
     public function run()
     {
         $role = new Role();

         $roleAdmin = $role->create([
             'name'=> 'Admin',
             'slug'=> 'admin',     //NOTE: SLUG MUST BE LOWER-CASE!
             'description'=> 'Manage Administration privileges'
         ]);

         //Assign permissions to role (adding permissions is covered in the next section)
         $roleAdmin->assignPermission('mywork');
         //NOTE: You can assign multiple permissions to a role.

         //OR you can assign all permissions to a role
         $roleAdmin->assignPermission(Permission::all());
     }
 }
