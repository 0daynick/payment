<?php
namespace OverNick\Payment\Wechat\Pay;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

/**
 * Class ServiceProvider
 * @package OverNick\Payment\Wechat\Base
 */
class ServiceProvider implements ServiceProviderInterface
{
    /**
     * @param Container $app
     */
    public function register(Container $app)
    {
        $app['pay'] = function () use($app){
            return new Client($app);
        };
    }
}