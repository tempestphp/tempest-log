<?php

declare(strict_types=1);

namespace Tempest\Log;

use Psr\Log\LoggerInterface;
use Tempest\Container\Container;
use Tempest\Container\Initializer;
use Tempest\Container\Singleton;

final readonly class LoggerInitializer implements Initializer
{
    #[Singleton]
    public function initialize(Container $container): LoggerInterface|Logger
    {
        return new GenericLogger(
            $container->get(LogConfig::class),
        );
    }
}
