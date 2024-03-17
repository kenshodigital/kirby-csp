<?php declare(strict_types=1);

use Kirby\Cms\App;

App::plugin('kensho/csp', [
    'hooks' => [
        'route:before' => require __DIR__ . '/hooks/route/before.php',
    ],
]);
