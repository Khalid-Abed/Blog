<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class post extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<10; $i++){
            User::create([
                'name'=>Faker::create()->sentence(5),
                'email'=>Faker::create()->email,
                'password'=>Faker::create()->password
            ]);
        }
    }
}
