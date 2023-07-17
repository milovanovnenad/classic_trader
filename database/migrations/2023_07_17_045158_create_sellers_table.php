<?php

use App\Models\Image;
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
        Schema::create('sellers', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Image::class);

            $table->string('company_name')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('street');
            $table->integer('street_number');
            $table->string('postal_code');
            $table->string('city');
            $table->binary('flag')->nullable();
            $table->string('country');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sellers');
    }
};
