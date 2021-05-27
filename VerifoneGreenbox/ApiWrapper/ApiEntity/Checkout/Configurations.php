<?php

namespace VerifoneGreenbox\ApiWrapper\ApiEntity\Checkout;

class Configurations
{
    private $card;

    /**
     * @return mixed
     */
    public function getConfigurations()
    {
        return $this->card;
    }

    /**
     * @param Card $card
     * @return $this
     */
    public function setConfigurations(Card $card)
    {
        $this->card = $card;
        return $this;
    }
}