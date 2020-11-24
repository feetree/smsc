<?php
return [
    'login' => env('SMSC_LOGIN', ''),
    'password' => env('SMSC_PASSWORD', ''),
    'post' => env('SMSC_POST', 0),
    'https' => env('SMSC_HTTPS', 1),
    'charset' => env('SMSC_CHARSET', 'utf-8'),
    'debug' => env('SMSC_DEBUG', 0),
    'smtp_from' => env('SMTP_FROM', 'api@smsc.ru'),
];
