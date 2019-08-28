<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type');
            $table->date('date');
            $table->timestamps();
        });

        Schema::create('joueur_partie', function (Blueprint $table) {

            $table->integer('joueur_id');
            $table->integer('partie_id');
            $table->boolean('accepter')->default(false);

            $table->primary(['joueur_id','partie_id']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parties');

        Schema::dropIfExists('joueur_partie');
    }
}
