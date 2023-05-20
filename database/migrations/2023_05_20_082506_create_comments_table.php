<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->mediumText('content');
            $table->timestamps();

            // Méthode 1 :
            //$table->unsignedBigInteger('post_id');
            //$table->foreign('post_id')->references('id')->on('posts');
            // $table->foreign('nom_cle_etrangere')->references('nom_champ_id')->on('table_du_champ_id');

            // Méthode 2 :
            $table->foreignId('post_id')->contrained(); // Utilisation avec colonne qui s'appelle bien id

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
