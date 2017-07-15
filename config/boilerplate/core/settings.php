<?php

return [
    'app_name'         => [
        'description'  => 'setting::validation.attributes.backend.app_name',
        'view'         => 'text',
        'translatable' => true,
        'default'      => 'Boilerplate',
    ],
    'app_keywords'     => [
        'description'  => 'setting::validation.attributes.backend.app_keywords',
        'view'         => 'text',
        'translatable' => true,
        'default'      => 'laravel, boilerplate',
    ],
    'app_description'  => [
        'description'  => 'setting::validation.attributes.backend.app_description',
        'view'         => 'textarea',
        'translatable' => true,
        'default'      => 'Laravel Framework',
    ],
    'google_analytics' => [
        'description'  => 'setting::validation.attributes.backend.google_analytics',
        'view'         => 'text',
        'translatable' => false,
    ],
];
