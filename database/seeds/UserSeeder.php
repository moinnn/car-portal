<?php

use App\Src\User\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'ZaL',
            'email' => 'z4ls@live.com',
            'password' => Hash::make('darkage'),
            'active' => 1,
            'confirmation_code' => 'asdasdas'
        ]);
        User::create([
            'name' => 'Hamdhan',
            'email' => 'h4mdh4n@live.com',
            'password' => Hash::make('darkage'),
            'active' => 1,
            'confirmation_code' => 'asdasdas'
        ]);
        User::create([
            'name' => 'Faiz',
            'email' => 'faiz@live.com',
            'password' => Hash::make('darkage'),
            'active' => 1,
            'confirmation_code' => 'asdasdas'
        ]);
        User::create([
            'name' => 'Hashir',
            'email' => 'hashir@live.com',
            'password' => Hash::make('darkage'),
            'active' => 1,
            'confirmation_code' => 'asdasdas'
        ]);
    }
}