<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Course::factory()->count(10)->create();
        Course::factory(5)->create();
        //Student::factory()->count(10)->create();
        Student::factory(10)->create()->each(function ($student) {
            $courses = Course::inRandomOrder()->take(rand())->pluck('id');
            $student->courses()->attach($courses);
        });
        
    }
}
