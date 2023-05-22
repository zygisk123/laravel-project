<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class Brand extends Model
{
    use HasFactory;

    public function shoes(): HasMany
    {
        return $this->hasMany(Shoe::class);
    }

    public function user(): HasOneThrough
    {
        return $this->hasOneThrough(User::class, Shoe::class);
    }
}
