<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class Users_table_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('admin'),
        ]);


        $userWriter = $user->create([
                   'name'=> 'writer',
                   'email'=> 'write@example.com',     //NOTE: SLUG MUST BE LOWER-CASE!
                   'password'=> bcrypt('admin');
               ]);

        $userWriter->assignRole('writer');
    }
}
