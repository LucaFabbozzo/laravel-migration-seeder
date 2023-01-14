<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
             $table->string('company', 15);
             $table->string('departure_station');
             $table->string('arrival_station');
             $table->time('departure_time', $precision = 0);
             $table->time('arrival_time', $precision = 0);
             $table->string('train_code', 10);
             $table->tinyInteger('number_of_wagon')->unsigned();
             $table->boolean('in_time')->default(0);
             $table->boolean('deleted')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};
