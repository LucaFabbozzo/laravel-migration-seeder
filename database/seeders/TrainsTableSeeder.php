<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $new_train = new Train();
            // $table->string('azienda', 15);
            // $table->string('stazione_di_partenza');
            // $table->time('orario_di_partenza', $precision = 0);
            // $table->time('orario_di_arrivo', $precision = 0);
            // $table->string('codice_treno', 10);
            // $table->tinyInteger('numero_carrozze')->unsigned();
            // $table->boolean('in_orario')->default(0);
            // $table->boolean('cancellato')->default(0);
        $new_train->azienda = "Trenord";
        $new_train->stazione_di_partenza = "Como Borghi";
        $new_train->orario_di_partenza = "08:30";
        $new_train->orario_di_arrivo = "09:00";
        $new_train->codice_treno = "345";
        $new_train->numero_carrozze = 8;
        $new_train->in_orario = 0;
        $new_train->cancellato = 1;

        $new_train->save();


    }
}
