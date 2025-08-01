<?php

declare(strict_types=1);

namespace Hypervel\Http;

use Hyperf\HttpServer\CoreMiddleware as HyperfCoreMiddleware;
use Hypervel\Http\Contracts\ResponseContract;
use Psr\Http\Message\ServerRequestInterface;

class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => [
                ResponseContract::class => Response::class,
                ServerRequestInterface::class => Request::class,
                HyperfCoreMiddleware::class => CoreMiddleware::class,
            ],
            'publish' => [
                [
                    'id' => 'config',
                    'description' => 'The configuration file of cors.',
                    'source' => __DIR__ . '/../publish/cors.php',
                    'destination' => BASE_PATH . '/config/autoload/cors.php',
                ],
            ],
        ];
    }
}
