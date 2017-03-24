<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class Roles_Table_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleWriter = Role::create(['name' => 'writer']);
        $roleAdmin = Role::create(['name' => 'admin']);
        $roleNormal = Role::create(['name' => 'normal']);


        $roleAdmin->givePermissionTo('edit articles');
        $roleAdmin->givePermissionTo('edit users');
        $roleWriter->givePermissionTo('edit articles');




        //$roleA = Role::create(['name' => 'guest']);


    }
}
