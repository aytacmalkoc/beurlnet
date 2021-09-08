<?php

namespace Database\Seeders;

use App\Models\Count;
use Illuminate\Database\Seeder;

class CountsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Count::create([
            'created' => 0,
            'deleted' => 0,
            'visited' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
