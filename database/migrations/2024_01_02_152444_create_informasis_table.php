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
        Schema::create('informasi', function (Blueprint $table) {
            $table->id();
            $table->string("judul");
            $table->text("description");
            $table->string("file");
            $table->boolean("untuk_mahasiswa");
            $table->boolean("untuk_penguji");
            $table->boolean("untuk_peninjau");
            $table->boolean("untuk_warek");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informasi');
    }
};
