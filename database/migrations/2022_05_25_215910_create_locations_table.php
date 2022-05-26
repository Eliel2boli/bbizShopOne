<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->dateTime('dateDebut');
            $table->dateTime('dateFin');
            $table->foreignId('statut_location_id');
            $table->foreignId('user_id');
            $table->foreignId('client_id');
        });

        Schema::enableForeignKeyConstraints();
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('locations',function(Blueprint $table){
            $table->dropForeign('statut_location_id');
            $table->dropForeign('user_id');
            $table->dropForeign('client_id');
        });
        Schema::dropIfExists('ventes');
    }
}
