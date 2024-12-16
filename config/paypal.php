<?php
return [
    'client_id' => env('PAYPAL_CLIENT_ID'),
    'secret' => env('PAYPAL_SECRET'),
    'settings' => [
        'mode' => env('PAYPAL_MODE', 'sandbox'), // 'sandbox' or 'live'
        'http.ConnectionTimeOut' => 1000,
        'log.LogEnabled' => true,
        'log.FileName' => storage_path('logs/paypal.log'),
        'log.LogLevel' => 'FINE', // 'FINE', 'INFO', 'WARN', or 'ERROR'
    ],
];
?>