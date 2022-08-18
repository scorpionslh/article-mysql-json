<?php

namespace Database\Seeders;

use App\Models\Users;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Users::factory()
            ->count(10000)
            ->hasConfig(1)
            ->hasAddress(3)
            ->hasContact(5)
            ->create();
    }
}
