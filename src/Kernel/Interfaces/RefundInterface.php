<?php
namespace OverNick\Payment\Kernel\Interfaces;

/**
 * Interface RefundInterface
 * @package OverNick\Payment\Kernel\Interfaces
 */
interface RefundInterface
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
}