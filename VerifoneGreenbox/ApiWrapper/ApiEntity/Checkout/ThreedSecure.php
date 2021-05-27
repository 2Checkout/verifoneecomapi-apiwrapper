<?php

namespace VerifoneGreenbox\ApiWrapper\ApiEntity\Checkout;

/**
 * Class ThreedSecure
 * @package VerifoneGreenbox\ApiWrapper\ApiEntity\Customer
 */
class ThreedSecure
{
    private $accountAgeIndicator;
    private $accountCreateDate;
    private $accountChangeIndicator;
    private $accountChangeDate;
    private $accountPwdChangeIndicator;
    private $accountPwdChangeDate;
    private $accountId;
    private $accountPurchases;
    private $acsWindowSize;
    private $addCardAttempts;
    private $addressMatch;
    private $alternateAuthenticationMethod;
    private $alternateAuthenticationDate;
    private $alternateAuthenticationData;
    private $threedsContractId;
    private $authenticationIndicator;
    private $categoryCode;
    private $challengeIndicator;
    private $deliveryEmail;
    private $deliveryTimeFrame;
    private $enabled;
    private $fraudActivity;
    private $giftCardAmount;
    private $giftCardCurrencyCode;
    private $giftCardCount;
    private $installment;
    private $messageCategory;
    private $paymentAccountIndicator;
    private $paymentAccountAge;
    private $preOrderIndicator;
    private $preOrderDate;
    private $priorAuthenticationData;
    private $priorAuthenticationMethod;
    private $priorAuthenticationTime;
    private $priorAuthenticationRef;
    private $productCode;
    private $recurringEnd;
    private $recurringFrequency;
    private $reorderIndicator;
    private $requestorId;
    private $requestorName;
    private $shippingAddressUsageIndicator;
    private $shippingAddressUsageDate;
    private $shippingMethodIndicator;
    private $shippingNameIndicator;
    private $totalItems;
    private $merchantScore;
    private $transactionCountDay;
    private $transactionCountYear;
    private $transactionMode = 'S';
    private $version;

    /**
     * @return mixed
     */
    public function getAccountAgeIndicator()
    {
        return $this->accountAgeIndicator;
    }

