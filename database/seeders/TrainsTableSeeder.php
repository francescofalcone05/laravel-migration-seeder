<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            $newTrain = new Train();
            $newTrain->name = $faker->company();
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_time = $faker->time();
            $newTrain->arrival_time = $faker->time();
            $newTrain->train_code = $faker->ean8();
            $newTrain->cub_number = $faker->numberBetween(9, 12);
            $newTrain->on_time = $faker->numberBetween(0, 1);
            $newTrain->canceled = $faker->numberBetween(0, 1);
            $newTrain->save();
        }
    }
}
