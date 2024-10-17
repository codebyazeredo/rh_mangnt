<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('users')->insert([
            'department_id' => 1,
            'name' => 'Administrador',
            'email' => 'admin@rhmanagement.com',
            'email_verified_at' => now(),
            'password' => bcrypt('admin'),
            'role' => 'admin',
            'permissions' => '["admin"]',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('user_details')->insert([
            'user_id' => 1,
            'address' => 'Rua do Administrador, 123',
            'zip_code' => '88801530',
            'city' => 'Criciúma',
            'phone' => '48998033577',
            'salary' => 8000.00,
            'admission_date' => '2024-10-17',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('departments')->insert([
            'name' => 'Administração',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
