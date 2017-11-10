<?php

namespace Validator;

use Zfegg\Utils\Validator\Idcard;
use PHPUnit\Framework\TestCase;

class IdcardTest extends TestCase
{

    public function testIsValid()
    {
        $validator = new Idcard();
        $val18 = '440106198101010155';
        $val15 = '440106810101015';

        $this->assertTrue($validator->isValid($val18));
        $this->assertTrue($validator->isValid($val15));


        $errorVal1 = '44010620810101015123123';
        $errorVal2 = '990106208101010155';

        $this->assertFalse($validator->isValid($errorVal1));
        $this->assertFalse($validator->isValid($errorVal2));
    }
}
