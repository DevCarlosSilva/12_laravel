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
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('name'); // Remove a coluna 'name'
            $table->string('first_name'); // Adiciona a coluna 'first_name'
            $table->string('last_name'); // Adiciona a coluna 'last_name'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['first_name', 'last_name']); // Remove as colunas criadas
            $table->string('name'); // Recria a coluna 'name' caso precise reverter
        });
    }
};
