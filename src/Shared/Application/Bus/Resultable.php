<?php

declare(strict_types=1);

namespace App\Shared\Application\Bus;

interface Resultable
{
    public function getResult(): mixed;
}
