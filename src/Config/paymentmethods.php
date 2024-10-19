<?php

return [
    'isbank' => [
        'code' => 'isbank',
        'title' => 'isbank',
        'description' => 'isbank Payment Gateway',
        'image' => asset('/vendor/aghaeian/isbank/assets/images/isbank.png'),
        'class' => 'aghaeian\isbank\Payment\isbank',
        'active' => true,
        'sort'=> 5,
    ]
];