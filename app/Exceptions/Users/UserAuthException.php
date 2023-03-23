<?php

namespace App\Exceptions\Users;

use DomainException;

class UserAuthException extends DomainException
{
    public static function userAlreadyExists(string $email) : self
    {
        return new self("User {$email} already exists");
    }
}
