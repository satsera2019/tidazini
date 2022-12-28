<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [ 'image', 'title_id', 'text_id', 'creator_user_id' ];


    public function translation(): HasMany
    {
        return $this->hasMany(Translation::class, 'tr_id');
    }
}
