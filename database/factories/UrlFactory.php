<?php

namespace Database\Factories;

use App\Models\Url;
use Hidehalo\Nanoid\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

class UrlFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Url::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $client = new Client();
        $nano = $client->generateId(8);

        return [
            'original' => $this->faker->url,
            'shortened' => $nano,
            'full_url' => \url($nano),
            'visible' => rand(0, 1)
        ];
    }
}
