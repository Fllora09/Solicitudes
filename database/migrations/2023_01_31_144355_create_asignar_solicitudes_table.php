<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignar_solicitudes', function (Blueprint $table) {
            $table->unsignedBigInteger('idSolitd');
                $table->foreign('idSolitd')
                ->references('idSolitd')
                ->on('solicitudes');

            $table->unsignedBigInteger('id');
                $table->foreign('id')
                ->references('id')
                ->on('users');

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
        Schema::dropIfExists('asignar_solicitudes');
    }
};
