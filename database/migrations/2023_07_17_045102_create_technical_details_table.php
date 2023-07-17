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
        Schema::create('technical_details', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Ad::class);

            $table->string('body_style')->nullable();
            $table->string('power')->nullable();
            $table->integer('cubic_capacity')->nullable();
            $table->integer('cylinders')->nullable();
            $table->integer('doors')->nullable();
            $table->string('steering')->nullable();
            $table->string('gearbox')->nullable();
            $table->integer('gears')->nullable();
            $table->string('transmission')->nullable();
            $table->string('front_brakes')->nullable();
            $table->string('rear_brakes')->nullable();
            $table->string('fuel_type')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('technical_details');
    }
};
