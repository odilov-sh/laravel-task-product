<?php

return [
    'products' => [
        'vat' => 10
    ],
    'audit' => [
        'events' => [
            'created',
            'updated',
            'deleted',
        ],
        'getters' => [
            'created' => \App\Services\Audit\Getters\CreatedEventGetter::class,
            'updated' => \App\Services\Audit\Getters\UpdatedEventGetter::class,
            'deleted' => \App\Services\Audit\Getters\DeletedEventGetter::class,
        ],
    ]
];
