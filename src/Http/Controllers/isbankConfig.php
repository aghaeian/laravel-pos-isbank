<?php

namespace aghaeian\isbank\Http\Controllers;

use isbank\Options;

class isbankConfig
{

    public function options()
    {
        $options = new Options();
	$public = core()->getConfigData('sales.payment_methods.isbank.client_id');
        $public = core()->getConfigData('sales.payment_methods.isbank.api_user');
        $secret = core()->getConfigData('sales.payment_methods.isbank.store_key');
        $secret = core()->getConfigData('sales.payment_methods.isbank.api_user_password');
        $options->setClientId($public);
	$options->setApiUser($public);
        $options->setStoreKey($secret);
        $options->setApiUserPassword($secret);
        
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
