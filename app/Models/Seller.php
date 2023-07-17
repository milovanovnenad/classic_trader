<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Seller extends Model
{
    use HasFactory;

    public function ads(): HasMany
    {
        return $this->hasMany(Ad::class);
    }

    public function image(): HasOne
    {
        return $this->hasOne(Image::class);
    }
}
