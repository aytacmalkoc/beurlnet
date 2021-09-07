<?php

namespace Database\Seeders;

use Database\Seeders\UrlSeeder;
use Illuminate\Database\Seeder;
use Database\Seeders\CountsSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // örnek veriler
        
        $this->call([
            CountsSeeder::class, 
            UrlSeeder::class
        ]);
    }
}
