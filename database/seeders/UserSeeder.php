<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => "Alexis Araujo",
            "email" => "alexis.araujo@triara.com",
            "password" => bcrypt("heavymetal")
        ]);

        User::create([
            "name" => "Patsy Morales",
            "email" => "patsy.morales@triara.com",
            "password" => bcrypt("micrush")
        ]);
    }
}
