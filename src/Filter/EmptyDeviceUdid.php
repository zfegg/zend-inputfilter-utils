<?php

namespace Zfegg\Utils\Filter;

use Zend\Filter\AbstractFilter;

/**
 * 空设备ID格式过滤器,用于过滤无效IDFA,MAC,IMEI等
 *
 * @package Zfegg\Utils\Filter
 * @author moln.xie@gmail.com
 */
class EmptyDeviceUdid extends AbstractFilter
{

    public function filter($value)
    {
        if (! str_replace(['-', '0', ':'], '', $value)) {
            return null;
        }

        return $value;
    }
}
