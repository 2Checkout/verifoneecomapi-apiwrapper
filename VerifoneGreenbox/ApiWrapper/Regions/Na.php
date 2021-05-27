<?php

namespace VerifoneGreenbox\ApiWrapper\Regions;

use VerifoneGreenbox\ApiWrapper\Settings;

/**
 * Class Na
 * @package VerifoneGreenbox\ApiWrapper\Regions
 */
final class Na extends AbstractRegion
{
    protected $envLiveBaseCustomerUrl = 'https://us.gsc.verifone.cloud';
    protected $envTestBaseCustomerUrl = 'https://uscst-gb.gsc.vficloud.net';

    protected $envLiveBaseCheckoutUrl = 'https://us.checkout.verifone.cloud';
    protected $envTestBaseCheckoutUrl = 'https://uscst.checkout.vficloud.net';

    protected $envLiveBasePaymentsUrl = 'https://us.gsc.verifone.cloud';
    protected $envTestBasePaymentsUrl = 'https://uscst-gb.gsc.vficloud.net';

    protected $envLiveBaseTokenUrl = 'https://us.vam.verifone.cloud';
    protected $envTestBaseTokenUrl = 'https://uscst.vam.vficloud.net';

    protected $envLiveBaseTokenRedirectUrl = 'https://us.live.verifone.cloud';
    protected $envTestBaseTokenRedirectUrl = 'https://uscst.test.vficloud.net';

    /**
     * Na constructor.
     * @param Settings $settings
     */
    public function __construct(Settings $settings)
    {
        parent::__construct($settings);
    }
}
