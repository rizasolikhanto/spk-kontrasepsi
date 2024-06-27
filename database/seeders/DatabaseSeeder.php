<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Contraceptives;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name'	=> 'slamet',
            'username'	=> 'slamet123',
            'alamat'	=> 'sambek',
            'tanggal_lahir' => '1990-01-01',
            'email'	=> 'slamet@gmail.com',
            'password'	=> bcrypt('rahasia')
        ]);
        Admin::create([
            'name'	=> 'admin',
            'username'	=> 'admin123',
            'email'	=> 'admin@gmail.com',
            'password'	=> bcrypt('rahasia')
        ]);
        Contraceptives::create([
            'name'=>'IUD',
            'description'=>'test',
            'suggestion'=>'test'
        ]);
        Contraceptives::create([
            'name'=>'Implan',
            'description'=>'test',
            'suggestion'=>'test'
        ]);
        Contraceptives::create([
            'name'=>'suntik kb',
            'description'=>'test',
            'suggestion'=>'test'
        ]);
        Contraceptives::create([
            'name'=>'pil kb',
            'description'=>'test',
            'suggestion'=>'test'
        ]);
        Contraceptives::create([
            'name'=>'tubektomi',
            'description'=>'test',
            'suggestion'=>'test'
        ]);
    }
}
