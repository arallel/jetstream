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
        Schema::create('laporans', function (Blueprint $table) {
            $table->id();
            $table->string('spedometersblm');
            $table->string('spedometersudah')->nullable();
            $table->string('keterangan')->nullable();
            $table->string('tglberangkat')->nullable();
            $table->string('tglkembali')->nullable();
            $table->string('totalkm')->nullable();
            $table->string('liter')->nullable();
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
        Schema::dropIfExists('laporans');
    }
};
