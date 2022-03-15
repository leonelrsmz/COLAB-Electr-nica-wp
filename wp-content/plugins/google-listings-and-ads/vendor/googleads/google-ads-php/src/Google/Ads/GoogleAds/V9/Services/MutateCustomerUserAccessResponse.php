<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v9/services/customer_user_access_service.proto

namespace Google\Ads\GoogleAds\V9\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for customer user access mutate.
 *
 * Generated from protobuf message <code>google.ads.googleads.v9.services.MutateCustomerUserAccessResponse</code>
 */
class MutateCustomerUserAccessResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Result for the mutate.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.services.MutateCustomerUserAccessResult result = 1;</code>
     */
    protected $result = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V9\Services\MutateCustomerUserAccessResult $result
     *           Result for the mutate.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V9\Services\CustomerUserAccessService::initOnce();
        parent::__construct($data);
    }

    /**
     * Result for the mutate.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.services.MutateCustomerUserAccessResult result = 1;</code>
     * @return \Google\Ads\GoogleAds\V9\Services\MutateCustomerUserAccessResult|null
     */
    public function getResult()
    {
        return $this->result;
    }

    public function hasResult()
    {
        return isset($this->result);
    }

    public function clearResult()
    {
        unset($this->result);
    }

    /**
     * Result for the mutate.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.services.MutateCustomerUserAccessResult result = 1;</code>
     * @param \Google\Ads\GoogleAds\V9\Services\MutateCustomerUserAccessResult $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V9\Services\MutateCustomerUserAccessResult::class);
        $this->result = $var;

        return $this;
    }

}

