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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->unsignedBigInteger('tour_guide_id'); // Foreign key to guides table
            $table->date('date'); // Date of the booking
            $table->time('time'); // Time of the booking
            $table->string('location', 255); // Location of the booking
            $table->string('special_requests')->nullable(); // Special requests (nullable)
            $table->timestamps(); // Created at and updated at timestamps

            // Foreign key constraint to link the tour_guide_id to the guides table
            $table->foreign('tour_guide_id')->references('id')->on('guides')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
