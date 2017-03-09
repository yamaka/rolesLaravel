<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
class Permissions_Table_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = Permission::create(['name' => 'edit articles']);
        //$permission = Permission::create(['name' => 'edit users']);
    }
}
