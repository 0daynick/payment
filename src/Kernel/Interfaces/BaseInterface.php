<?php
namespace OverNick\Payment\Kernel\Interfaces;

/**
 * Interface BaseInterface
 * @package OverNick\Payment\Kernel\Interfaces
 */
interface BaseInterface
{
    /**
     * @param array $params
     * @return mixed
     */
    public function create(array $params);
}