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
            // $table->string('azienda', 15);
            // $table->string('stazione_di_partenza');
            // $table->time('orario_di_partenza', $precision = 0);
            // $table->time('orario_di_arrivo', $precision = 0);
            // $table->string('codice_treno', 10);
            // $table->tinyInteger('numero_carrozze')->unsigned();
            // $table->boolean('in_orario')->default(0);
            // $table->boolean('cancellato')->default(0);
        $new_train->azienda = $faker->word();
        $new_train->stazione_di_partenza = $faker->word();
        $new_train->stazione_di_arrivo = $faker->word();
        $new_train->orario_di_partenza = $faker->time();
        $new_train->orario_di_arrivo = $faker->time();
        $new_train->codice_treno = $faker->numberBetween(100, 1000);
        $new_train->numero_carrozze = $faker->numberBetween(0, 20);
        $new_train->in_orario = $faker->numberBetween(0, 1);
        $new_train->cancellato = $faker->numberBetween(0, 1);
        $new_train->save();
    }
    }
}
