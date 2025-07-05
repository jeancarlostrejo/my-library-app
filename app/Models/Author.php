<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Storage;

class Author extends Model
{
    protected $fillable = [
        'name',
        'description',
        'photo',
        'is_active',
    ];


    protected static function boot()
    {
        parent::boot();

        // Automatically handle photo deletion when an author is deleted
        static::deleting(function ($author) {
            if ($author->photo && Storage::exists($author->photo)) {
                Storage::delete($author->photo);
            }
        });

        // Automatically handle photo deletion when an author is updated
        static::updating(function ($author) {
            if ($author->isDirty('photo')) {
                $originalPhoto = $author->getOriginal('photo');

                if ($originalPhoto && Storage::exists($originalPhoto)) {
                    Storage::delete($originalPhoto);
                }
            }
        });
    }

    public function books(): HasMany
    {
        return $this->hasMany(Book::class);
    }
}
