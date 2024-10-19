<?php

namespace Aghaeian\isbank\Payment;

use Webkul\Payment\Payment\Payment;

class isbank extends Payment
{
    /**
     * Payment method code
     *
     * @var string
     */
    protected $code  = 'isbank';

    /**
    * Get redirect url.
    *
    * @var string
    */
    public function getRedirectUrl()
    {
        return route('isbank.payment.checkout');        
    }
}
