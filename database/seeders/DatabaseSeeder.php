<?php

namespace Database\Seeders;

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
        $this->call(PostsTableSeeder::class);
        $this->call(barangsTableSeeder::class);
        $this->call(pesanansTableSeeder::class);
        $this->call(pembelianTableSeeder::class);
        $this->call(suplierTableSeeder::class);
        $this->call(pembeliTableSeeder::class);
    }
}
