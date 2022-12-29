<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blogs';
    protected $fillable = [ 'image', 'creator_user_id' ];


    public function translation(): HasMany
    {
        return $this->hasMany(Translation::class, 'model_id', 'id')->where('model_source', 'blogs');
    }

}
