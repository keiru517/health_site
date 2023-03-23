<?php

namespace App\StorableEvents\Users;

use Spatie\EventSourcing\StoredEvents\ShouldBeStored;

class UserCreated extends ShouldBeStored
{
    public function __construct(public string $user_id, public array $details, public string $role = 'applicant')
    {

    }
}
