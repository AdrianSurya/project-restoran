<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        DB::table("admin")->insert([
            'username' => 'admin',
            'password' => Hash::make('123456'),
            'role' => 'admin'
        ]);
    }
}
