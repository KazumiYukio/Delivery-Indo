<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'name' => 'Admin Aplikasi',
            'level' => 'admin',
            'username' => 'adminlogin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('a12345'),
            'remember_token' => Str::random(60)
        ]);

        User::create([
            'name' => 'alexander',
            'level' => 'pegawai',
            'username' => 'alexTG',
            'email' => 'alex@gmail.com',
            'password' => bcrypt('alex007'),
            'remember_token' => Str::random(60)
        ]);

        User::create([
            'name' => 'Anderson',
            'level' => 'pegawai',
            'username' => 'HCander',
            'email' => 'ander@gmail.com',
            'password' => bcrypt('ander1234'),
            'remember_token' => Str::random(60)
        ]);
    }
}
