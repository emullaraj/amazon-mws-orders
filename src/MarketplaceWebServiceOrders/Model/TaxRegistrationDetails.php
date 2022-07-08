<?php
/*******************************************************************************
 * Copyright 2009-2017 Amazon Services. All Rights Reserved.
 * Licensed under the Apache License, Version 2.0 (the "License");
 *
 * You may not use this file except in compliance with the License.
 * You may obtain a copy of the License at: http://aws.amazon.com/apache2.0
 * This file is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR
 * CONDITIONS OF ANY KIND, either express or implied. See the License for the
 * specific language governing permissions and limitations under the License.
 *******************************************************************************
 * PHP Version 5
 * @category Amazon
 * @package  Marketplace Web Service Orders
 * @version  2013-09-01
 * Library Version: 2017-02-22
 * Generated: Thu Mar 02 12:41:08 UTC 2017
 */

/**
 * @see MarketplaceWebServiceOrders_Model
 */

require_once(dirname(__FILE__).'/../Model.php');

/**
 * MarketplaceWebServiceOrders_Model_TaxRegistrationDetails
 *
 * Properties:
 * <ul>
 *
 * <li>Member: MarketplaceWebServiceOrders_Model_TaxRegistrationDetailsMember</li>
 *
 * </ul>
 */
class MarketplaceWebServiceOrders_Model_TaxRegistrationDetails extends MarketplaceWebServiceOrders_Model
{

    public function __construct($data = null)
    {
        $this->_fields = [
            'member' => [
                'FieldValue' => null,
                'FieldType' => 'MarketplaceWebServiceOrders_Model_TaxRegistrationDetailsMember',
            ],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the member property.
     *
     * @return MarketplaceWebServiceOrders_Model_TaxRegistrationDetailsMember|null
     */
    public function getMember()
    {
        return $this->_fields['member']['FieldValue'];
    }

    /**
     * Set the value of the member property.
     *
     * @param MarketplaceWebServiceOrders_Model_TaxRegistrationDetailsMember $value
     * @return MarketplaceWebServiceOrders_Model_TaxRegistrationDetails instance
     */
    public function setMember($value)
    {
        $this->_fields['member']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if member is set.
     *
     * @return bool
     */
    public function isSetMember()
    {
        return !is_null($this->_fields['member']['FieldValue']);
    }

    /**
     * Set the value of member, return this.
     *
     * @param MarketplaceWebServiceOrders_Model_TaxRegistrationDetailsMember $value
     * @return MarketplaceWebServiceOrders_Model_TaxRegistrationDetails instance.
     */
    public function withMember($value)
    {
        $this->setMember($value);

        return $this;
    }
}
