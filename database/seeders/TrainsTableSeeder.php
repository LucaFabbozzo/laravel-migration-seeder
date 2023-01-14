<?php

namespace Database\Seeders;

use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
          for($i=0; $i < 10; $i++) {
             $new_train = new Train();
            //  $table->string('company', 15);
            //  $table->string('departure_station');
            //  $table->string('arrival_station');
            //  $table->time('departure_time', $precision = 0);
            //  $table->time('arrival_time', $precision = 0);
            //  $table->string('train_code', 10);
            //  $table->tinyInteger('number_of_wagon')->unsigned();
            //  $table->boolean('in_time')->default(0);
            //  $table->boolean('deleted')->default(0);
        $new_train->company = $faker->word();
        $new_train->departure_station = $faker->word();
        $new_train->arrival_station = $faker->word();
        $new_train->departure_time = $faker->time();
        $new_train->arrival_time = $faker->time();
        $new_train->train_code = $faker->bothify('#####');
        $new_train->number_of_wagon = $faker->numberBetween(0, 20);
        $new_train->in_time = $faker->numberBetween(0, 1);
        $new_train->deleted = $faker->numberBetween(0, 1);
        $new_train->save();
    }
    }
}
