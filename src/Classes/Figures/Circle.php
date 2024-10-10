<?php

namespace App\Classes\Figures;

use App\Classes\Abstract\AbstractShape;
use App\Enums\FigureConstantsEnum;

class Circle extends AbstractShape
{
    public function __construct()
    {
        parent::__construct(FigureConstantsEnum::CIRCLE->value);
    }
}