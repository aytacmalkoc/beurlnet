<?php

namespace Database\Seeders;

use App\Models\Url;
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
        Url::factory()->count(20)->create();

        $this->call([
            CountsSeeder::class,
        ]);
    }
}
