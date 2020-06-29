<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnAssuranceId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('voitures') ,function (Blueprint $table) {
            $table->integer('assurance_id')->unsigned()->after('id');
            $table->foreign('assurance_id')->refrences('id')->on('voitures');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('voitures') ,function (Blueprint $table) {
            $table->dropForeign(['assurance_id']);
            $table->dropColumn('assurance_id');
        });
    }
}
