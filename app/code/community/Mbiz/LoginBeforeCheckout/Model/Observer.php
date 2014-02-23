<?php
/**
 * This file is part of Mbiz_LoginBeforeCheckout for Magento.
 *
 * @license All rights reserved
 * @author Jacques Bodin-Hullin <@jacquesbh> <j.bodinhullin@monsieurbiz.com>
 * @category Mbiz
 * @package Mbiz_LoginBeforeCheckout
 * @copyright Copyright (c) 2014 Monsieur Biz (http://monsieurbiz.com/)
 */

/**
 * Observer Model
 * @package Mbiz_LoginBeforeCheckout
 */
class Mbiz_LoginBeforeCheckout_Model_Observer extends Mage_Core_Model_Abstract
{

// Monsieur Biz Tag NEW_CONST

// Monsieur Biz Tag NEW_VAR

    /**
     * Login the customer before checkout
     * @see controller_action_predispatch_checkout_onepage_index
     */
    public function loginBeforeCheckout(Varien_Event_Observer $observer)
    {
        $action = Mage::app()->getFrontController()->getAction();
        if (!Mage::getSingleton('customer/session')->authenticate($action)) {
            Mage::app()->getResponse()->sendHeaders();
            exit;
        }
    }

// Monsieur Biz Tag NEW_METHOD

}