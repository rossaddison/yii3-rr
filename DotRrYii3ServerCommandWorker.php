<?php

declare(strict_types=1);

use GRPC\Pinger\Pinger;
use GRPC\Pinger\PingerInterface;
use Yiisoft\Yii\Runner\RoadRunner\RoadRunnerGrpcApplicationRunner;

require_once __DIR__ . '/vendor/autoload.php';

ini_set('display_errors', 'stderr');

$application = new RoadRunnerGrpcApplicationRunner(
    rootPath: __DIR__,
    debug: true
);

$application->setServices([
    PingerInterface::class => Pinger::class,
]);
$application->run();
