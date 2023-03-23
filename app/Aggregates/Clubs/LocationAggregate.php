<?php

namespace App\Aggregates\Clubs;

use App\Exceptions\Clubs\LocationException;
use App\StorableEvents\Clubs\ClubCreated;
use Spatie\EventSourcing\AggregateRoots\AggregateRoot;

class LocationAggregate extends AggregateRoot
{
    protected string|null $club_id = null;
    public function createNewClub(array $club) : self
    {
        if(!is_null($this->club_id))
        {
            throw LocationException::clubAlreadyExist();
        }

        $this->recordThat(new ClubCreated($this->uuid(), $club));
        return $this;
    }
}
