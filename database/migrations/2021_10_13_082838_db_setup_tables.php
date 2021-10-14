<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DbSetupTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Membuat table fakultas
        Schema::create('tb_fakultas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique();
            $table->string('display_name')->nullable();
            $table->string('description')->nullable();
            $table->timestamps();
        });

        // Membuat table Program Studi + ForeIgnkey ke Fakultas
        Schema::create('tb_prodi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique();
            $table->string('display_name')->nullable();
            $table->string('description')->nullable();
            $table->unsignedBigInteger('fakultas_id');
            $table->timestamps();

            $table->foreign('fakultas_id')->references('id')->on('tb_fakultas')
                ->onUpdate('cascade')->onDelete('cascade');
        });

        // Membuat table Pembimbing Akademik
        Schema::create('tb_pa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->timestamps();
        });

        // Membuat table Angkatan
        Schema::create('tb_angkatan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tahun');
            $table->timestamps();
        });

        // Membuat table Jenis Kegiatan
        Schema::create('tb_jenis_kegiatan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('ref_point', 191);
            $table->timestamps();
        });

        // Membuat table Kegiatan
        Schema::create('tb_kegiatan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('prodi_id');
            $table->unsignedBigInteger('jenis_kegiatan_id');
            $table->string('nama_kegiatan');
            $table->string('penyelenggara');
            $table->integer('tahun');
            $table->timestamps();

            $table->foreign('prodi_id')->references('id')->on('tb_prodi')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('jenis_kegiatan_id')->references('id')->on('tb_jenis_kegiatan')
                ->onUpdate('cascade')->onDelete('cascade');
        });

        // Membuat table Mahasiswa
        Schema::create('tb_mahasiswa', function (Blueprint $table) {
            $table->integer('id')->unique();
            $table->unsignedBigInteger('prodi_id');
            $table->unsignedBigInteger('pa_id');
            $table->unsignedBigInteger('angkatan_id');
            $table->unsignedBigInteger('user_id');
            $table->string('nama');
            $table->timestamps();

            $table->foreign('prodi_id')->references('id')->on('tb_prodi')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('pa_id')->references('id')->on('tb_pa')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('angkatan_id')->references('id')->on('tb_angkatan')
                ->onUpdate('cascade')->onDelete('cascade');
        });

        // Membuat table Bukti
        Schema::create('tb_bukti', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('mahasiswa_id');
            $table->string('namafile');
            $table->timestamps();

            $table->foreign('mahasiswa_id')->references('id')->on('tb_mahasiswa')
                ->onUpdate('cascade')->onDelete('cascade');
        });

        // Membuat table Portofolio
        Schema::create('tb_portofolio', function (Blueprint $table) {
            $table->integer('mahasiswa_id');
            $table->unsignedBigInteger('kegiatan_id');
            $table->integer('valid_point');
            $table->boolean('status');
            $table->timestamps();

            $table->foreign('mahasiswa_id')->references('id')->on('tb_mahasiswa')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->primary(['mahasiswa_id', 'kegiatan_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_fakultas');
        Schema::dropIfExists('tb_prodi');
        Schema::dropIfExists('tb_pa');
        Schema::dropIfExists('tb_angkatan');
        Schema::dropIfExists('tb_jenis_kegiatan');
        Schema::dropIfExists('tb_kegiatan');
        Schema::dropIfExists('tb_mahasiswa');
        Schema::dropIfExists('tb_bukti');
        Schema::dropIfExists('tb_portofolio');
    }
}
