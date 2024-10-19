<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\VerifyCsrfToken;

use aghaeian\isbank\Http\Controllers\isbankController;

Route::group(['middleware' => ['web', 'theme', 'locale', 'currency']], function () {    
    Route::get('isbank-payment-checkout', [
        isbankController::class, 'checkoutWithisbank'])->name('isbank.payment.checkout');    
    Route::post('isbank-payment-callback/{token}', [
        isbankController::class, 'paymentCallback'
    ])->withoutMiddleware(VerifyCsrfToken::class)->name('isbank.payment.callback'); 
});
