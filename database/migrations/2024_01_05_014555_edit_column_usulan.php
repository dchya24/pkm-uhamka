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
        Schema::table('usulan', function (Blueprint $table) {
            $table->enum('status_penilai_administrasi', [
                'not_submited', 'submited', 'waiting',  'done', 'rejected'
            ])->change();

            $table->renameColumn('status_penilai_administrasi', "status_penilaian_administrasi");

            $table->enum('status_penilai_peninjau', [
                'not_submited', 'submited', 'waiting',  'done', 'rejected'
            ])->change();

            $table->renameColumn('status_penilai_peninjau', "status_penilaian_peninjau");

            $table->renameColumn('penilai_peninjau_id', "peninjau_id");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('usulan', function (Blueprint $table) {
            //
        });
    }
};
