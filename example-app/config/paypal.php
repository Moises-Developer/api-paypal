<?php

return [
    'client_id' => env('PAYPAL_CLIENT_ID'),
    'secret' => env('PAYPAL_SECRET'),

    'settings' => [
        'mode' => env('PAYPAL_MODE', 'sandbox'),
        'http.ConnectionTimeOut' => 1000,
        'log.LogEnabled' => true,
        'log.FileName' => storage_path('/logs/paypal.log'),
        'log.LogLevel' => 'ERROR'
    ]
];

/*return [

    'mode'    => env('PAYPAL_MODE', 'sandbox'),

    'sandbox' => [

        'username'    => env('PAYPAL_SANDBOX_API_USERNAME', ''),

        'password'    => env('PAYPAL_SANDBOX_API_PASSWORD', ''),

        'secret'      => env('PAYPAL_SANDBOX_API_SECRET', ''),

        'certificate' => env('PAYPAL_SANDBOX_API_CERTIFICATE', ''),

        'app_id'      => 'AaAcHegkrUg-O-hxeF7nX2ZjQqZuSs48tfBBWzfYUSit9rtk8KSG8QcmQo9z-FkA6c2j2PkUOspuPO-M',

    ],

    'payment_action' => 'Sale',

    'currency'       => env('PAYPAL_CURRENCY', 'USD'),

    'billing_type'   => 'MerchantInitiatedBilling',

    'notify_url'     => '',

    'locale'         => '',

    'validate_ssl'   => false,

];*/