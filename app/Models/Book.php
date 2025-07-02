<?php

namespace App\Models;

use App\Enums\ReadingStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Book extends Model
{
    protected $guarded = [];

    protected function cast(): array
    {
        return [
            'started_reading_at' => 'date',
            'published_year' => 'integer',
            'reading_status' => ReadingStatus::class,
            'pages_read' => 'integer',
        ];
    }

    public function Genres(): BelongsToMany
    {
        return $this->belongsToMany(Genre::class);
    }
}
