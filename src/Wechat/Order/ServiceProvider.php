<?php
namespace OverNick\Payment\Wechat\Order;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

/**
 *
 * Class ServiceProvider
 * @package OverNick\Payment\Wechat\Order
 */
class ServiceProvider implements ServiceProviderInterface
{

    public function register(Container $app)
    {
        $app['order'] = function($app){
            return new Client($app);
        };
    }
}