<?php

return [
    'isbank' => [
        'code' => 'isbank',
        'title' => 'isbank',
        'description' => 'isbank Payment Gateway',
        'image' => asset('/vendor/damalis/isbank/assets/images/isbank.png'),
        'class' => 'Damalis\isbank\Payment\isbank',
        'active' => true,
        'sort'=> 5,
    ]
];