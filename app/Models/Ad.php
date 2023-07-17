<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Ad extends Model
{
    use HasFactory;

    public function seller(): BelongsTo
    {
        return $this->belongsTo(Seller::class);
    }

    public function vehicleDetails(): HasOne
    {
        return $this->hasOne(VehicleDetail::class);
    }

    public function technicalDetails(): HasOne
    {
        return $this->hasOne(TechnicalDetail::class);
    }

    public function individualConfiguration(): HasOne
    {
        return $this->hasOne(IndividualConfiguration::class);
    }

    public function images(): HasMany
    {
        return $this->hasMany(Image::class);
    }
}
