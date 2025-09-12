<?php

namespace App\Models;

use App\Enums\ReadingStatus;
use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\Storage;

class Book extends Model
{
    protected $guarded = [];

    protected function casts(): array
    {
        return [
            'started_reading_at' => 'datetime',
            'published_year' => 'integer',
            'reading_status' => ReadingStatus::class,
            'pages_read' => 'integer',
        ];
    }

    protected static function boot()
    {
        parent::boot();

        // Automatically handle cover_image deletion when a book is deleted
        static::deleting(function ($book) {
            if ($book->cover_image && Storage::exists($book->cover_image)) {
                Storage::delete($book->cover_image);
            }
        });

        // Automatically handle cover_image when a book is updated
        static::updating(function ($book) {
            if ($book->isDirty('cover_image')) {
                $originalcover_image = $book->getOriginal('cover_image');

                if ($originalcover_image && Storage::exists($originalcover_image)) {
                    Storage::delete($originalcover_image);
                }
            }
        });
    }

    public function Genres(): BelongsToMany
    {
        return $this->belongsToMany(Genre::class);
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(Author::class);
    }


    public function getPorcentageReadAttribute(): string
    {
        if ($this->pages_read && $this->pages) {
            return (string) ceil(($this->pages_read / $this->pages) * 100);
        }

        return "0";
    }

    #[Scope]
    public function active(Builder $query): void
    {
        $query->where('is_active', 1);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
