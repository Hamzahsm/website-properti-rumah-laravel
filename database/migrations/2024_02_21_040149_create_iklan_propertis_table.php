<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('iklan_propertis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable(); 
            $table->foreignId('agent_id')->nullable();
            $table->string('judul_properti');
            $table->string('slug')->unique();
            $table->string('nomor_telepon_properti')->unique(); 
            $table->string('lokasi_properti');
            $table->string('provinsi_properti');
            $table->string('luas_bangunan_properti');
            $table->string('luas_tanah_properti'); 
            $table->string('kamar_tidur_properti');
            $table->string('kamar_mandi_properti');
            $table->string('harga_start_properti');
            $table->string('harga_end_properti');
            $table->text('deskripsi_properti');
            $table->text('featured_image');
            $table->text('detail_foto_properti')->nullable();
            $table->text('foto_perusahaan_properti')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('iklan_propertis');
    }
};
