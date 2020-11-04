<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserReprestanteIdToInvitados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('invitados', function (Blueprint $table) {
            $table->unsignedBigInteger('representanteUser_id')->nullable($value = true)->after('invitado_id');
            $table->foreign('representanteUser_id')->references('user_id')->on('users');
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
