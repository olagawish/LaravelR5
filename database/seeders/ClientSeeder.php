<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return 
     */
    public function run(): void
    {
        ClientSeeder::factory()->count(10)->create();
    }
}
