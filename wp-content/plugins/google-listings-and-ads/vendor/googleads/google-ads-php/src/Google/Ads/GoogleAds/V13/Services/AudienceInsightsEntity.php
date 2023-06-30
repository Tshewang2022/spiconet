<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/services/audience_insights_service.proto

namespace Google\Ads\GoogleAds\V13\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Knowledge Graph entity, represented by its machine id.
 *
 * Generated from protobuf message <code>google.ads.googleads.v13.services.AudienceInsightsEntity</code>
 */
class AudienceInsightsEntity extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The machine id (mid) of the Knowledge Graph entity.
     *
     * Generated from protobuf field <code>string knowledge_graph_machine_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $knowledge_graph_machine_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $knowledge_graph_machine_id
     *           Required. The machine id (mid) of the Knowledge Graph entity.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V13\Services\AudienceInsightsService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The machine id (mid) of the Knowledge Graph entity.
     *
     * Generated from protobuf field <code>string knowledge_graph_machine_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getKnowledgeGraphMachineId()
    {
        return $this->knowledge_graph_machine_id;
    }

    /**
     * Required. The machine id (mid) of the Knowledge Graph entity.
     *
     * Generated from protobuf field <code>string knowledge_graph_machine_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setKnowledgeGraphMachineId($var)
    {
        GPBUtil::checkString($var, True);
        $this->knowledge_graph_machine_id = $var;

        return $this;
    }

}