    /**
     * @param mixed $accountAgeIndicator
     * @return ThreedSecure
     */
    public function setAccountAgeIndicator($accountAgeIndicator)
    {
        $this->accountAgeIndicator = $accountAgeIndicator;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAccountCreateDate()
    {
        return $this->accountCreateDate;
    }

    /**
     * @param mixed $accountCreateDate
     * @return ThreedSecure
     */
    public function setAccountCreateDate($accountCreateDate)
    {
        $this->accountCreateDate = $accountCreateDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAccountChangeIndicator()
    {
        return $this->accountChangeIndicator;
    }

    /**
     * @param mixed $accountChangeIndicator
     * @return ThreedSecure
     */
    public function setAccountChangeIndicator($accountChangeIndicator)
    {
        $this->accountChangeIndicator = $accountChangeIndicator;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAccountChangeDate()
    {
        return $this->accountChangeDate;
    }

    /**
     * @param mixed $accountChangeDate
     * @return ThreedSecure
     */
    public function setAccountChangeDate($accountChangeDate)
    {
        $this->accountChangeDate = $accountChangeDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAccountPwdChangeIndicator()
    {
        return $this->accountPwdChangeIndicator;
    }

    /**
     * @param mixed $accountPwdChangeIndicator
     * @return ThreedSecure
     */
    public function setAccountPwdChangeIndicator($accountPwdChangeIndicator)
    {
        $this->accountPwdChangeIndicator = $accountPwdChangeIndicator;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAccountPwdChangeDate()
    {
        return $this->accountPwdChangeDate;
    }

    /**
     * @param mixed $accountPwdChangeDate
     * @return ThreedSecure
     */
    public function setAccountPwdChangeDate($accountPwdChangeDate)
    {
        $this->accountPwdChangeDate = $accountPwdChangeDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * @param mixed $accountId
     * @return ThreedSecure
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAccountPurchases()
    {
        return $this->accountPurchases;
    }

    /**
     * @param mixed $accountPurchases
     * @return ThreedSecure
     */
    public function setAccountPurchases($accountPurchases)
    {
        $this->accountPurchases = $accountPurchases;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAcsWindowSize()
    {
        return $this->acsWindowSize;
    }

    /**
     * @param mixed $acsWindowSize
     * @return ThreedSecure
     */
    public function setAcsWindowSize($acsWindowSize)
    {
        $this->acsWindowSize = $acsWindowSize;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAddCardAttempts()
    {
        return $this->addCardAttempts;
    }

    /**
     * @param mixed $addCardAttempts
     * @return ThreedSecure
     */
    public function setAddCardAttempts($addCardAttempts)
    {
        $this->addCardAttempts = $addCardAttempts;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAddressMatch()
    {
        return $this->addressMatch;
    }

    /**
     * @param mixed $addressMatch
     * @return ThreedSecure
     */
    public function setAddressMatch($addressMatch)
    {
        $this->addressMatch = $addressMatch;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAlternateAuthenticationMethod()
    {
        return $this->alternateAuthenticationMethod;
    }

    /**
     * @param mixed $alternateAuthenticationMethod
     * @return ThreedSecure
     */
    public function setAlternateAuthenticationMethod($alternateAuthenticationMethod)
    {
        $this->alternateAuthenticationMethod = $alternateAuthenticationMethod;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAlternateAuthenticationDate()
    {
        return $this->alternateAuthenticationDate;
    }

    /**
     * @param mixed $alternateAuthenticationDate
     * @return ThreedSecure
     */
    public function setAlternateAuthenticationDate($alternateAuthenticationDate)
    {
        $this->alternateAuthenticationDate = $alternateAuthenticationDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAlternateAuthenticationData()
    {
        return $this->alternateAuthenticationData;
    }

    /**
     * @param mixed $alternateAuthenticationData
     * @return ThreedSecure
     */
    public function setAlternateAuthenticationData($alternateAuthenticationData)
    {
        $this->alternateAuthenticationData = $alternateAuthenticationData;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getThreedsContractId()
    {
        return $this->threedsContractId;
    }

    /**
     * @param mixed $threedsContractId
     * @return ThreedSecure
     */
    public function setThreedsContractId($threedsContractId)
    {
        $this->threedsContractId = $threedsContractId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAuthenticationIndicator()
    {
        return $this->authenticationIndicator;
    }

    /**
     * @param mixed $authenticationIndicator
     * @return ThreedSecure
     */
    public function setAuthenticationIndicator($authenticationIndicator)
    {
        $this->authenticationIndicator = $authenticationIndicator;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCategoryCode()
    {
        return $this->categoryCode;
    }

    /**
     * @param mixed $categoryCode
     * @return ThreedSecure
     */
    public function setCategoryCode($categoryCode)
    {
        $this->categoryCode = $categoryCode;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getChallengeIndicator()
    {
        return $this->challengeIndicator;
    }

    /**
     * @param mixed $challengeIndicator
     * @return ThreedSecure
     */
    public function setChallengeIndicator($challengeIndicator)
    {
        $this->challengeIndicator = $challengeIndicator;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeliveryEmail()
    {
        return $this->deliveryEmail;
    }

    /**
     * @param mixed $deliveryEmail
     * @return ThreedSecure
     */
    public function setDeliveryEmail($deliveryEmail)
    {
        $this->deliveryEmail = $deliveryEmail;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeliveryTimeFrame()
    {
        return $this->deliveryTimeFrame;
    }

    /**
     * @param mixed $deliveryTimeFrame
     * @return ThreedSecure
     */
    public function setDeliveryTimeFrame($deliveryTimeFrame)
    {
        $this->deliveryTimeFrame = $deliveryTimeFrame;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * @param mixed $enabled
     * @return ThreedSecure
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFraudActivity()
    {
        return $this->fraudActivity;
    }

    /**
     * @param mixed $fraudActivity
     * @return ThreedSecure
     */
    public function setFraudActivity($fraudActivity)
    {
        $this->fraudActivity = $fraudActivity;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getGiftCardAmount()
    {
        return $this->giftCardAmount;
    }

    /**
     * @param mixed $giftCardAmount
     * @return ThreedSecure
     */
    public function setGiftCardAmount($giftCardAmount)
    {
        $this->giftCardAmount = $giftCardAmount;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getGiftCardCurrencyCode()
    {
        return $this->giftCardCurrencyCode;
    }

    /**
     * @param mixed $giftCardCurrencyCode
     * @return ThreedSecure
     */
    public function setGiftCardCurrencyCode($giftCardCurrencyCode)
    {
        $this->giftCardCurrencyCode = $giftCardCurrencyCode;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getGiftCardCount()
    {
        return $this->giftCardCount;
    }

    /**
     * @param mixed $giftCardCount
     * @return ThreedSecure
     */
    public function setGiftCardCount($giftCardCount)
    {
        $this->giftCardCount = $giftCardCount;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInstallment()
    {
        return $this->installment;
    }

    /**
     * @param mixed $installment
     * @return ThreedSecure
     */
    public function setInstallment($installment)
    {
        $this->installment = $installment;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMessageCategory()
    {
        return $this->messageCategory;
    }

    /**
     * @param mixed $messageCategory
     * @return ThreedSecure
     */
    public function setMessageCategory($messageCategory)
    {
        $this->messageCategory = $messageCategory;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentAccountIndicator()
    {
        return $this->paymentAccountIndicator;
    }

    /**
     * @param mixed $paymentAccountIndicator
     * @return ThreedSecure
     */
    public function setPaymentAccountIndicator($paymentAccountIndicator)
    {
        $this->paymentAccountIndicator = $paymentAccountIndicator;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentAccountAge()
    {
        return $this->paymentAccountAge;
    }

    /**
     * @param mixed $paymentAccountAge
     * @return ThreedSecure
     */
    public function setPaymentAccountAge($paymentAccountAge)
    {
        $this->paymentAccountAge = $paymentAccountAge;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPreOrderIndicator()
    {
        return $this->preOrderIndicator;
    }

    /**
     * @param mixed $preOrderIndicator
     * @return ThreedSecure
     */
    public function setPreOrderIndicator($preOrderIndicator)
    {
        $this->preOrderIndicator = $preOrderIndicator;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPreOrderDate()
    {
        return $this->preOrderDate;
    }

    /**
     * @param mixed $preOrderDate
     * @return ThreedSecure
     */
    public function setPreOrderDate($preOrderDate)
    {
        $this->preOrderDate = $preOrderDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPriorAuthenticationData()
    {
        return $this->priorAuthenticationData;
    }

    /**
     * @param mixed $priorAuthenticationData
     * @return ThreedSecure
     */
    public function setPriorAuthenticationData($priorAuthenticationData)
    {
        $this->priorAuthenticationData = $priorAuthenticationData;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPriorAuthenticationMethod()
    {
        return $this->priorAuthenticationMethod;
    }

    /**
     * @param mixed $priorAuthenticationMethod
     * @return ThreedSecure
     */
    public function setPriorAuthenticationMethod($priorAuthenticationMethod)
    {
        $this->priorAuthenticationMethod = $priorAuthenticationMethod;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPriorAuthenticationTime()
    {
        return $this->priorAuthenticationTime;
    }

    /**
     * @param mixed $priorAuthenticationTime
     * @return ThreedSecure
     */
    public function setPriorAuthenticationTime($priorAuthenticationTime)
    {
        $this->priorAuthenticationTime = $priorAuthenticationTime;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPriorAuthenticationRef()
    {
        return $this->priorAuthenticationRef;
    }

    /**
     * @param mixed $priorAuthenticationRef
     * @return ThreedSecure
     */
    public function setPriorAuthenticationRef($priorAuthenticationRef)
    {
        $this->priorAuthenticationRef = $priorAuthenticationRef;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProductCode()
    {
        return $this->productCode;
    }

    /**
     * @param mixed $productCode
     * @return ThreedSecure
     */
    public function setProductCode($productCode)
    {
        $this->productCode = $productCode;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRecurringEnd()
    {
        return $this->recurringEnd;
    }

    /**
     * @param mixed $recurringEnd
     * @return ThreedSecure
     */
    public function setRecurringEnd($recurringEnd)
    {
        $this->recurringEnd = $recurringEnd;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRecurringFrequency()
    {
        return $this->recurringFrequency;
    }

    /**
     * @param mixed $recurringFrequency
     * @return ThreedSecure
     */
    public function setRecurringFrequency($recurringFrequency)
    {
        $this->recurringFrequency = $recurringFrequency;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getReorderIndicator()
    {
        return $this->reorderIndicator;
    }

    /**
     * @param mixed $reorderIndicator
     * @return ThreedSecure
     */
    public function setReorderIndicator($reorderIndicator)
    {
        $this->reorderIndicator = $reorderIndicator;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRequestorId()
    {
        return $this->requestorId;
    }

    /**
     * @param mixed $requestorId
     * @return ThreedSecure
     */
    public function setRequestorId($requestorId)
    {
        $this->requestorId = $requestorId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRequestorName()
    {
        return $this->requestorName;
    }

    /**
     * @param mixed $requestorName
     * @return ThreedSecure
     */
    public function setRequestorName($requestorName)
    {
        $this->requestorName = $requestorName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getShippingAddressUsageIndicator()
    {
        return $this->shippingAddressUsageIndicator;
    }

    /**
     * @param mixed $shippingAddressUsageIndicator
     * @return ThreedSecure
     */
    public function setShippingAddressUsageIndicator($shippingAddressUsageIndicator)
    {
        $this->shippingAddressUsageIndicator = $shippingAddressUsageIndicator;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getShippingAddressUsageDate()
    {
        return $this->shippingAddressUsageDate;
    }

    /**
     * @param mixed $shippingAddressUsageDate
     * @return ThreedSecure
     */
    public function setShippingAddressUsageDate($shippingAddressUsageDate)
    {
        $this->shippingAddressUsageDate = $shippingAddressUsageDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getShippingMethodIndicator()
    {
        return $this->shippingMethodIndicator;
    }

    /**
     * @param mixed $shippingMethodIndicator
     * @return ThreedSecure
     */
    public function setShippingMethodIndicator($shippingMethodIndicator)
    {
        $this->shippingMethodIndicator = $shippingMethodIndicator;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getShippingNameIndicator()
    {
        return $this->shippingNameIndicator;
    }

    /**
     * @param mixed $shippingNameIndicator
     * @return ThreedSecure
     */
    public function setShippingNameIndicator($shippingNameIndicator)
    {
        $this->shippingNameIndicator = $shippingNameIndicator;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTotalItems()
    {
        return $this->totalItems;
    }

    /**
     * @param mixed $totalItems
     * @return ThreedSecure
     */
    public function setTotalItems($totalItems)
    {
        $this->totalItems = $totalItems;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMerchantScore()
    {
        return $this->merchantScore;
    }

    /**
     * @param mixed $merchantScore
     * @return ThreedSecure
     */
    public function setMerchantScore($merchantScore)
    {
        $this->merchantScore = $merchantScore;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTransactionCountDay()
    {
        return $this->transactionCountDay;
    }

    /**
     * @param mixed $transactionCountDay
     * @return ThreedSecure
     */
    public function setTransactionCountDay($transactionCountDay)
    {
        $this->transactionCountDay = $transactionCountDay;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTransactionCountYear()
    {
        return $this->transactionCountYear;
    }

    /**
     * @param mixed $transactionCountYear
     * @return ThreedSecure
     */
    public function setTransactionCountYear($transactionCountYear)
    {
        $this->transactionCountYear = $transactionCountYear;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTransactionMode()
    {
        return $this->transactionMode;
    }

    /**
     * @param mixed $transactionMode
     * @return ThreedSecure
     */
    public function setTransactionMode($transactionMode = 'S')
    {
        $this->transactionMode = $transactionMode;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param mixed $version
     * @return ThreedSecure
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }
}