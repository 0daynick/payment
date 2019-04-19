<?php
namespace OverNick\Payment\Kernel\Tools;

/**
 * 支付常量类
 *
 * Class PayCode
 * @package OverNick\Payment\Kernel\Tools
 */
class PayCode
{
    /**
     * Drivers
     */
    const DRIVER_WECHATPAY = 'wechatpay';
    const DRIVER_ALIPAY = 'alipay';

    /**
     * Wechat Type
     */
    const WECHAT_APP_ID = 'app_id';
    const WECHAT_MINI_APP_ID = 'mini_app_id';

    /**
     * Alipay sign type
     */
    const ALIPAY_SIGN_TYPE_RSA2 ='RSA2';
    const ALIPAY_SIGN_TYPE_RSA = 'RSA';

    /**
     * Wechat pay sign type
     */
    const WECHAT_PAY_SIGN_TYPE_MD5 = 'MD5';
    const WECHAT_PAY_SIGN_TYPE_SHA256 = 'SHA256';

}