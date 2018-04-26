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
        // $this->call(UsersTableSeeder::class);
     
        //User Table Seeding
        factory(App\User::class, 5)->create();

        //Create a seeder for the product table
        factory(App\Model\Product::class, 50)->create();

        //Create a seeder for the review table
        factory(App\Model\Review::class, 300)->create();

    }
}
