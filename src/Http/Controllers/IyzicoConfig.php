<?php

namespace Damalis\isbank\Http\Controllers;

use isbank\Options;

class isbankConfig
{

    public function options()
    {
        $options = new Options();
        $public = core()->getConfigData('sales.payment_methods.isbank.public_key');
        $secret = core()->getConfigData('sales.payment_methods.isbank.secret_key');
        $options->setApiKey($public);
        $options->setSecretKey($secret);
        
        $baseUrl = $this->environment();
        $options->setBaseUrl($baseUrl);
        
        return $options;
    }

    /**
     * Setting up and Returns İyzico SDK environment with İyzico Access credentials.
     * For demo purpose, we are using SandboxEnvironment. In production this will be
     * ProductionEnvironment.
     */
	public function environment()
    { 
        $isbankMode = core()->getConfigData('sales.payment_methods.isbank.sandbox');

        if ($isbankMode) {			
            return "https://sandbox-api.isbank.com";
        }

        return "https://api.merchant.isbank.com";
    }
}