<?php

namespace Zfegg\Utils\Validator;

use Laminas\Validator\AbstractValidator;

/**
 * 苹果IDFA验证
 *
 * @package Zfegg\Utils\Validator
 * @author  moln.xie@gmail.com
 */
class AppleIdfa extends AbstractValidator
{
    const INVALID_VALUE = 'Invalid idfa format.';

    public function isValid($value)
    {
        $this->setValue($value);
        if (! preg_match('/^\w{8}\-\w{4}\-\w{4}\-\w{4}\-\w{12}$/', $value)) {
            $this->error(self::INVALID_VALUE);

            return false;
        }

        return true;
    }
}
