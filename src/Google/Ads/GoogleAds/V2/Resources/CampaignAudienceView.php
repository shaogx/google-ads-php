<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/resources/campaign_audience_view.proto

namespace Google\Ads\GoogleAds\V2\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A campaign audience view.
 * Includes performance data from interests and remarketing lists for Display
 * Network and YouTube Network ads, and remarketing lists for search ads (RLSA),
 * aggregated by campaign and audience criterion. This view only includes
 * audiences attached at the campaign level.
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.resources.CampaignAudienceView</code>
 */
class CampaignAudienceView extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the campaign audience view.
     * Campaign audience view resource names have the form:
     * `customers/{customer_id}/campaignAudienceViews/{campaign_id}~{criterion_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    protected $resource_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           The resource name of the campaign audience view.
     *           Campaign audience view resource names have the form:
     *           `customers/{customer_id}/campaignAudienceViews/{campaign_id}~{criterion_id}`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V2\Resources\CampaignAudienceView::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the campaign audience view.
     * Campaign audience view resource names have the form:
     * `customers/{customer_id}/campaignAudienceViews/{campaign_id}~{criterion_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The resource name of the campaign audience view.
     * Campaign audience view resource names have the form:
     * `customers/{customer_id}/campaignAudienceViews/{campaign_id}~{criterion_id}`
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

}

