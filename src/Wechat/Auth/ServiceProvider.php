<?php
namespace OverNick\Payment\Wechat\Auth;


use OverNick\Payment\Kernel\ServiceContainer;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

/**
 * Class ServiceProvider
 * @package OverNick\Payment\Wechat\Auth
 */
class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        $app['auth'] = function () use ($app){
          return new Client($app);
        };
    }
}