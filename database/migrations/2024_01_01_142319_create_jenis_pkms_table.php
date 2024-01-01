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
        Schema::create('jenis_pkm', function (Blueprint $table) {
            $table->id();
            $table->string("singkatan");
            $table->string("nama_skema");
            $table->string("form_substansi")->nullable();
            $table->string("form_administrasi")->nullable();
            $table->string("form_peninjau")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jenis_pkm');
    }
};
