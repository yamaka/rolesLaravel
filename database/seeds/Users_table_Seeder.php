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

        $writer = new User();

      $userWriter = $writer->create([
                  'name'=> 'writer',
                   'email'=> 'writer@example.com',     //NOTE: SLUG MUST BE LOWER-CASE!
                   'password'=> bcrypt('writer'),
               ]);

        $admin= new User();

        $userAdmin= $admin->create([
          'name'=>'admin',
          'email'=>'admin@example.com',
          'password' => bcrypt('admin'),

        ]);

        $normal= new User();


        $userNormal= $normal->create([
          'name'=>'normal',
          'email'=>'normal@example.com',
          'password' => bcrypt('normal'),
        ]);

        $userWriter->assignRole('writer');
        $userAdmin->assignRole('admin','writer');

        $userNormal->assignRole('normal');
    }
}
