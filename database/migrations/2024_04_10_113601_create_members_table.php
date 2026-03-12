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

        
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('role');
            $table->string('username');
            $table->string('fullname');
            $table->string('email');
            $table->string('contact');
            $table->string('password');
            $table->string('image');
            $table->string('email_token');
            $table->string('email_verified');
            $table->string('account_visibility');
            $table->string('date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
