<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengaduanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengaduan', function (Blueprint $table) {
            $table->id();
            $table->string('nam_pelapor', 25);
            $table->string('email_pelapor')->unique();
            $table->string('phone_pelapor');
            $table->string('alama_pelapor', 150);
            $table->string('name_pelaku', 25);
            $table->string('telp_pelaku');
            $table->string('alamat_pelaku', 150);
            $table->string('bukti');
            $table->enum('jenis_narkoba',['Sabu', 'Ganja', 'Ekstasi', 'Heroin', 'Obat-Obatan', 'Lainnya']);
            $table->enum('peran_pelaku', ['Pengguna', 'Bandar','Pengedar','Kurir', 'Lainnya']);
            $table->string('profesi_pelaku');
            $table->string('alamat_kejadian');
            $table->date('tanggal_kejadian');
            $table->time('waktu_kejadian');
            $table->string('isi_pengaduan');
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
        Schema::dropIfExists('pengaduan');
    }
}
