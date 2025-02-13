<?php

declare(strict_types=1);

namespace App\Shared\Infra\Bus;

use App\Shared\Application\Bus\CommandBusInterface;
use App\Shared\Application\Command\CommandInterface;
use Symfony\Component\Messenger\Envelope;
use Symfony\Component\Messenger\Exception\ExceptionInterface;
use Symfony\Component\Messenger\MessageBusInterface;

readonly class SymfonyCommandBus implements CommandBusInterface
{
    public function __construct(private MessageBusInterface $bus)
    {
    }

    /**
     * @param CommandInterface|Envelope $message
     * @return void
     * @throws ExceptionInterface
     */
    public function handle(CommandInterface|Envelope $message): void
    {
        $this->bus->dispatch($message);
    }
}
