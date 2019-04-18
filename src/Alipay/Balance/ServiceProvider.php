<?php
namespace OverNick\Payment\Alipay\Balance;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        $app['balance'] = function () use($app){
            return new Client($app);
        };
    }

}