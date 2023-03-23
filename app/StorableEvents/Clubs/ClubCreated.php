<?php

namespace App\StorableEvents\Clubs;

use Spatie\EventSourcing\StoredEvents\ShouldBeStored;

class ClubCreated extends ShouldBeStored
{
    public function __construct(public string $club_id, public array $club)
    {
    }
}
