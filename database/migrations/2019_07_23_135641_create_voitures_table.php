<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVoituresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voitures', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('modele')->unsigned();
            /**$table->integer('couleur');*/
            $table->integer ('matricule');
            $table->string('carburant');
            $table->string('type');
            $table->string('assurances');
            $table->string('numassurances');
           /* $table->string('debutassurance');
            $table->string('finassurance');*/

            $table->string('marque');
            $table->integer('kilometrage');
            $table->integer('nombreplaces');
            $table->integer('puissance');
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
        Schema::dropIfExists('voitures');
    }
}
