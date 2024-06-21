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
        Schema::create('divisis', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('jabatan_id');
        $table->string('nama_divisi');
        $table->string('ruang');
        $table->string('gedung');
        $table->integer('nomor_ruang');

        $table->foreign('jabatan_id')->references('id')->on('jabatans')->onDelete('cascade');

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
        Schema::dropIfExists('divisis');
    }
};
