<?php
namespace OverNick\Payment\Wechat\Balance;

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
        $app['balance'] = function () use ($app){
          return new Client($app);
        };
    }
}