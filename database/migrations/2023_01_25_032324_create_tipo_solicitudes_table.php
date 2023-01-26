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
        Schema::create('tipo_solicitudes', function (Blueprint $table) {
            $table->id('idTpSolitd');
            $table->string('tpSolitdName');
            $table->unsignedBigInteger('idTrbMiento');

            $table->foreign('idTrbMiento')
                  ->references('idTrbMiento')
                  ->on('tipo_trb_mntmiento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipo_solicitudes');
    }
};
