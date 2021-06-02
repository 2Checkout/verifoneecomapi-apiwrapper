<?php

namespace VerifoneEcomAPI\ApiWrapper\Regions;

use VerifoneEcomAPI\ApiWrapper\Settings;

/**
 * Class NzAu
 * @package VerifoneEcomAPI\ApiWrapper\Regions
 */
final class NzAu extends AbstractRegion
{
    protected $envLiveBaseCustomerUrl = 'https://nz.gsc.verifone.cloud';
    protected $envTestBaseCustomerUrl = 'https://cst2.test-gsc.vfims.com';

    protected $envLiveBaseCheckoutUrl = 'https://checkout_nz.dimebox.com';
    protected $envTestBaseCheckoutUrl = 'https://checkout_cst.dimebox.com';

    protected $envLiveBasePaymentsUrl = 'https://nz.gsc.verifone.cloud';
    protected $envTestBasePaymentsUrl = 'https://cst2.test-gsc.vfims.com';

    protected $envLiveBaseTokenUrl = 'https://nz.vam.verifone.cloud';
    protected $envTestBaseTokenUrl = 'https://cst1.test-vam.vfims.com';

    protected $envLiveBaseTokenRedirectUrl = 'https://nz.live.verifone.cloud/';
    protected $envTestBaseTokenRedirectUrl = 'http://localhost/';

    /**
     * NzAu constructor.
     * @param Settings $settings
     */
    public function __construct(Settings $settings)
    {
        parent::__construct($settings);
    }
}
