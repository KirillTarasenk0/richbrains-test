<?php

namespace App\Classes\Figures;

use App\Classes\Abstract\AbstractShape;
use App\Enums\FigureConstantsEnum;

class Square extends AbstractShape
{
    public function __construct()
    {
        parent::__construct(FigureConstantsEnum::SQUARE->value);
    }

    public function getCornersCount(): int
    {
        return FigureConstantsEnum::SQUARE->getCornersCount();
    }
}
