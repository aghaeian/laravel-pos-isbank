<?php

return [
    'isbank' => [
        'code' => 'isbank',
        'title' => 'isbank',
        'description' => 'isbank Payment Gateway',
        'image' => asset('/vendor/Aghaeian/isbank/assets/images/isbank.png'),
        'class' => 'Aghaeian\isbank\Payment\isbank',
        'active' => true,
        'sort'=> 5,
    ]
];