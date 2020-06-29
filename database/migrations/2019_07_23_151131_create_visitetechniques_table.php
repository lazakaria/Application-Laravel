<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitetechniquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitetechniques', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numvisite');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->string('observation');
            $table->string('agenceviste');
            $table->integer('prixviste');



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
        Schema::dropIfExists('visitetechniques');
    }
}
