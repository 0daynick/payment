<?php
namespace OverNick\Payment\Wechat\SandBox;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        $app['sandbox'] = function () use($app){
            return new Client($app);
        };
    }
}