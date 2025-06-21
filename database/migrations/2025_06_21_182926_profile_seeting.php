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
        schema::table('users', function (Blueprint $table) {
            $table->string('usename')->unique()->after('id');
            $table->string('profile_image')->nullable()->after('email_verified_at');
            $table->text('bio')->nullable()->after('profile_image');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    
    }
};
