<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Item extends Model implements HasMedia
{
    use InteractsWithMedia;
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'price',
        'royalties',
        'size',
        'method',
        'collection_id'
    ];
    function categories():BelongsTo
    {
        return $this->belongsTo(Category::class);
    }


    function collections():BelongsTo
    {
        return $this->belongsTo(Collection::class);
    }

    function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function likes(): MorphMany
    {
        return $this->morphMany(Like::class, 'likeable');
    }
}
