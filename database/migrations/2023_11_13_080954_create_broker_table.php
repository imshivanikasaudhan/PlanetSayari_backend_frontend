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
        Schema::create('broker', function (Blueprint $table) {
            $table->id();
            $table->integer('user_type')->default(0);
            $table->string('full_name');
            $table->integer('phone');
            $table->string('gender');
            $table->string('image');
            $table->integer('skyp_id');
            $table->string('address');
            $table->string('city');
            $table->string('country');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('broker');
    }
};
