<?php

declare(strict_types=1);

namespace App\Base\Application\Command\ExampleCommand;

use App\Shared\Application\Command\CommandInterface;

/**
 * @see AddItemCommandHandler
 */
final readonly class ExampleCommand implements CommandInterface
{
    public function __construct(
    ) {
    }
}
