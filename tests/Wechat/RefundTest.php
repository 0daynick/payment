<?php
namespace OverNick\Payment\Tests\Wechat;

use OverNick\Payment\Kernel\Tools\PayCode;
use OverNick\Payment\Tests\BaseTestCase;

/**
 * 退款相关
 *
 * Class RefundTestCase
 * @package OverNick\Payment\Tests\Wechat
 */
class RefundTest extends BaseTestCase
{
    // 订单号
    protected $order_no = '201904160001';

    // 退单号
    protected $refund_no = '201904200002';

    // 获取
    protected $driver = PayCode::DRIVER_WECHATPAY;

    /**
     * 申请退款
     *
     * @test
     */
    public function refund()
    {
        $result = $this->getPay()->refund->create([
            'out_trade_no' => $this->order_no,
            'out_refund_no' => $this->refund_no,
            'total_fee' => 1,
            'refund_fee' => 1
        ]);

        $this->assertEquals('array', gettype($result));
    }


    /**
     * 查询退款状态
     *
     * @test
     */
    public function query()
    {
        $result = $this->getPay()->refund->query([
            'out_refund_no' => $this->refund_no,
        ]);

        $this->assertEquals('array', gettype($result));
    }
}