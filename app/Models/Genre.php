<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $fillable = [
        'name',
        'description',
        'slug'
    ];

    public function books()
    {
        return $this->belongsToMany(Book::class);
    }
}
