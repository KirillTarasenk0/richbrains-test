<?php

namespace App\Classes\Figures\Factories;

use App\Contracts\ShapeContract;
use App\Classes\Figures\Circle;
use App\Classes\Figures\Square;
use App\Enums\FigureConstantsEnum;

class FigureFactory
{
    private const array FIGURE_NAMES = [
        FigureConstantsEnum::SQUARE->value => Square::class,
        FigureConstantsEnum::CIRCLE->value => Circle::class,
    ];

    public static function createFigure(string $name): ?ShapeContract
    {
        if (array_key_exists($name, self::FIGURE_NAMES)) {
            $figureClass = self::FIGURE_NAMES[$name];
            return new $figureClass();
        }

        return null;
    }
}
