<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PhpParser\Node\NullableType;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('usulan', function (Blueprint $table) {
            $table->text('komentar_ke_mahasiswa')->nullable()
                ->after('status_rekomendasi');
            $table->text('komentar_ke_warek')->nullable()
                ->after('status_rekomendasi');
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
