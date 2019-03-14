<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 20)->create();

        App\User::create([

            'name' =>' ',
            'user' => ' ',
            'password' => bcrypt(' ')
        ]);
    }
}
