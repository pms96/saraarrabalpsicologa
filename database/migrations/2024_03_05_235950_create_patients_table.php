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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('cascade');
            $table->string('name');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('personal_id')->nullable();
            $table->date('birth_date');
            $table->foreignId('gender_id')->nullable()->constrained();
            $table->foreignId('country_id')->nullable()->constrained();
            $table->string('city')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('address');
            $table->string('phone');
            $table->string('email')->nullable();
            $table->date('first_visit')->nullable();
            $table->date('last_visit')->nullable();
            $table->date('next_appointment')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
