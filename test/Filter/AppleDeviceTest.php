<?php

namespace Filter;

use Zfegg\Utils\Filter\AppleDevice;
use PHPUnit\Framework\TestCase;

class AppleDeviceTest extends TestCase
{
    public function testFilter()
    {
        $filter = new AppleDevice();

        $this->assertEquals('iPhone 7', $filter->filter('iPhone9,1'));
        $this->assertEquals('iPhoneUnknown', $filter->filter('iPhoneUnknown'));
    }
}
