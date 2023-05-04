<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert(['name'=>'ravi',
            'Fk_department'=>2,
            'Fk_designation'=>3,
            'Phone_number'=>'9999999999'
    ]);   
    }
}
