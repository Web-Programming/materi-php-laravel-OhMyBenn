<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        // Adding a new column 'level' to the 'users' table with default value 'user'
    Schema::table('users', function (Blueprint $table) {
        $table->enum('level', ['admin', 'user', 'mahasiswa', 'dosen'])->default('user');
    });
    }

 
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn("level");
        });
    }
};
// This migration adds a 'level' column to the 'users' table, which can be used to define user roles such as 'admin', 'user', etc.