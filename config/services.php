<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'google' => [
        'client_id' => '730888218076-qq1h6qmkvt08pk99k7vf2icdhmalmn8f.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://127.0.0.1:8000/auth/google/callback',
    ],

    'twitter' => [
        'client_id' => 'zTE4BNLzxnNRCq5X70vdWVoro',
        'client_secret' => 'u34WrYhhWOv6uqVCXq42SEMQ6jalcC9la3dzxxubpgiraDAFHk',
        'redirect' => 'http://www.localhost:8000/auth/twitter/callback',
    ],

    // 'facebook' => [
    //     'client_id' => '1355557468384525',
    //     'client_secret' => 'c8acfafd7d1ace103e5b137bbf4433c1',
    //     'redirect' => 'http://localhost:8000/auth/facebook/callback',
    // ],

];
