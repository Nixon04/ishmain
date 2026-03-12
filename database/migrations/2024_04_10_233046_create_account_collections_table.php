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
        Schema::create('account_collections', function (Blueprint $table) {
            $table->id();
            $table->string('reference_id');
            $table->string('username');
            $table->string('amount'); 
            $table->string('reasons');
            $table->string('payment_type');
            $table->string('email_address');
            $table->string('contact_address');
            $table->string('region_code');
            $table->string('country');
            $table->string('status');
            $table->string('date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('account_collections');
    }
};
