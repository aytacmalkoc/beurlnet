<?php

namespace Database\Seeders;

use App\Models\Url;
use Illuminate\Database\Seeder;

class UrlSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Url::insert([
            [
                'url' => 'https://www.google.com',
                'short_url' => 'google',
                'public' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'url' => 'https://www.facebook.com',
                'short_url' => 'facebook',
                'public' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'url' => 'https://www.instagram.com',
                'short_url' => 'instagram',
                'public' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'url' => 'https://www.linkedin.com',
                'short_url' => 'linkedin',
                'public' => true,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
