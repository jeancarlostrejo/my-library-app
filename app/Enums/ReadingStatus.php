<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;

enum ReadingStatus: string implements HasColor, HasLabel
{
    case PENDING = 'pending';
    case READING = 'reading';
    case COMPLETED = 'completed';

    public function label(): string
    {
        return match ($this) {
            self::PENDING => 'Pending',
            self::READING => 'Reading',
            self::COMPLETED => 'Completed',
        };
    }

    public function getColor(): string
    {
        return match ($this) {
            self::PENDING => 'gray',
            self::READING => 'info',
            self::COMPLETED => 'success',
        };
    }

    public function getLabel(): ?string
    {
        return match ($this) {
            self::PENDING => 'Pending',
            self::READING => 'Reading',
            self::COMPLETED => 'Completed',
        };
    }
}
