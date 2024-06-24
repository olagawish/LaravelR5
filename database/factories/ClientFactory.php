<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Client;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'clientName' => $this->faker->name,
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail, // Added () after unique() method
            'website' => $this->faker->url, // Changed website to url for generating URLs
            'city_id' => $this->faker->numberBetween(1, 20),
            'active' => $this->faker->boolean, // Changed no to boolean for generating true/false values
            'image' => $this->faker->imageUrl(), // Added () after imageUrl method
            'address' => $this->faker->address, // Define the 'Addres' field here
        ];
    }
}
