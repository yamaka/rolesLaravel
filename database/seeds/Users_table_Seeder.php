<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;

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

         $user = new User();
        $userWriter = $user->create([
                   'name'=> 'writer',
                   'email'=> 'writer@example.com',     //NOTE: SLUG MUST BE LOWER-CASE!
                   'password'=> bcrypt('writer'),
               ]);

        $userWriter->assignRole('writer');
    }
}
