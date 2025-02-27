<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'John',
            'email'=>'fhgcuyjbv@example.com',
            'password'=> Hash::make('secret'),

        ]);
        /*\App\Models\User::factory(10)->create();
        \App\Models\User::factory()->create([
            'email'=> 'ustidan@yozilgan.email'
        ]);*/
    }
}
