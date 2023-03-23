<?php

namespace App\Models;

use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    use SoftDeletes, Uuid;

    protected $primaryKey = 'id';

    protected $keyType = 'string';

    public $incrementing = false;

    protected $fillable = ['user_id', 'name', 'value', 'misc', 'active'];

    protected $casts = [
        'misc' => 'array'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

    public static function createOrUpdateRecord($user_id, $detail, $value)
    {
        $model = self::firstOrCreate([
            'user_id' => $user_id,
            'name' => $detail
        ]);

        $model->value = $value;
        $model->save();
    }

}
