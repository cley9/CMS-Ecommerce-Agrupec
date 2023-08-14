<?php

namespace Database\Seeders;

// use App\Models\producto;
// use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();
        // para incluir el seder new
      // $this->call(UserSeeder::class);
      // $this->call(slayderSeeder::class);
      // $this->call(productoSeeder::class);
      $this->call([
        UserSeeder::class,
        slayderSeeder::class,
        productoSeeder::class,
        listCategorySeeder::class,
      ]);
    }
}
