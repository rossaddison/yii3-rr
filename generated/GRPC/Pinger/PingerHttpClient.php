<?php

declare(strict_types=1);

/**
 * @see Avoiding namespace violation: Ensure: composer.json autoload": {"psr-4": {"GRPC\\": "generated/GRPC"}},
 * @link https://roadrunner.dev/docs/plugins-grpc#implement-service
 * This file is a product of applying the above links advice
 */
namespace GRPC\Pinger;

use Spiral\RoadRunner\GRPC;
use Symfony\Component\HttpClient\NativeHttpClient;
use GRPC\Pinger\PingerInterface;
use GRPC\Pinger\PingRequest;
use GRPC\Pinger\PingResponse;

final class PingerHttpClient implements PingerInterface
{
    private NativeHttpClient $nativeHttpClient;
    
    public function __construct(NativeHttpClient $nativeHttpClient) {
        $this->nativeHttpClient = $nativeHttpClient;
    }
    
    public function ping(GRPC\ContextInterface $ctx, PingRequest $in): PingResponse
    {
        $statusCode = $this->httpClient->get($in->getUrl())->getStatusCode();
    
        return new PingResponse([
            'status_code' => $statusCode
        ]);
    }
}