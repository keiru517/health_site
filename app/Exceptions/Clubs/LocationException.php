<?php

namespace App\Exceptions\Clubs;

use DomainException;

class LocationException extends DomainException
{
    public static function clubAlreadyExist() : self
    {
        return new self('Location already exists!');
    }

    public static function clubDoesNotExist() : self
    {
        return new self('Location you were sent to is not here!');
    }
}
