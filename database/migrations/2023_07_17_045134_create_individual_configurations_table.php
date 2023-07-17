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
        Schema::create('individual_configurations', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Ad::class);

            $table->string('exterior_color')->nullable();
            $table->string('manufacturer_color_name')->nullable();
            $table->string('sun_roof')->nullable();
            $table->string('folding_roof')->nullable();
            $table->string('power_assisted_steering')->nullable();
            $table->string('central_locking')->nullable();
            $table->string('electric_windows')->nullable();
            $table->string('interior_color')->nullable();
            $table->string('interior_material')->nullable();
            $table->string('heated_seats')->nullable();
            $table->string('air_conditioning')->nullable();
            $table->string('abs')->nullable();
            $table->string('airbag')->nullable();
            $table->string('cruise_control')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('individual_configurations');
    }
};
