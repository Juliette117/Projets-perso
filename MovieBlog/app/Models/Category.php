<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'label' , 'icon'
    ];

    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    public function articlesseries()
    {
        return $this->hasMany(Articleseries::class);
    }
}
