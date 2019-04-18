<?php
namespace OverNick\Payment\Alipay\Refund;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

/**
 * Class ServiceProvider
 * @package OverNick\Payment\Alipay\Refund
 */
class ServiceProvider implements ServiceProviderInterface
{

    public function register(Container $app)
    {
        $app['refund'] = function() use($app){
            return new Client($app);
        };
    }

}