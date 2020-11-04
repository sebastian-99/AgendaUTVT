<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStatusAsistenciaIdToInvitados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('invitados', function (Blueprint $table) {
            $table->unsignedBigInteger('statusAsistencia_id')->nullable($value = true)->after('invitado_id');
            $table->foreign('statusAsistencia_id')->references('statusAsistencia_id')->on('statusasistencia');
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
