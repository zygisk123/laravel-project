<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Size extends Model
{
    use HasFactory;

    public function shoes(): BelongsToMany
    {
        return $this->belongsToMany(Shoe::class, 'shoes_sizes');
    }
}
