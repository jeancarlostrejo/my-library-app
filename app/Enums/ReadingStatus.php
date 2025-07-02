<?php

namespace App\Enums;

enum ReadingStatus: string
{
    case PENDING = 'pending';
    case READING = 'reading';
    case COMPLETED = 'completed';

    public function color(): string
    {
        return match ($this) {
            self::PENDING => 'yellow',
            self::READING => 'blue',
            self::COMPLETED => 'green',
        };
    }
}
