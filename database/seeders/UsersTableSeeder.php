<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

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
            'name'	=> str_random(20),
            'username'	=> str_random(10),
            'alamat'	=> str_random(40),
            'tanggal_lahir' => '1990-01-01',
            'email'	=> 'slamet@gmail.com',
            'password'	=> bcrypt('rahasia')
        ]);
    }
}
