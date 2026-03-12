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
        Schema::create('gofund_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email');
            $table->string('contact');
            $table->string('password');
            $table->string('confirm_token');
            $table->string('date');
            $table->string('reference_id_url');
            $table->string('current_amount');
            $table->string('amount_check');
            $table->string('verified_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gofund_registrations');
    }
};
