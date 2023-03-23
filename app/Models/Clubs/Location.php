<?php

namespace App\Models\Clubs;

use App\Models\Amenities;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Location extends Model
{
    use HasFactory, SoftDeletes, CrudTrait;

    public function amenities()
    {
        return $this->belongsToMany(Amenities::class, 'locations_amenities',  'location_id', 'amenity_id');
    }

}
