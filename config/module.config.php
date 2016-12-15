<?php

namespace Strings;

use Strings\Service\StringsService;
use Strings\Service\Factory\StringsServiceFactory;
use Strings\View\Helper\Factory\StringsViewHelperFactory;
use Strings\View\Helper\StringsViewHelper;

return [
    'service_manager' => [
        'aliases' => [
            'strings' => StringsService::class,
        ],
        'factories' => [
            StringsService::class => StringsServiceFactory::class,
        ],
    ],
    'view_helpers' => [
        'aliases' => [
            'strings' => StringsViewHelper::class,
        ],
        'factories' => [
            StringsViewHelper::class => StringsViewHelperFactory::class,
        ],
    ],
];