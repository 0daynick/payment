<?php
namespace OverNick\Payment\Tests\Alipay;


use OverNick\Payment\Kernel\Tools\PayCode;
use OverNick\Payment\Tests\BaseTestCase;

/**
 * 资金相关测试
 *
 * Class BalanceTest
 * @package OverNick\Payment\Tests\Alipay
 */
class BalanceTest extends BaseTestCase
{
    protected $driver = PayCode::DRIVER_ALIPAY;

    /**
     * @test
     */
    public function transfer()
    {
        $params = [
            'out_biz_no' => 'D123456798',       // 订单号
            'payee_type' => 'ALIPAY_LOGONID',   // 收款账号类型
            'payee_account' => '111', // 收款账号
            'amount' => '0.1',
            'remark' => '转账给张三'
        ];

        $result = $this->getPay()->balance->transfer($params);

        $this->assertEquals('array', gettype($result));
    }

}