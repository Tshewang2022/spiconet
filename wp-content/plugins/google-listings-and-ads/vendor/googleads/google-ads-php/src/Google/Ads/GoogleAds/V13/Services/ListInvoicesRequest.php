<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/services/invoice_service.proto

namespace Google\Ads\GoogleAds\V13\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for fetching the invoices of a given billing setup that were
 * issued during a given month.
 *
 * Generated from protobuf message <code>google.ads.googleads.v13.services.ListInvoicesRequest</code>
 */
class ListInvoicesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The ID of the customer to fetch invoices for.
     *
     * Generated from protobuf field <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $customer_id = '';
    /**
     * Required. The billing setup resource name of the requested invoices.
     * `customers/{customer_id}/billingSetups/{billing_setup_id}`
     *
     * Generated from protobuf field <code>string billing_setup = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $billing_setup = '';
    /**
     * Required. The issue year to retrieve invoices, in yyyy format. Only
     * invoices issued in 2019 or later can be retrieved.
     *
     * Generated from protobuf field <code>string issue_year = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $issue_year = '';
    /**
     * Required. The issue month to retrieve invoices.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.enums.MonthOfYearEnum.MonthOfYear issue_month = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $issue_month = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $customer_id
     *           Required. The ID of the customer to fetch invoices for.
     *     @type string $billing_setup
     *           Required. The billing setup resource name of the requested invoices.
     *           `customers/{customer_id}/billingSetups/{billing_setup_id}`
     *     @type string $issue_year
     *           Required. The issue year to retrieve invoices, in yyyy format. Only
     *           invoices issued in 2019 or later can be retrieved.
     *     @type int $issue_month
     *           Required. The issue month to retrieve invoices.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V13\Services\InvoiceService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The ID of the customer to fetch invoices for.
     *
     * Generated from protobuf field <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customer_id;
    }

    /**
     * Required. The ID of the customer to fetch invoices for.
     *
     * Generated from protobuf field <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setCustomerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->customer_id = $var;

        return $this;
    }

    /**
     * Required. The billing setup resource name of the requested invoices.
     * `customers/{customer_id}/billingSetups/{billing_setup_id}`
     *
     * Generated from protobuf field <code>string billing_setup = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getBillingSetup()
    {
        return $this->billing_setup;
    }

    /**
     * Required. The billing setup resource name of the requested invoices.
     * `customers/{customer_id}/billingSetups/{billing_setup_id}`
     *
     * Generated from protobuf field <code>string billing_setup = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setBillingSetup($var)
    {
        GPBUtil::checkString($var, True);
        $this->billing_setup = $var;

        return $this;
    }

    /**
     * Required. The issue year to retrieve invoices, in yyyy format. Only
     * invoices issued in 2019 or later can be retrieved.
     *
     * Generated from protobuf field <code>string issue_year = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getIssueYear()
    {
        return $this->issue_year;
    }

    /**
     * Required. The issue year to retrieve invoices, in yyyy format. Only
     * invoices issued in 2019 or later can be retrieved.
     *
     * Generated from protobuf field <code>string issue_year = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setIssueYear($var)
    {
        GPBUtil::checkString($var, True);
        $this->issue_year = $var;

        return $this;
    }

    /**
     * Required. The issue month to retrieve invoices.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.enums.MonthOfYearEnum.MonthOfYear issue_month = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getIssueMonth()
    {
        return $this->issue_month;
    }

    /**
     * Required. The issue month to retrieve invoices.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.enums.MonthOfYearEnum.MonthOfYear issue_month = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setIssueMonth($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V13\Enums\MonthOfYearEnum\MonthOfYear::class);
        $this->issue_month = $var;

        return $this;
    }

}

