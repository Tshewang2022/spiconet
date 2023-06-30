<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/services/experiment_service.proto

namespace Google\Ads\GoogleAds\V13\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The metadata of the scheduled experiment.
 *
 * Generated from protobuf message <code>google.ads.googleads.v13.services.ScheduleExperimentMetadata</code>
 */
class ScheduleExperimentMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The scheduled experiment.
     *
     * Generated from protobuf field <code>string experiment = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $experiment = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $experiment
     *           Required. The scheduled experiment.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V13\Services\ExperimentService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The scheduled experiment.
     *
     * Generated from protobuf field <code>string experiment = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getExperiment()
    {
        return $this->experiment;
    }

    /**
     * Required. The scheduled experiment.
     *
     * Generated from protobuf field <code>string experiment = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setExperiment($var)
    {
        GPBUtil::checkString($var, True);
        $this->experiment = $var;

        return $this;
    }

}

