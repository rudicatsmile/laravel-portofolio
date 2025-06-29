<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];

    
    //Relasi has many category -> artcle
    public function Articles(): HasMany
    {
        return $this->hasMany(Article::class);
    }
}
