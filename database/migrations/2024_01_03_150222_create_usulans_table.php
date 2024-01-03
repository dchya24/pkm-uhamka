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
        Schema::create('usulan', function (Blueprint $table) {
            $table->id();
            $table->string("judul");
            $table->text("latar_belakang");
            $table->unsignedBigInteger("jenis_pkm_id");
            $table->string("anggaran");
            $table->string("tahun_pengajuan", 4);
            $table->unsignedBigInteger('ketua_kelompok_id');
            $table->text('tugas_ketua_kelompok')->nullable();
            $table->unsignedBigInteger('anggota_satu_id')->nullable();
            $table->text('tugas_anggota_satu')->nullable();
            $table->unsignedBigInteger('anggota_dua_id')->nullable();
            $table->text('tugas_anggota_dua')->nullable();
            $table->unsignedBigInteger('anggota_tiga_id');
            $table->text('tugas_anggota_tiga')->nullable()->nullable();
            $table->unsignedBigInteger('anggota_empat_id')->nullable();
            $table->text('tugas_anggota_empat')->nullable();

            $table->unsignedBigInteger("pembimbing_id")->nullable();

            // File
            $table->string("lembar_proposal")->nullable();
            $table->string("lembar_biodata_dospem")->nullable();
            $table->string("lembar_pengesahan")->nullable();

            $table->unsignedBigInteger("penilai_substansi_id")->nullable();
            $table->string("form_penilaian_substansi")->nullable();
            $table->enum("status_penilai_substansi", [
                "sedang dinilai", "mayor", "minor"
            ])->nullable();
            
            $table->unsignedBigInteger("penilai_administrasi_id")->nullable();
            $table->string("form_penilaian_administrasi")->nullable();
            $table->enum("status_penilai_administrasi", [
                "sedang dinilai", "mayor", "minor"
            ])->nullable();
            
            $table->unsignedBigInteger("penilai_peninjau_id")->nullable();
            $table->string("form_penilaian_peninjau")->nullable();
            $table->enum("status_penilai_peninjau", [
                "sedang dinilai", "mayor", "minor"
            ])->nullable();

            $table->unsignedBigInteger("wakil_rektor_id")->nullable();
            $table->enum("status_rekomendasi", [
                "internal", "belmawa"
            ]);


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usulan');
    }
};
