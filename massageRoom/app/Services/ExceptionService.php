<?php

namespace App\Services;

use DomainException;

class ExceptionService
{
    protected function objectFindException()
    {
        throw new DomainException('Object not found!');
    }
}
