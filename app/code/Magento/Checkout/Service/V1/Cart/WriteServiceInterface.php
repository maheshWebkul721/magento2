<?php
/**
 * @copyright Copyright (c) 2014 X.commerce, Inc. (http://www.magentocommerce.com)
 */
namespace Magento\Checkout\Service\V1\Cart;

/**
 * Cart write service interface.
 */
interface WriteServiceInterface
{
    /**
     * Enables an administrative or guest user to create an empty cart and quote for an anonymous customer.
     *
     * @throws \Magento\Framework\Exception\CouldNotSaveException The empty cart and quote could not be created.
     * @return int Cart ID.
     * @deprecated
     * @see \Magento\Checkout\Api\CartManagementInterface::createEmptyCart
     */
    public function create();

    /**
     * Assigns a specified customer to a specified shopping cart.
     *
     * @param int $cartId The cart ID.
     * @param int $customerId The customer ID.
     * @return boolean
     * @deprecated
     * @see \Magento\Checkout\Api\CartManagementInterface::assignCustomer
     */
    public function assignCustomer($cartId, $customerId);

    /**
     * Places an order for a specified cart.
     *
     * @param int $cartId The cart ID.
     * @return int Order ID.
     * @see \Magento\Checkout\Api\CartManagementInterface::order
     */
    public function order($cartId);
}
