<?php
namespace OverNick\Payment;

use OverNick\Payment\Alipay\AliPayApp;
use OverNick\Payment\Kernel\Tools\PayCode;
use OverNick\Payment\Wechat\WechatPayApp;
use OverNick\Support\Manager;

/**
 * Class PaymentManage
 *
 * @property \OverNick\Payment\Kernel\Interfaces\OrderInterface      $order
 * @property \OverNick\Payment\Kernel\Interfaces\RefundInterface     $refund
 * @property \OverNick\Payment\Kernel\Interfaces\BaseInterface       $base
 *
 * @method AliPayApp|WechatPayApp driver($driver = null)
 *
 * @package OverNick\Payment
 */
class PaymentManage extends Manager
{
    /**
     * @return AliPayApp
     */
    protected function createAlipayDriver()
    {
        return new AliPayApp($this->getConfigure('drivers.'.PayCode::DRIVER_ALIPAY));
    }

    /**
     * @return WechatPayApp
     */
    protected function createWechatPayDriver()
    {
        return new WechatPayApp($this->getConfigure('drivers.'.PayCode::DRIVER_WECHATPAY));
    }
}