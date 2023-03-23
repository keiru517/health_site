<?php

namespace Database\Seeders;

use App\Models\Amenities;
use App\Models\Clubs\Location;
use Illuminate\Database\Seeder;

class LocationAmenitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amenities = Amenities::all();
        $locations = Location::all();

        $locations->each(function($location) use($amenities){
            $location_amenities = $amenities->filter(function ($amenity){
                if(rand(0,10) > 6){
                    return true;
                }
            });
            $location->amenities()->sync($location_amenities);
        });
    }
}
