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
            $table->text('lembar_biodata_kelompok')->nullable()
                ->after('tugas_anggota_empat');
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
