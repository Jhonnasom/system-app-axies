<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Collection extends Model
{
    use HasFactory;

    function items():HasMany
    {
        return $this->hasMany(Item::class);
    }

    function user():BelongsTo
    {
        return $this->hasMany(User::class);
    }
}
