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
        Schema::create('mechanics', function (Blueprint $table) {
            $table->id();
            $table->string('shop_name');
            $table->string('username');
            $table->string('email')->unique();
            $table->string('phone_number');
            $table->string('whatsapp_number')->nullable();
            $table->string('street_address');
            $table->string('town_city');
            $table->string('state');
            $table->string('country')->default('Nigeria');
            $table->string('years_of_experience');
            $table->text('services_offered');
            $table->time('working_hours_from');
            $table->time('working_hours_to');
            $table->string('logo')->nullable();
            $table->text('about');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mechanics');
    }
};
