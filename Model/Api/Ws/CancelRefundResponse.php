<?php
/**
 * PayZen V2-Payment Module version 2.4.11 for Magento 2.x. Support contact : support@payzen.eu.
 *
 * @category  Payment
 * @package   Payzen
 * @author    Lyra Network (http://www.lyra-network.com/)
 * @copyright 2014-2019 Lyra Network and contributors
 * @license   
 */

namespace Lyranetwork\Payzen\Model\Api\Ws;

class CancelRefundResponse extends WsResponse
{
    /**
     * @var CancelRefundResult $cancelRefundResult
     */
    private $cancelRefundResult = null;

    /**
     * @return CancelRefundResult
     */
    public function getCancelRefundResult()
    {
        return $this->cancelRefundResult;
    }

    /**
     * @param CancelRefundResult $cancelRefundResult
     * @return CancelRefundResponse
     */
    public function setCancelRefundResult($cancelRefundResult)
    {
        $this->cancelRefundResult = $cancelRefundResult;
        return $this;
    }
}
