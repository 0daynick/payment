<?php

use OverNick\Payment\Kernel\Tools\PayCode;

return [
    /**
     * 默认调用的支付方式
     */
    'default' => PayCode::DRIVER_ALIPAY,
    /**
     *
     */
    'drivers' => [
        /**
         * 支付宝支付
         */
        'alipay' => [
            'driver' => PayCode::DRIVER_ALIPAY,
            // 沙盒模式
            'sandbox' => false,
            //合作身份者ID，签约账号，以2088开头由16位纯数字组成的字符串，查看地址：https://b.alipay.com/order/pidAndKey.htm
            'app_id' => 'xxxxxxx',
            // 应用id
            'pid' => 'xxxxxxx',
            //签名方式，需要使用与证书一致的内容
            'sign_type' => PayCode::ALIPAY_SIGN_TYPE_RSA2,
            // 支付宝的公钥信息
            'alipay_public_key' => 'xxxx',
            //开发者私钥，由开发者自己生成
            'app_private_key' => 'xxxxxxx',
        ],
        /**
         * 微信支付
         */
        'wechatpay' => [
            'driver' => PayCode::DRIVER_WECHATPAY,
            // 沙盒模式
            'sandbox' => false,
            // 可使用的范围：1,2，1表示使用公众号的appid进行操作，2表示使用小程序的appid
            'type' => PayCode::WECHAT_APP_ID,
            // 签名方式，可以默认不修改
            'sign_type' => PayCode::WECHAT_PAY_SIGN_TYPE_MD5,
            // 公众号app id，没有可不填写
            'app_id' => 'xxxx',
            // 小程序的app id，与公众号appid取其一全部填写，填写后才可使用对应的支付功能
            'mini_app_id' => 'xxxx',
            // 商户ID
            'mch_id' => 'your-mch-id',
            // API 密钥
            'key' => 'key-for-signature',
            // 如需使用敏感接口（如退款、发送红包等）需要配置 API 证书路径(登录商户平台下载 API 证书)
            // XXX: 证书配置需要绝对路径！！！！
            'cert_path' => '/path/to/your/cert.pem',
            'key_path' => '/path/to/your/key',
            /**
             * 如不需要使用微信公众号/小程序的Access Token 以下可以忽略不填写
             */
            // 公众号的secret
            'app_secret' => 'xxxxxxxxxx',
            // 小程序的而secret
            'mini_secret'=> '',
        ]
    ]
];