<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::factory()->create([
            'name' => 'Rico Pahlefi',
            'username' => 'ricopahlefi22',
            'phone_number' => '089528597031',
            'password' => bcrypt('MudahDitebak123!'),
            'level' => 'super-admin',
        ]);

        Admin::factory()->create([
            'name' => 'Ginanti Dwi Putri',
            'username' => 'ginanti',
            'phone_number' => '089694426286',
            'password' => bcrypt('12341234'),
            'level' => 'super-admin',
        ]);

        Admin::factory()->create([
            'name' => 'Administrator',
            'username' => 'admin',
            'phone_number' => '085171121070',
            'password' => bcrypt('12341234'),
            'level' => 'admin',
        ]);
    }
}
