<?php

/*
 * Copyright 2011-2017 Ning, Inc.
 * Copyright 2014 Groupon, Inc.
 * Copyright 2014 The Billing Project, LLC
 *
 * The Billing Project licenses this file to you under the Apache License, version 2.0
 * (the "License"); you may not use this file except in compliance with the
 * License.  You may obtain a copy of the License at:
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.  See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */
namespace Killbill\Client\Type;


/*
 *                       DO NOT EDIT!!!
 *    File automatically generated by killbill-java-parser (git@github.com:killbill/killbill-java-parser.git)
 */


class CatalogAttributes extends \Killbill\Client\Resource {
  protected $name = null;
  protected $effectiveDate = null;
  protected $currencies = null;
  protected $products = null;
  protected $priceLists = null;

  public function setName ($name) {
    $this->name = $name;
  }

  public function getName () {
    return $this->name;
  }

  public function setEffectiveDate ($effectiveDate) {
    $this->effectiveDate = $effectiveDate;
  }

  public function getEffectiveDate () {
    return $this->effectiveDate;
  }

  public function setCurrencies ($currencies) {
    $this->currencies = $currencies;
  }

  public function getCurrencies () {
    return $this->currencies;
  }

  public function setProducts ($products) {
    $this->products = $products;
  }

  public function getProducts () {
    return $this->products;
  }

  public function setPriceLists ($priceLists) {
    $this->priceLists = $priceLists;
  }

  public function getPriceLists () {
    return $this->priceLists;
  }

}