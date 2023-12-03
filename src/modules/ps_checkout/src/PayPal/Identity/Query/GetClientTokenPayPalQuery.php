<?php
/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License version 3.0
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License version 3.0
 */

namespace PrestaShop\Module\PrestashopCheckout\PayPal\Identity\Query;

use PrestaShop\Module\PrestashopCheckout\Cart\Exception\CartException;
use PrestaShop\Module\PrestashopCheckout\Cart\ValueObject\CartId;
use PrestaShop\Module\PrestashopCheckout\Customer\Exception\CustomerException;
use PrestaShop\Module\PrestashopCheckout\Customer\ValueObject\CustomerId;

class GetClientTokenPayPalQuery
{
    /**
     * @var CartId
     */
    private $cartId;

    /**
     * @var CustomerId|null
     */
    private $customerId;

    /**
     * @param int $cartId
     * @param int|null $customerId
     *
     * @throws CartException
     * @throws CustomerException
     */
    public function __construct($cartId, $customerId = null)
    {
        $this->cartId = new CartId($cartId);
        $this->customerId = $customerId ? new CustomerId($customerId) : null;
    }

    /**
     * @return CartId
     */
    public function getCartId()
    {
        return $this->cartId;
    }

    /**
     * @return CustomerId|null
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }
}
