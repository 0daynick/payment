<?php
/**
 * Created by PhpStorm.
 * User: overnic
 * Date: 2018/4/18
 * Time: 13:57
 */
namespace OverNick\Payment\Alipay\Refund;

use OverNick\Payment\Kernel\Client\AlipayBaseClient;
use OverNick\Payment\Kernel\Interfaces\RefundInterface;
use OverNick\Payment\Kernel\Tools\BizContent;

/**
 * 退款
 *
 * Class Client
 * @package OverNick\Payment\Alipay\Refund
 */
class Client extends AlipayBaseClient implements RefundInterface
{
    /**
     * 创建退款
     *
     * @param array $params
     * @return array
     */
    public function create(array $params)
    {
        $params['method'] = 'alipay.trade.refund';

        return $this->request($params);
    }

    /**
     * 退款查询
     *
     * @param array $params
     * @return array
     */
    public function query(array $params)
    {
        $params['method'] = 'alipay.trade.fastpay.refund.query';

        return $this->request($params);
    }

    /**
     * 通过支付宝订单号和退款号查询退款状态
     *
     * @param $trade_no
     * @param $out_request_no
     * @param array $params
     * @return array
     */
    public function queryByTradeNo($trade_no, $out_request_no, array $params = [])
    {
        BizContent::build([
            'trade_no' => $trade_no,
            'out_request_no' => $out_request_no
        ], $params);

        return $this->query($params);
    }

    /**
     * 通过商户订单号和退款号查询退款状态
     *
     * @param $out_trade_no
     * @param $out_request_no
     * @param array $params
     * @return array
     */
    public function queryByOutTradeNo($out_trade_no, $out_request_no, array $params = [])
    {
        BizContent::build([
            'out_trade_no' => $out_trade_no,
            'out_request_no' => $out_request_no
        ], $params);

        return $this->query($params);
    }
}