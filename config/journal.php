<?php

use Morrislaptop\Journal\Http\Middleware\Authorize;

return [
    /**
     * This is the subdomain where Journal will be accessible from. If the
     * setting is null, Journal will reside under the same domain as the
     * application. Otherwise, this value will be used as the subdomain.
     */
    'domain' => env('JOURNAL_DOMAIN', null),

    /**
     * This is the URI path where Journal will be accessible from. Feel free
     * to change this path to anything you like. Note that the URI will not
     * affect the paths of its internal API that aren't exposed to users.
     */
    'path' => env('JOURNAL_PATH', 'journal'),

    /**
     * Callback to convert the event class name to a label.
     */
    'event_class_to_label' => 'class_basename',

    /**
     * Convert unique references to uuid's when searching.
     */
    'uuid5_namespaces' => [],

    /**
     * Cards for the overview.
     */
    'cards' => [
        'journal::number-of-events-card',
        'journal::events-past-hour-card',
        'journal::events-past-seven-days-card',
    ],

    /**
     * Middleware to run for Journal routes.
     */
    'middleware' => [
        'web',
        Authorize::class,
    ],
];
