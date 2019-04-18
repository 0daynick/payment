<?php
namespace OverNick\Payment\Kernel\Interfaces;

/**
 * Interface OrderInterface
 * @package OverNick\Payment\Kernel\Interfaces
 */
interface OrderInterface
{
    /**
     * @param array $params
     * @return mixed
     */
    public function create(array $params);

    /**
     * @param array $params
     * @return mixed
     */
    public function query(array $params);

    /**
     * @param array $params
     * @return mixed
     */
    public function close(array $params);
}