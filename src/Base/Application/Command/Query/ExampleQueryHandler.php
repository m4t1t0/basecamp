<?php

declare(strict_types=1);

namespace App\Base\Application\Command\Query;

use App\Shared\Application\Query\QueryHandlerInterface;

readonly final class ExampleQueryHandler implements QueryHandlerInterface
{
    public function __construct(
    ) {
    }

    public function handle(ExampleQuery $query): string
    {
        return 'Query executed successfully';
    }
}
