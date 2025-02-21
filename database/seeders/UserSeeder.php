<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "name"=> "a",
            "email"=> "a@a.com",
            "password"=> Hash::make("password"),
        ]);
 
        User::create([
            "name"=> "Pepe",
            "email"=> "pepe@a.com",
            "password"=> Hash::make("password"),
        ]);
 
        User::create([
            "name"=> "Roberto",
            "email"=> "robert@a.com",
            "password"=> Hash::make("password"),
        ]);

        User::factory(5)->create();
    }
}
