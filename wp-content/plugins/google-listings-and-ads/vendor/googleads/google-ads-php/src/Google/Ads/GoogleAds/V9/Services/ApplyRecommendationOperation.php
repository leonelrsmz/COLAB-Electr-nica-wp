<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v9/services/recommendation_service.proto

namespace Google\Ads\GoogleAds\V9\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Information about the operation to apply a recommendation and any parameters
 * to customize it.
 *
 * Generated from protobuf message <code>google.ads.googleads.v9.services.ApplyRecommendationOperation</code>
 */
class ApplyRecommendationOperation extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the recommendation to apply.
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    protected $resource_name = '';
    protected $apply_parameters;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           The resource name of the recommendation to apply.
     *     @type \Google\Ads\GoogleAds\V9\Services\ApplyRecommendationOperation\CampaignBudgetParameters $campaign_budget
     *           Optional parameters to use when applying a campaign budget
     *           recommendation.
     *     @type \Google\Ads\GoogleAds\V9\Services\ApplyRecommendationOperation\TextAdParameters $text_ad
     *           Optional parameters to use when applying a text ad recommendation.
     *     @type \Google\Ads\GoogleAds\V9\Services\ApplyRecommendationOperation\KeywordParameters $keyword
     *           Optional parameters to use when applying keyword recommendation.
     *     @type \Google\Ads\GoogleAds\V9\Services\ApplyRecommendationOperation\TargetCpaOptInParameters $target_cpa_opt_in
     *           Optional parameters to use when applying target CPA opt-in
     *           recommendation.
     *     @type \Google\Ads\GoogleAds\V9\Services\ApplyRecommendationOperation\TargetRoasOptInParameters $target_roas_opt_in
     *           Optional parameters to use when applying target ROAS opt-in
     *           recommendation.
     *     @type \Google\Ads\GoogleAds\V9\Services\ApplyRecommendationOperation\CalloutExtensionParameters $callout_extension
     *           Parameters to use when applying callout extension recommendation.
     *     @type \Google\Ads\GoogleAds\V9\Services\ApplyRecommendationOperation\CallExtensionParameters $call_extension
     *           Parameters to use when applying call extension recommendation.
     *     @type \Google\Ads\GoogleAds\V9\Services\ApplyRecommendationOperation\SitelinkExtensionParameters $sitelink_extension
     *           Parameters to use when applying sitelink extension recommendation.
     *     @type \Google\Ads\GoogleAds\V9\Services\ApplyRecommendationOperation\MoveUnusedBudgetParameters $move_unused_budget
     *           Parameters to use when applying move unused budget recommendation.
     *     @type \Google\Ads\GoogleAds\V9\Services\ApplyRecommendationOperation\ResponsiveSearchAdParameters $responsive_search_ad
     *           Parameters to use when applying a responsive search ad recommendation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V9\Services\RecommendationService::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the recommendation to apply.
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The resource name of the recommendation to apply.
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * Optional parameters to use when applying a campaign budget
     * recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.services.ApplyRecommendationOperation.CampaignBudgetParameters campaign_budget = 2;</code>
     * @return \Google\Ads\GoogleAds\V9\Services\ApplyRecommendationOperation\CampaignBudgetParameters|null
     */
    public function getCampaignBudget()
    {
        return $this->readOneof(2);
    }

    public function hasCampaignBudget()
    {
        return $this->hasOneof(2);
    }

    /**
     * Optional parameters to use when applying a campaign budget
     * recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.services.ApplyRecommendationOperation.CampaignBudgetParameters campaign_budget = 2;</code>
     * @param \Google\Ads\GoogleAds\V9\Services\ApplyRecommendationOperation\CampaignBudgetParameters $var
     * @return $this
     */
    public function setCampaignBudget($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V9\Services\ApplyRecommendationOperation\CampaignBudgetParameters::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Optional parameters to use when applying a text ad recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.services.ApplyRecommendationOperation.TextAdParameters text_ad = 3;</code>
     * @return \Google\Ads\GoogleAds\V9\Services\ApplyRecommendationOperation\TextAdParameters|null
     */
    public function getTextAd()
    {
        return $this->readOneof(3);
    }

    public function hasTextAd()
    {
        return $this->hasOneof(3);
    }

    /**
     * Optional parameters to use when applying a text ad recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.services.ApplyRecommendationOperation.TextAdParameters text_ad = 3;</code>
     * @param \Google\Ads\GoogleAds\V9\Services\ApplyRecommendationOperation\TextAdParameters $var
     * @return $this
     */
    public function setTextAd($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V9\Services\ApplyRecommendationOperation\TextAdParameters::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Optional parameters to use when applying keyword recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.services.ApplyRecommendationOperation.KeywordParameters keyword = 4;</code>
     * @return \Google\Ads\GoogleAds\V9\Services\ApplyRecommendationOperation\KeywordParameters|null
     */
    public function getKeyword()
    {
        return $this->readOneof(4);
    }

    public function hasKeyword()
    {
        return $this->hasOneof(4);
    }

    /**
     * Optional parameters to use when applying keyword recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.services.ApplyRecommendationOperation.KeywordParameters keyword = 4;</code>
     * @param \Google\Ads\GoogleAds\V9\Services\ApplyRecommendationOperation\KeywordParameters $var
     * @return $this
     */
    public function setKeyword($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V9\Services\ApplyRecommendationOperation\KeywordParameters::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Optional parameters to use when applying target CPA opt-in
     * recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.services.ApplyRecommendationOperation.TargetCpaOptInParameters target_cpa_opt_in = 5;</code>
     * @return \Google\Ads\GoogleAds\V9\Services\ApplyRecommendationOperation\TargetCpaOptInParameters|null
     */
    public function getTargetCpaOptIn()
    {
        return $this->readOneof(5);
    }

    public function hasTargetCpaOptIn()
    {
        return $this->hasOneof(5);
    }

    /**
     * Optional parameters to use when applying target CPA opt-in
     * recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.services.ApplyRecommendationOperation.TargetCpaOptInParameters target_cpa_opt_in = 5;</code>
     * @param \Google\Ads\GoogleAds\V9\Services\ApplyRecommendationOperation\TargetCpaOptInParameters $var
     * @return $this
     */
    public function setTargetCpaOptIn($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V9\Services\ApplyRecommendationOperation\TargetCpaOptInParameters::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Optional parameters to use when applying target ROAS opt-in
     * recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.services.ApplyRecommendationOperation.TargetRoasOptInParameters target_roas_opt_in = 10;</code>
     * @return \Google\Ads\GoogleAds\V9\Services\ApplyRecommendationOperation\TargetRoasOptInParameters|null
     */
    public function getTargetRoasOptIn()
    {
        return $this->readOneof(10);
    }

    public function hasTargetRoasOptIn()
    {
        return $this->hasOneof(10);
    }

    /**
     * Optional parameters to use when applying target ROAS opt-in
     * recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.services.ApplyRecommendationOperation.TargetRoasOptInParameters target_roas_opt_in = 10;</code>
     * @param \Google\Ads\GoogleAds\V9\Services\ApplyRecommendationOperation\TargetRoasOptInParameters $var
     * @return $this
     */
    public function setTargetRoasOptIn($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V9\Services\ApplyRecommendationOperation\TargetRoasOptInParameters::class);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * Parameters to use when applying callout extension recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.services.ApplyRecommendationOperation.CalloutExtensionParameters callout_extension = 6;</code>
     * @return \Google\Ads\GoogleAds\V9\Services\ApplyRecommendationOperation\CalloutExtensionParameters|null
     */
    public function getCalloutExtension()
    {
        return $this->readOneof(6);
    }

    public function hasCalloutExtension()
    {
        return $this->hasOneof(6);
    }

    /**
     * Parameters to use when applying callout extension recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.services.ApplyRecommendationOperation.CalloutExtensionParameters callout_extension = 6;</code>
     * @param \Google\Ads\GoogleAds\V9\Services\ApplyRecommendationOperation\CalloutExtensionParameters $var
     * @return $this
     */
    public function setCalloutExtension($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V9\Services\ApplyRecommendationOperation\CalloutExtensionParameters::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Parameters to use when applying call extension recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.services.ApplyRecommendationOperation.CallExtensionParameters call_extension = 7;</code>
     * @return \Google\Ads\GoogleAds\V9\Services\ApplyRecommendationOperation\CallExtensionParameters|null
     */
    public function getCallExtension()
    {
        return $this->readOneof(7);
    }

    public function hasCallExtension()
    {
        return $this->hasOneof(7);
    }

    /**
     * Parameters to use when applying call extension recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.services.ApplyRecommendationOperation.CallExtensionParameters call_extension = 7;</code>
     * @param \Google\Ads\GoogleAds\V9\Services\ApplyRecommendationOperation\CallExtensionParameters $var
     * @return $this
     */
    public function setCallExtension($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V9\Services\ApplyRecommendationOperation\CallExtensionParameters::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Parameters to use when applying sitelink extension recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.services.ApplyRecommendationOperation.SitelinkExtensionParameters sitelink_extension = 8;</code>
     * @return \Google\Ads\GoogleAds\V9\Services\ApplyRecommendationOperation\SitelinkExtensionParameters|null
     */
    public function getSitelinkExtension()
    {
        return $this->readOneof(8);
    }

    public function hasSitelinkExtension()
    {
        return $this->hasOneof(8);
    }

    /**
     * Parameters to use when applying sitelink extension recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.services.ApplyRecommendationOperation.SitelinkExtensionParameters sitelink_extension = 8;</code>
     * @param \Google\Ads\GoogleAds\V9\Services\ApplyRecommendationOperation\SitelinkExtensionParameters $var
     * @return $this
     */
    public function setSitelinkExtension($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V9\Services\ApplyRecommendationOperation\SitelinkExtensionParameters::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * Parameters to use when applying move unused budget recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.services.ApplyRecommendationOperation.MoveUnusedBudgetParameters move_unused_budget = 9;</code>
     * @return \Google\Ads\GoogleAds\V9\Services\ApplyRecommendationOperation\MoveUnusedBudgetParameters|null
     */
    public function getMoveUnusedBudget()
    {
        return $this->readOneof(9);
    }

    public function hasMoveUnusedBudget()
    {
        return $this->hasOneof(9);
    }

    /**
     * Parameters to use when applying move unused budget recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.services.ApplyRecommendationOperation.MoveUnusedBudgetParameters move_unused_budget = 9;</code>
     * @param \Google\Ads\GoogleAds\V9\Services\ApplyRecommendationOperation\MoveUnusedBudgetParameters $var
     * @return $this
     */
    public function setMoveUnusedBudget($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V9\Services\ApplyRecommendationOperation\MoveUnusedBudgetParameters::class);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * Parameters to use when applying a responsive search ad recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.services.ApplyRecommendationOperation.ResponsiveSearchAdParameters responsive_search_ad = 11;</code>
     * @return \Google\Ads\GoogleAds\V9\Services\ApplyRecommendationOperation\ResponsiveSearchAdParameters|null
     */
    public function getResponsiveSearchAd()
    {
        return $this->readOneof(11);
    }

    public function hasResponsiveSearchAd()
    {
        return $this->hasOneof(11);
    }

    /**
     * Parameters to use when applying a responsive search ad recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.services.ApplyRecommendationOperation.ResponsiveSearchAdParameters responsive_search_ad = 11;</code>
     * @param \Google\Ads\GoogleAds\V9\Services\ApplyRecommendationOperation\ResponsiveSearchAdParameters $var
     * @return $this
     */
    public function setResponsiveSearchAd($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V9\Services\ApplyRecommendationOperation\ResponsiveSearchAdParameters::class);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getApplyParameters()
    {
        return $this->whichOneof("apply_parameters");
    }

}

