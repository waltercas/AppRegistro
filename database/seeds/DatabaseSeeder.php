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
		DB::statement("SET foreign_key_checks = 0");// forzar la integriddad referencial

	    DB::table('users')->truncate();
		DB::table('categories')->truncate();
		DB::table('movements')->truncate();


        factory(App\User::class,20)->create();
      	factory(App\Category::class,40)->create();
        factory(App\Movement::class,100)->create();
    }
}
