<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        if (!User::where('email', 'betofoxnettelecom@gmail.com')->first()) {
            User::create([
                'name' => 'Humberto Ribeiro',
                'email' => 'betofoxnettelecom@gmail.com',
                'password' => Hash::make('betofoxnet@', ['rounds' => 12])
            ]);
        };
    }
}
