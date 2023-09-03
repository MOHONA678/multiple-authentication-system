<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $admins = [
           
            [  'name' => 'John Smith', 'email' => 'john@email.com',  'password' => Hash::make('secret') ],
            [  'name' => 'James Brown', 'email' => 'james@email.com',  'password' => Hash::make('secret') ],
        ];

        foreach ($admins as $admin) {
            Admin::create($admin);
        }
    }
}
