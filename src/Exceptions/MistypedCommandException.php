<?php

declare(strict_types=1);

namespace Tempest\Console\Exceptions;

use Exception;

final class MistypedCommandException extends Exception
{
    public function __construct(
        public readonly string $intendedCommand,
    ) {
    }
}
