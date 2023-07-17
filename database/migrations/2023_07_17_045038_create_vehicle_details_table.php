<?php

use App\Models\Ad;
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
        Schema::create('vehicle_details', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Ad::class);

            $table->string('make')->nullable();
            $table->string('series')->nullable();
            $table->string('model')->nullable();
            $table->string('manufacturer_code')->nullable();
            $table->string('first_registration_date')->nullable();
            $table->integer('year_of_manufacture')->nullable();
            $table->integer('mileage')->nullable();
            $table->string('chassis_number')->nullable();
            $table->string('engine_number')->nullable();
            $table->integer('gearbox_number')->nullable();
            $table->string('matching_numbers')->nullable();
            $table->string('previous_owners')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicle_details');
    }
};
