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
        Schema::create('fund_raising_members', function (Blueprint $table) {
            $table->id();
            $table->string('type_of_partnership');
            $table->string('username');
            $table->string('email_address');
            $table->string('contact');
            $table->string('nature_of_collaboration');        
            $table->string('organization_name');
            $table->string('organization_user_position');
            $table->string('date');
            $table->string('reference_id');
            $table->string('state');
            $table->string('time_reply');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fund_raising_members');
    }
};
