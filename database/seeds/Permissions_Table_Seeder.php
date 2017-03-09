<?php
use Illuminate\Database\Seeder;
use Kodeine\Acl\Models\Eloquent\Role;
use Kodeine\Acl\Models\Permission;


 class Permissions_Table_Seeder extends Seeder
 {
     public function run()
     {
         $permission = new Permission();

         $permission->create([
             'name' => 'mywork',  //NOTE: THIS IS PART OF THE SLUG, SO IT MUST BE LOWER-CASE!
             'slug' => [
                 'create'    => true,
                 'view'      => true,
                 'update'    => true,
                 'delete'    => true
             ],
             'description'   => 'manage mywork permissions'
         ]);


     }
 }
