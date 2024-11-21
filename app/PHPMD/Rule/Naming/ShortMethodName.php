<?php

namespace App\PHPMD\Rule\Naming;

use PHPMD\Rule\Naming\ShortMethodName as BaseClass;

class ShortMethodName extends BaseClass
{
    protected function getExceptionsList(): array
    {
        return [
            'id',
        ];
    }
}
