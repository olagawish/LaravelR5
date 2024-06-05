<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ClientSeeder::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'clientName' => $this->faker->clientName,
            'phone' => $this->faker->phone,
            'email' => $this->faker->unique()->safeEmail,
            'website' => $this->faker->website,
            'city' => $this->faker->city,
            'active' => $this->faker->active,
            'image' => $this->faker->image,
            'editClient' => $this->faker->editClient,
            'showClient' => $this->faker->showClient,
            'delClient' => $this->faker->delClient,
            
        ];
    }
}
