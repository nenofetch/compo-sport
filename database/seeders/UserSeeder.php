<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $owner = User::create([
            'name' => 'Owner',
            'email' => 'owner@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('1234567890'),
        ]);

        $owner->assignRole('owner');

        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('1234567890'),
        ]);

        $admin->assignRole('admin');
    }
}
