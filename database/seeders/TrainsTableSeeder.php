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
            // $table->id();
            // // Azienda
            // // Stazione di partenza
            // // Stazione di arrivo
            // // Orario di partenza
            // // Orario di arrivo
            // // Codice Treno
            // // Numero Carrozze
            // // In orario
            // // Cancellato
            // $table->string('azienda', 15);
            // $table->string('stazione_di_partenza');
            // $table->dateTime('orario_di_partenza', $precision = 0);
            // $table->dateTime('orario_di_arrivo', $precision = 0);
            // $table->string('codice_treno', 10);
            // $table->tinyInteger('numero_carrozze')->unsigned();
            // $table->boolean('in_orario');
            // $table->boolean('cancellato');
            // $table->timestamps();
    }
}
