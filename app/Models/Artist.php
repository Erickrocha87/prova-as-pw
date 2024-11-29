<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Artist extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'biography',
        'birth_year'
    ];
    public function artwork(): HasMany{
        return $this->hasMany(Artwork::class);
    }
}
