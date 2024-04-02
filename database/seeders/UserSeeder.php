<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([

        'name'=>'Abbas Ibrahim',
        'email'=>'admin@gmail.com',
        'phone'=>'08011112222',
        'address'=>'Kaduna State',
        'user_type'=>'Admin',
        'status'=>'Active',
        'password'=>Hash::make('Admin123'),

        ]);

        $user = User::create([
            'name'=>'Olaniyi Ibrahim',
            'email'=>'user@gmail.com',
            'phone'=>'08033334444',
            'address'=>'Kano Road,Kaduna',
            'user_type'=>'User',
            'status'=>'Active',
            'password'=>Hash::make('User123'),
        ]);
    }
}
