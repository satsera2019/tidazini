<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class About extends Model
{
    use HasFactory;

    protected $table = 'about';
    protected $fillable = [ 'image', 'text_id', 'creator_user_id' ];

    protected static function booted()
    {
        static::addGlobalScope('deleted_at', function (Builder $builder) {
            $builder->where('deleted_at', null);
        });
    }

    public function translate(): HasMany
    {
        return $this->hasMany(Translation::class, 'tr_id');
    }
}
