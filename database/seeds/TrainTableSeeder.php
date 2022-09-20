<?php


use App\Models\Train;
use Illuminate\Database\Seeder;
use Faker\Generator;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i<10; $i++){
            $new_train = new Train ();

            $new_train->company = $faker->word();
            $new_train->departure_station =$faker->word();
            $new_train->arrival_station =$faker->word();
            $new_train->departure_time =$faker->time();
            $new_train->arrival_time =$faker->time();
            $new_train->carriage =$faker->randomDigit();
            $new_train->in_time =$faker->boolean();
            $new_train->deleted =$faker->boolean();

            $new_train->save();
        }
    }
}
