<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'name' => 'Diego',
            'email' => 'info@correo.com',
            'password' => bcrypt('secret'),
        ]);


        $this->call(UsersTableSeeder::class);
        $this->call(TareasTableSeeder::class);
        //$this->call(UsersTableSeeder::class);

    }

}
