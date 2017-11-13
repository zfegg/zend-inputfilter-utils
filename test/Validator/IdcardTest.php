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

        //Length error
        $errorVal1 = '44010620810101015123123';
        $this->assertFalse($validator->isValid($errorVal1));

        //Area error
        $errorVal2 = '990106208101010155';
        $this->assertFalse($validator->isValid($errorVal2));

        //Empty
        $this->assertFalse($validator->isValid(false));

        //Length 18 reg error
        $this->assertFalse($validator->isValid('44010619810101015Z'));

        //Length 15 reg error
        $this->assertFalse($validator->isValid('44010681010115Z'));
    }
}
