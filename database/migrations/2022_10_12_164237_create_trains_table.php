<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
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
            $table->char('azienda', 50);
            $table->char('stazione_di_partenza', 20);
            $table->char('stazione_di_arrivo', 20);
            $table->dateTime('orario_di_partenza', 10);
            $table->dateTime('orario_di_arrivo', 12);
            $table->char('codice_treno', 50);
            $table->mediumInteger('numero_carrozze')->unsigned();  
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
}
