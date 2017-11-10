<?php

namespace Validator;

use Zfegg\Utils\Validator\SimpleMobile;
use PHPUnit\Framework\TestCase;

class SimpleMobileTest extends TestCase
{

    public function testIsValid()
    {
        $validator = new SimpleMobile();
        $val = '15000000000';
        $val2 = '1500000000';

        $this->assertTrue($validator->isValid($val));
        $this->assertFalse($validator->isValid($val2));
    }
}
