<?php

namespace Database\Seeders;

use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            $newTrain = new Train();
            $newTrain->agencies = $faker->company();
            $newTrain->stations_departures = $faker->city();
            $newTrain->stations_arrivals = $faker->city();
            $newTrain->times_departures = $faker->time();
            $newTrain->times_arrivals = $faker->time();
            $newTrain->trains_code = $faker->randomNumber(5, true);
            $newTrain->numbers_carriages = $faker->randomNumber(2, true);
            $newTrain->in_time = $faker->boolean();
            $newTrain->cancelled = $faker->boolean();
            $newTrain->save();
        }
    }
}
