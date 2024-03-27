<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'name' =>'Admin',
            'email' =>'admin@gmail.com',
            'mobile' =>9878675645,
            'password' =>bcrypt('admin@123'),
        ]);
    }
}
