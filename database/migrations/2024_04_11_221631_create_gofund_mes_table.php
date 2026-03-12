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
        Schema::create('gofund_mes', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('area_of_fundraising');
            $table->string('country');
            $table->string('reason_of_fundraising');
            $table->string('amount');
            $table->string('date');
            $table->string('subject_means');
            $table->string('status');
            $table->string('relations');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gofund_mes');
    }
};
