<?php

namespace App\Aggregates\Users;

use App\Exceptions\Users\UserAuthException;
use App\StorableEvents\Users\UserCreated;
use Spatie\EventSourcing\AggregateRoots\AggregateRoot;

class UserAggregate extends AggregateRoot
{
    protected string|null $email = null;
    protected string|null $first_name = null;
    protected string|null $role = null;

    public function applyUserCreated(UserCreated $event)
    {
        $this->first_name = $event->details['first_name'];
        $this->email = $event->details['email'];
        $this->role  = $event->role;
    }

    public function createUser(array $details, string $role = 'applicant') : self
    {
        if(!is_null($this->email))
        {
            throw UserAuthException::userAlreadyExists($details['email']);
        }

        $this->recordThat(new UserCreated($this->uuid(), $details, $role));

        return $this;
    }
}
