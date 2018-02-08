<?php

namespace Swis\LaravelApi\Exceptions;

use Swis\LaravelApi\Constants\HttpCodes;

class ForbiddenException extends JsonException
{
    protected $code = HttpCodes::HTTP_NOT_FOUND;
    protected $message = 'Not found';
}
