<?php

namespace Filter;

use Zfegg\Utils\Filter\EmptyDeviceUdid;
use PHPUnit\Framework\TestCase;

class EmptyDeviceUdidTest extends TestCase
{

    public function testFilter()
    {
        $filter = new EmptyDeviceUdid();

        $exists = '123456-789123-abdefg';

        $this->assertNull($filter->filter('000000-000000-00000'));
        $this->assertEquals($exists, $filter->filter($exists));
    }
}
