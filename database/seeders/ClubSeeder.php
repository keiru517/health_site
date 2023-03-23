<?php

namespace Database\Seeders;

use App\Aggregates\Clubs\LocationAggregate;
use App\Imports\Clubs\DefaultClubsImport;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Excel;

class ClubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clubs = \Maatwebsite\Excel\Facades\Excel::toArray(new DefaultClubsImport, "/seeding_csvs/tac_clubs.csv", 'local', Excel::CSV);

        foreach ($clubs[0] as $club)
        {
            LocationAggregate::retrieve($club['id'])
                ->createNewClub($club)
                ->persist();
        }

    }
}
