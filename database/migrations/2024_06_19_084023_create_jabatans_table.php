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
        Schema::create('jabatans', function (Blueprint $table) {
        $table->id();
        $table->timestamps();
        $table->string('nama_karyawan');
        $table->string('jabatan');
        $table->string('alamat');
        $table->integer('umur');
        $table->string('status');
        $table->bigInteger('nohp');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jabatans');
    }
};
