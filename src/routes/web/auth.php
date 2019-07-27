<?php

$options = [
    'register' => env('AUTH_HAS_REGISTER', true),
    'reset' => env('AUTH_HAS_RESET', true),
    'verify' => env('AUTH_HAS_VERIFY', true),
];

Auth::routes($options);
