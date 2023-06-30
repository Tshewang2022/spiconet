<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/common/audiences.proto

namespace Google\Ads\GoogleAds\V13\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * User list segment.
 * The Similar Audiences sunset starts May 2023. Refer to
 * https://ads-developers.googleblog.com/2022/11/announcing-deprecation-and-sunset-of.html
 * for other options.
 *
 * Generated from protobuf message <code>google.ads.googleads.v13.common.UserListSegment</code>
 */
class UserListSegment extends \Google\Protobuf\Internal\Message
{
    /**
     * The user list resource.
     *
     * Generated from protobuf field <code>optional string user_list = 1;</code>
     */
    protected $user_list = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $user_list
     *           The user list resource.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V13\Common\Audiences::initOnce();
        parent::__construct($data);
    }

    /**
     * The user list resource.
     *
     * Generated from protobuf field <code>optional string user_list = 1;</code>
     * @return string
     */
    public function getUserList()
    {
        return isset($this->user_list) ? $this->user_list : '';
    }

    public function hasUserList()
    {
        return isset($this->user_list);
    }

    public function clearUserList()
    {
        unset($this->user_list);
    }

    /**
     * The user list resource.
     *
     * Generated from protobuf field <code>optional string user_list = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setUserList($var)
    {
        GPBUtil::checkString($var, True);
        $this->user_list = $var;

        return $this;
    }

}

