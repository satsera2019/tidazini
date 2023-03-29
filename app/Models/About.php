<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class About extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'about';
    protected $fillable = [ 'image', 'creator_user_id' ];
  
    public function translation(): HasMany
    {
        return $this->hasMany(Translation::class, 'model_id', 'id')->where('model_source', 'about');
    }
}
