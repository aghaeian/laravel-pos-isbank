<?php

namespace aghaeian\isbank\Http\Controllers;

use isbank\Options;

class isbankConfig
{

    public function options()
    {
        $options = new Options();
        $public = core()->getConfigData('sales.payment_methods.isbank.public_key');
        $secret = core()->getConfigData('sales.payment_methods.isbank.secret_key');
        $options->setApiUser($public);
        $options->setStoreKey($secret);
	$options->setClientId($secret);
        $options->setApiUserPassword($public);
        
        $baseUrl = $this->environment();
        $options->setBaseUrl($baseUrl);
        
        return $options;
    }

    /**
     * Setting up and Returns isbank SDK environment with İyzico Access credentials.
     * For demo purpose, we are using SandboxEnvironment. In production this will be
     * ProductionEnvironment.
     */
	public function environment()
    { 
        $isbankMode = core()->getConfigData('sales.payment_methods.isbank.sandbox');

        if ($isbankMode) {			
            return "https://entegrasyon.asseco-see.com.tr/fim/est3Dgate";
        }

        return "https://sanalpos.isbank.com.tr/fim/est3Dgate";
    }
}
