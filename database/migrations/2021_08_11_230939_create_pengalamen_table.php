<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengalamenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengalaman', function (Blueprint $table) {
            $table->id();
            // $table->bigInteger('id_datadiris');
            $table->text('deksripsi');
            $table->string('nama_instansi');
            $table->string('kota_instansi');
            $table->date('mulai_belajar');
            $table->date('selesai_belajar');
            $table->string('hobi');
            $table->string('hobi2')->nullable();
            $table->string('hobi3')->nullable();
            $table->string('hobi4')->nullable();
            $table->string('skill');
            $table->integer('skill_persen');
            // $table->date('mulai_org');
            // $table->date('selesai_org');
            // $table->string('prestasi');
            // $table->date('bulantahun');
            $table->string('jabatan');
            $table->string('perusahaan');
            $table->date('mulai_kerja');
            $table->date('selesai_kerja');
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
        Schema::dropIfExists('pengalaman');
    }
}
