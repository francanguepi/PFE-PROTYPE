<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsvaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientsva', function (Blueprint $table) {
            $table->bigIncrements('IDCLIENT');
            $table->string('CODECLIENT');
            $table->string('NOMCLIENT');
            $table->string('CONTACT');
            $table->string('NIVEAUCLIENT');
            $table->string('AUTREINFO');
            $table->string('login_client');
            $table->string('mdp_client');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientsva');
    }
}
