<?php

declare(strict_types=1);

use GRPC\Pinger\PingerHttpClient;
use GRPC\Pinger\PingerInterface;
use Spiral\RoadRunner\GRPC\Server;
use Spiral\RoadRunner\GRPC\Invoker;
use Spiral\RoadRunner\Worker;
use Symfony\Component\HttpClient\NativeHttpClient;

ini_set('display_errors', 'stderr');

require __DIR__ . '/vendor/autoload.php';

$invoker = new Invoker();

$server = new Server($invoker, [
    'debug' => false, // optional (default: false)
]);

$server->registerService(PingerInterface::class, new PingerHttpClient(new NativeHttpClient()));

$server->serve(Worker::create());
