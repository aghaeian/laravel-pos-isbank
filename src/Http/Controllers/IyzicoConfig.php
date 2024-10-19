<?php

namespace Aghaeian\Isbank\Http\Controllers;

use Isbank\Options;

class IsbankConfig
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
     * Setting up and Returns Isbank SDK environment with Isbank Access credentials.
     * For demo purpose, we are using SandboxEnvironment. In production this will be
     * ProductionEnvironment.
     */
	public function environment()
    { 
        $isbankMode = core()->getConfigData('sales.payment_methods.isbank.sandbox');

        if ($isbankMode) {			
            return "testsanalpos.est.com.tr";
        }

        return "spos.isbank.com.tr";
    }
}
