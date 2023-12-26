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
        Schema::create('penilai', function (Blueprint $table) {
            $table->id();
            $table->string("username", 64)->unique();
            $table->string("nama");
            $table->string("password");
            $table->enum("jenis_penilai", [1, 2])
                ->comment("1 = Administrasi, 2 = Substansi");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penilai');
    }
};
