<?php

declare(strict_types=1);

namespace Tempest\Database\Connection;

use Tempest\Container\Container;
use Tempest\Container\Initializer;
use Tempest\Container\Singleton;
use Tempest\Database\Config\DatabaseConfig;

final class ConnectionInitializer implements Initializer
{
    #[Singleton]
    public function initialize(Container $container): Connection
    {
        $databaseConfig = $container->get(DatabaseConfig::class);

        $connection = new PDOConnection($databaseConfig);
        $connection->connect();

        return $connection;
    }
}
