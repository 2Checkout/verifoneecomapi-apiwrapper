<?php

namespace VerifoneEcomAPI\ApiWrapper\Regions\Interfaces;

/**
 * Interface CaptureInterface
 * @package VerifoneEcomAPI\ApiWrapper\Regions\Interfaces
 */
interface CaptureInterface
{

    /**
     * @return string
     */
    public function postCaptureUrl($captureId);
}