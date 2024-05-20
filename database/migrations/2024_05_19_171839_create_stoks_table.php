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
        Schema::create('stok', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("id_obat");
            $table->unsignedBigInteger("id_apotik");
            $table->foreign("id_obat")->references("id")->on("obat")->onDelete('cascade');
            $table->foreign("id_apotik")->references("id")->on("apotik")->onDelete('cascade');
            $table->integer("stok");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stok');
    }
};
