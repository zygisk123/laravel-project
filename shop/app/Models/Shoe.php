<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Shoe extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function getBrand():HasOne
    {
        return $this->hasOne(Brand::class, 'id', 'brand_id');
    }

    public function getUser(): HasOne
    {
        return $this->hasOne(User::class);
    }

    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    public function sizes(): BelongsToMany
    {
        return $this->belongsToMany(Size::class, 'shoes_sizes');

    }
}
