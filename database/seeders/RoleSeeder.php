<?php

namespace Database\Seeders;

use App\Enums\UserRoleEnum;
use Illuminate\Database\Seeder;
use Silber\Bouncer\BouncerFacade as Bouncer;
use Symfony\Component\VarDumper\VarDumper;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        VarDumper::dump('Adding User Roles');
        collect(UserRoleEnum::cases())->keyBy('name')->each(function($role) {
            VarDumper::dump($role->name);
            Bouncer::role()->firstOrCreate(['name'=> strtolower($role->name)])->update(['title' => $role->value]);
        });
    }
}
