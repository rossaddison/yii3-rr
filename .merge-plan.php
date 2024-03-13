<?php

declare(strict_types=1);

// Do not edit. Content will be replaced.
return [
    '/' => [
        'params' => [
            'yiisoft/yii-runner-roadrunner' => [
                'config/params.php',
            ],
            'yiisoft/log-target-file' => [
                'config/params.php',
            ],
        ],
        'di-web' => [
            'yiisoft/error-handler' => [
                'config/di-web.php',
            ],
            'yiisoft/yii-event' => [
                'config/di-web.php',
            ],
        ],
        'di' => [
            'yiisoft/log-target-file' => [
                'config/di.php',
            ],
            'yiisoft/yii-event' => [
                'config/di.php',
            ],
        ],
        'events-console' => [
            'yiisoft/log' => [
                'config/events-console.php',
            ],
        ],
        'events-web' => [
            'yiisoft/log' => [
                'config/events-web.php',
            ],
        ],
        'params-web' => [
            'yiisoft/yii-event' => [
                'config/params-web.php',
            ],
        ],
        'params-console' => [
            'yiisoft/yii-event' => [
                'config/params-console.php',
            ],
        ],
        'di-console' => [
            'yiisoft/yii-event' => [
                'config/di-console.php',
            ],
        ],
    ],
];
