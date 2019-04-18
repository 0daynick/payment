<?php
namespace OverNick\Payment\Alipay\Pay;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{

    public function register(Container $app)
    {
        $app['pay'] = function () use($app){
            return new Client($app);
        };
    }

}