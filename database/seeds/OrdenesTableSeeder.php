<?php

use Illuminate\Database\Seeder;
use App\Orden;

class OrdenesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Orden::class, 200)->create();
    }
}
