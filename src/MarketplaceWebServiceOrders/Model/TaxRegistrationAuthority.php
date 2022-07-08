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
 * MarketplaceWebServiceOrders_Model_TaxRegistrationAuthority
 *
 * Properties:
 * <ul>
 *
 * <li>country: string</li>
 *
 * </ul>
 *
 * @property string $country
 */
class MarketplaceWebServiceOrders_Model_TaxRegistrationAuthority extends MarketplaceWebServiceOrders_Model
{

    public function __construct($data = null)
    {
        $this->_fields = [
            'country' => [
                'FieldValue' => null,
                'FieldType' => 'string'
            ],
        ];
        parent::__construct($data);
    }

    /**
     * Get the value of the country property.
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->_fields['country']['FieldValue'];
    }

    /**
     * Set the value of the country property.
     *
     * @param string $value
     * @return MarketplaceWebServiceOrders_Model_TaxRegistrationAuthority instance
     */
    public function setCountry($value)
    {
        $this->_fields['country']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Check to see if country is set.
     *
     * @return bool
     */
    public function isSetCountry()
    {
        return !is_null($this->_fields['country']['FieldValue']);
    }

    /**
     * Set the value of country, return this.
     *
     * @param string $value
     * @return MarketplaceWebServiceOrders_Model_TaxRegistrationAuthority instance.
     */
    public function withCountry($value)
    {
        $this->setCountry($value);

        return $this;
    }
}
