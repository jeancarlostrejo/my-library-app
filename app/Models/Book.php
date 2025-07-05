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

        // Automatically handle cover_image deletion when an author is deleted
        static::deleting(function ($author) {
            if ($author->cover_image && Storage::exists($author->cover_image)) {
                Storage::delete($author->cover_image);
            }
        });

        // Automatically handle cover_image deletion when an author is updated
        static::updating(function ($author) {
            if ($author->isDirty('cover_image')) {
                $originalcover_image = $author->getOriginal('cover_image');

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
}
