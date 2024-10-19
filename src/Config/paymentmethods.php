<?php

return [
    'isbank' => [
        'code' => 'isbank',
        'title' => 'isbank',
        'description' => 'Isbank Payment Gateway',
        'image' => asset('/vendor/damalis/isbank/assets/images/iyzico.png'),
        'class' => 'Aghaeian\Isbank\Payment\Isbank',
        'active' => true,
        'sort'=> 5,
    ]
];
