<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(Roles_Table_Seeder::class);
         $this->call(Users_table_Seeder::class);
         $this->call(Permissions_Table_Seeder::class);
    }
}
