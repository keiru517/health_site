<?php

namespace App\Projectors\Clubs;

use App\Models\Clubs\Location;
use App\StorableEvents\Clubs\ClubCreated;
use Spatie\EventSourcing\EventHandlers\Projectors\Projector;

class LocationProjector extends Projector
{
    public function onClubCreated(ClubCreated $event)
    {
        $club = Location::create($event->club);
        $club->id = $event->club_id;
        $club->save();
    }
}
