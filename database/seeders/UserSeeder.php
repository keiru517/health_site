<?php

namespace Database\Seeders;

use App\Aggregates\Users\UserAggregate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;
use Symfony\Component\VarDumper\VarDumper;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dev_dept = [
            [
                'first_name' => 'Developer',
                'last_name' => 'Account',
                'name' => 'dev',
                'email' => 'developers@capeandbay.com',
                'password' => bcrypt('Hello123!'),
                'role' => 'admin'
            ],
        ];

        foreach($dev_dept as $dev)
        {
            VarDumper::dump($dev['name']);
            $role = $dev['role'];
            unset($dev['role']);
            UserAggregate::retrieve(Uuid::uuid4()->toString())
                ->createUser($dev, $role)
                ->persist();
        }
    }
}
