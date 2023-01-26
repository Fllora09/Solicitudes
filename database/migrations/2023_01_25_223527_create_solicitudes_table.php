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
        Schema::create('solicitudes', function (Blueprint $table) {

                $table->id('idSolitd');
                $table->string('titulo');
                $table->text('detailSoli');

                $table->unsignedBigInteger('status')->default('1');
                $table->foreign('status')->references('idStatus')->on('statuses');

                $table->unsignedBigInteger('user');
                $table->foreign('user')->references('id')->on('users');

                $table->unsignedBigInteger('dependencia');
                $table->foreign('dependencia')->references('IdDp')->on('dependencias');

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
        Schema::dropIfExists('solicitudes');
    }
};
