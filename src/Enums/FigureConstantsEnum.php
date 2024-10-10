<?php

namespace App\Enums;

enum FigureConstantsEnum: string
{
    case SQUARE = 'square';
    case CIRCLE = 'circle';
    case FIGURE_NOT_DEFINED_MESSAGE = 'not defined';

    public function getCornersCount(): int
    {
        return match ($this) {
            self::SQUARE => 4,
            self::CIRCLE => 0,
            default => 0,
        };
    }
}
