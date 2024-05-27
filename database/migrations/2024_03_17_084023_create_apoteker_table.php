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
        Schema::create('apoteker', function (Blueprint $table) {
            $table->id();
            $table->string('nama_apoteker');
            $table->string('pendidikan_apoteker');
            $table->string('alamat_apoteker');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apoteker');
    }
};
