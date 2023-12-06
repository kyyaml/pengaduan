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
        Schema::create('pengaduan', function (Blueprint $table) {
            $table->id('id_pengaduan');
            $table->dateTime('tgl_pengaduan');
            $table->char('nik',16);
            $table->string('judul');
            $table->text('isi_laporan');
            $table->unsignedBigInteger('id_kategori');
            $table->string('foto');
            $table->enum('status', ['0','proses','selesai' ]);
            
            $table->timestamps();

            $table->foreign('id_kategori')->references('id_kategori')->on('kategori');
            $table->foreign('nik')->references('nik')->on('masyarakat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengaduan');
    }
};
