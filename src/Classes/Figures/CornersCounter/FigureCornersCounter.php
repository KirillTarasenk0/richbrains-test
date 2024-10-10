<?php

namespace App\Classes\Figures\CornersCounter;

use App\Classes\Figures\Factories\FigureFactory;
use App\Enums\FigureConstantsEnum;

class FigureCornersCounter
{
    public function getCornersCount(string ...$figureNames): array
    {
        $results = [];

        foreach ($figureNames as $figureName) {
            $figure = FigureFactory::createFigure($figureName);

            if ($figure) {
                $results[] = "{$figure->getName()} - " . $figure->getCornersCount();
            } else {
                $results[] = "$figureName - " . FigureConstantsEnum::FIGURE_NOT_DEFINED_MESSAGE->value;
            }
        }

        return $results;
    }
}
