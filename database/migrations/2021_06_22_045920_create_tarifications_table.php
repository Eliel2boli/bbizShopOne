<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTarificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarifications', function (Blueprint $table) {
            $table->id();
            $table->double("prix");
            $table->foreignId("article_id")->constrained();
            $table->timestamps();

            $table->unique(["article_id"]);
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
        Schema::table('tarifications', function(Blueprint $table){
            $table->dropForeign(["duree_vente_id", "article_id"]);
        });
        Schema::dropIfExists('tarifications');
    }
}
