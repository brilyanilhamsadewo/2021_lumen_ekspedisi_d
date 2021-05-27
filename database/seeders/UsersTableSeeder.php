<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'ilham',
            'identity_id' => '12345678345',
            'gender' => 1,
            'address' => 'Jl Sultan Hasanuddin',
            'photo' => 'daengweb.png', //note: tidak ada gambar
            'email' => 'admin@ilham.id',
            'password' => app('hash')->make('secret'),
            'phone_number' => '085343966997',
            'api_token' => Str::random(40),
            'role' => 0,
            'status' => 1
        ]);
    }
}
