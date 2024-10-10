<?php

namespace App\Contracts;

interface ShapeContract
{
    public function getCornersCount(): int;
    public function getName(): string;
}
