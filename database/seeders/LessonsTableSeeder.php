<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Lesson;

class LessonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker\Factory::create();


        $limit = 33;


        for ($i = 0; $i < $limit; $i++) {
            $lesson = Lesson::create([
                //,

                'name' => $faker->name,

                'price' => $faker->price,

            ]);

        }

    }

}