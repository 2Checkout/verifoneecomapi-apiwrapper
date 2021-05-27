<?php

namespace VerifoneGreenbox\ApiWrapper\Regions;

use VerifoneGreenbox\ApiWrapper\Settings;

/**
 * Class Emea
 * @package VerifoneGreenbox\ApiWrapper\Regions
 */
final class Emea extends AbstractRegion
{
    protected $envLiveBaseCustomerUrl = 'https://gsc.verifone.cloud';
    protected $envTestBaseCustomerUrl = 'https://cst2.test-gsc.vfims.com';

    protected $envLiveBaseCheckoutUrl = 'https://checkout-emea.dimebox.com';
    protected $envTestBaseCheckoutUrl = 'https://checkout_cst.dimebox.com';

    protected $envLiveBasePaymentsUrl = 'https://gsc.verifone.cloud';
    protected $envTestBasePaymentsUrl = 'https://cst2.test-gsc.vfims.com';

    protected $envLiveBaseTokenUrl = 'https://emea.vam.verifone.cloud';
    protected $envTestBaseTokenUrl = 'https://cst1.test-vam.vfims.com';

    protected $envLiveBaseTokenRedirectUrl = 'https://emea.live.verifone.cloud';
    protected $envTestBaseTokenRedirectUrl = 'https://emea.test.verifone.cloud';

    /**
     * Emea constructor.
     * @param Settings $settings
     */
    public function __construct(Settings $settings)
    {
        parent::__construct($settings);
    }
}
