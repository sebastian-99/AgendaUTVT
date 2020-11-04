<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEventoIdToInvitados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('invitados', function (Blueprint $table) {
            $table->unsignedBigInteger('evento_id')->after('invitado_id');
            $table->foreign('evento_id')->references('evento_id')->on('eventos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('invitados', function (Blueprint $table) {
            //
        });
    }
}
