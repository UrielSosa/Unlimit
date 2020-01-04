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
        // $this->call(UsersTableSeeder::class);
        factory(\App\Category::class,10)->create();
        factory(\App\User::class,5)->create();
        factory(\App\Producto::class,10)->create();
        
    }
}
