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
 * MarketplaceWebServiceOrders_Model_TaxRegistrationDetailsMember
 *
 * Properties:
 * <ul>
 *
 * <li>Member: MarketplaceWebServiceOrders_Model_TaxRegistrationDetailsMember</li>
 *
 * </ul>
 *
 * @property string $taxRegistrationId
 * @property MarketplaceWebServiceOrders_Model_TaxRegistrationAuthority $taxRegistrationAuthority
 * @property string $taxRegistrationType
 */
class MarketplaceWebServiceOrders_Model_TaxRegistrationDetailsMember extends MarketplaceWebServiceOrders_Model
{

    public function __construct($data = null)
    {
        $this->_fields = [
            'taxRegistrationId' => [
                'FieldValue' => null,
                'FieldType' => 'string'
            ],
            'taxRegistrationAuthority' => [
                'FieldValue' => null,
                'FieldType' => 'MarketplaceWebServiceOrders_Model_TaxRegistrationAuthority'
            ],
            'taxRegistrationType' => [
                'FieldValue' => null,
                'FieldType' => 'string'
            ],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the taxRegistrationId property.
     *
     * @return string|null
     */
    public function getTaxRegistrationId()
    {
        return $this->_fields['taxRegistrationId']['FieldValue'];
    }

    /**
     * Set the value of the taxRegistrationId property.
     *
     * @param string $value
     * @return MarketplaceWebServiceOrders_Model_TaxRegistrationDetailsMember instance
     */
    public function setTaxRegistrationId($value)
    {
        $this->_fields['taxRegistrationId']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if taxRegistrationId is set.
     *
     * @return bool
     */
    public function isSetTaxRegistrationId()
    {
        return !is_null($this->_fields['taxRegistrationId']['FieldValue']);
    }

    /**
     * Set the value of taxRegistrationId, return this.
     *
     * @param string $value
     * @return MarketplaceWebServiceOrders_Model_TaxRegistrationDetailsMember instance.
     */
    public function withTaxRegistrationId($value)
    {
        $this->setTaxRegistrationId($value);

        return $this;
    }

    /**
     * Get the value of the taxRegistrationAuthority property.
     *
     * @return MarketplaceWebServiceOrders_Model_TaxRegistrationAuthority|null
     */
    public function getTaxRegistrationAuthority()
    {
        return $this->_fields['taxRegistrationAuthority']['FieldValue'];
    }

    /**
     * Set the value of the taxRegistrationAuthority property.
     *
     * @param MarketplaceWebServiceOrders_Model_TaxRegistrationAuthority $value
     * @return MarketplaceWebServiceOrders_Model_TaxRegistrationDetailsMember instance
     */
    public function setTaxRegistrationAuthority($value)
    {
        $this->_fields['taxRegistrationAuthority']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if taxRegistrationAuthority is set.
     *
     * @return bool
     */
    public function isSetTaxRegistrationAuthority()
    {
        return !is_null($this->_fields['taxRegistrationAuthority']['FieldValue']);
    }

    /**
     * Set the value of taxRegistrationAuthority, return this.
     *
     * @param MarketplaceWebServiceOrders_Model_TaxRegistrationAuthority $value
     * @return MarketplaceWebServiceOrders_Model_TaxRegistrationDetailsMember instance.
     */
    public function withTaxRegistrationAuthority($value)
    {
        $this->setTaxRegistrationAuthority($value);

        return $this;
    }

    /**
     * Get the value of the taxRegistrationType property.
     *
     * @return string|null
     */
    public function getTaxRegistrationType()
    {
        return $this->_fields['taxRegistrationType']['FieldValue'];
    }

    /**
     * Set the value of the taxRegistrationType property.
     *
     * @param string $value
     * @return MarketplaceWebServiceOrders_Model_TaxRegistrationDetailsMember instance
     */
    public function setTaxRegistrationType($value)
    {
        $this->_fields['taxRegistrationType']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if taxRegistrationType is set.
     *
     * @return bool
     */
    public function isSetTaxRegistrationType()
    {
        return !is_null($this->_fields['taxRegistrationType']['FieldValue']);
    }

    /**
     * Set the value of taxRegistrationType, return this.
     *
     * @param string $value
     * @return MarketplaceWebServiceOrders_Model_TaxRegistrationDetailsMember instance.
     */
    public function withTaxRegistrationType($value)
    {
        $this->setTaxRegistrationType($value);

        return $this;
    }
}
