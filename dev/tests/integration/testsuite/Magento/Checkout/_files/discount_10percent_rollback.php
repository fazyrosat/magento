<?php
/**
 * SalesRule 10% discount coupon
 *
 * Copyright © 2013-2017 Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

/** @var \Magento\SalesRule\Model\Rule $salesRule */
$salesRule = \Magento\TestFramework\Helper\Bootstrap::getObjectManager()->create('Magento\SalesRule\Model\Rule');
$salesRule->load('Test Coupon', 'name');
$salesRule->delete();
