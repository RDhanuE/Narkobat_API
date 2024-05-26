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
        Schema::table('Users', function (Blueprint $table) {
            $table->string('roles')->default('user');
            $table->unsignedBigInteger('id_apotik')->nullable(true);
            $table->foreign('id_apotik')->references('id')->on('apotik')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('Users', function (Blueprint $table) {
            $table->dropColumn('roles');
            $table->dropColumn('id_apotik');
        });
    }
};
