<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Artwork extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'creation_year',
        'category',
        'artist_id',
        'image'
    ];
    public function artist(): BelongsTo {
        return $this->belongsTo(Artist::class, 'artist_id');
    }
}
