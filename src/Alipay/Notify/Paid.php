<?php
namespace OverNick\Payment\Alipay\Notify;

use Closure;

/**
 * Class Paid
 * @package OverNick\Payment\Alipay\Notify
 */
class Paid extends Handler
{
    /**
     * @param Closure $closure
     * @return string
     */
    public function handle(Closure $closure)
    {
        $this->strict(
            call_user_func($closure, $this->getMessage())
        );

        return $this->response();
    }
}