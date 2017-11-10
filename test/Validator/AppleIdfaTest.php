<?php

namespace Validator;

use Zfegg\Utils\Validator\AppleIdfa;
use PHPUnit\Framework\TestCase;

class AppleIdfaTest extends TestCase
{

    public function testIsValid()
    {
        $validator = new AppleIdfa();
        $idfa = '1E2DFA89-496A-47FD-9941-DF1FC4E6484A';

        $this->assertTrue($validator->isValid($idfa));
        $this->assertFalse($validator->isValid('123123123'));
    }
}
