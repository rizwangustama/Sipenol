<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
                'name' => 'user',
                'address' => 'userAddress'.Str::random(10),
                'contact' => '085456789132',
                'gender' => 'female',
                'email' => 'user@test.com',
                'password' => Hash::make('12345678'),
                'role' => 'user',
        ]);

        $admin = User::create([
            'name' => 'admin',
            'address' => 'adminAddress'.Str::random(10),
            'contact' => '085456789132',
            'gender' => 'female',
            'email' => 'admin@test.com',
            'password' => Hash::make('12345678'),
            'role' => 'admin',
    ]);
    }
}
