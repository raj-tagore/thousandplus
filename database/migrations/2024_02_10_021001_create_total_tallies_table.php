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
        Schema::create('total_tallies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->integer('calls')->default(0);
            $table->integer('prospects')->default(0);
            $table->integer('docs')->default(0);
            $table->integer('urn')->default(0);
            $table->integer('exam')->default(0);
            $table->integer('code')->default(0);
            
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('total_tallies');
    }
};
