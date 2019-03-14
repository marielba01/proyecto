<?php

use Illuminate\Database\Seeder;
use App\Proveedores;

class ProveedoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Proveedores::class, 200)->create();
    }
}
