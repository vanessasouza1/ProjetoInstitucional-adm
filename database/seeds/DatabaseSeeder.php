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
       $this->call([
           DepartamentoTableSeeder::class,
           MembroTableSeeder::class,
           EventoTableSeeder::class,
           UsersTableSeeder::class,
           ContatoTableSeeder::class
        ]);
    }
}
