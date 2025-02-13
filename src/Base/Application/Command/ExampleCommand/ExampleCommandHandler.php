<?php

declare(strict_types=1);

namespace App\Base\Application\Command\ExampleCommand;

use App\Shared\Application\Command\CommandHandlerInterface;

final readonly class ExampleCommandHandler implements CommandHandlerInterface
{
    public function __construct(
    ) {
    }

    public function handle(ExampleCommand $command): void
    {
    }
}
