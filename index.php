<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

use App\Classes\Figures\CornersCounter\FigureCornersCounter;
use App\Enums\FigureConstantsEnum;

$figureCornersCounter = new FigureCornersCounter();
$results = $figureCornersCounter->getCornersCount(
    FigureConstantsEnum::SQUARE->value,
    FigureConstantsEnum::CIRCLE->value,
    'triangle'
);

foreach ($results as $result) {
    echo $result . PHP_EOL;
}
