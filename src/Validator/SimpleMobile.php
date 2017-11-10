<?php

namespace Zfegg\Utils\Validator;

use Zend\Validator\AbstractValidator;

/**
 * Class Mobile
 *
 * @author  moln.xie@gmail.com
 */
class SimpleMobile extends AbstractValidator
{
    const INVALID_MOBILE = 'invalidMobile';

    protected $messageTemplates = [
        self::INVALID_MOBILE => '手机号码格式不正确',
    ];

    public function isValid($value)
    {
        $this->setValue($value);
        if (! preg_match('/^1\d{10}$/', $value)) {
            $this->error(self::INVALID_MOBILE);

            return false;
        }

        return true;
    }
}
