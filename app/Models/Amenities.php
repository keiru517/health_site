<?php

namespace App\Models;

use App\Models\Clubs\Location;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Amenities extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = ['name'];

    public function locations()
    {
        return $this->belongsToMany(Location::class, 'locations_amenities');
    }
}
