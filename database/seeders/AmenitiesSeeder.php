<?php

namespace Database\Seeders;

use App\Models\Amenities;
use Illuminate\Database\Seeder;

class AmenitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amenities = [
            'Pool (Junior Olympic)',
            'Pool (Olympic)',
            'Racquetball Court',
            'Massage',
            'Spa',
            'Personal Training',
            'Yoga',
            'Spin Class',
            'Smoothie Bar',
            'Day Care',
            'Business Area',
            'Track',
            '24/7',
            'Basketball Court',
            'Showers',
            'Tennis Court',
            'Tanning Beds',
            'Physical Therapy',
            'Zumba',
            'HIIT'
        ];
        foreach ($amenities as $amenity) {
            Amenities::create(['name' => $amenity]);
        }
    }
}
