<?php

namespace App\Classes\Abstract;

use App\Contracts\ShapeContract;

abstract class AbstractShape implements ShapeContract
{
    public function __construct(protected string $name)
    {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCornersCount(): int
    {
        return 0;
    }
}
