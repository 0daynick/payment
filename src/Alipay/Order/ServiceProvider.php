<?php
namespace OverNick\Payment\Alipay\Order;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        $app['order'] = function () use($app){
            return new Client($app);
        };
    }

}