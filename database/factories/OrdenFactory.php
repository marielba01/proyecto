<?php

use Faker\Generator as Faker;


    $factory->define(App\Orden::class, function (Faker $faker) {
    return [
        'proveedor' => $faker->randomElement(['Maquine','Mediterráneo Comunicación','Navas & Navas Asociados', 'Fress', 'Spondylu', 'Mercanobo', 'Lideres', 'Eight Nine', 'Variedad Three', 'Cortafuegos Blue', 'Magenta IG', 'Emprendedores Neo', 'Alejandria Ori', 'Honolulu Asociados', 'Kokori Emprededores', 'Movil Mega']),
        'orden_compra' => mt_rand(1000000,18700000),
        'cant_creacion' => 500000,
        'cant_existente' =>mt_rand(0,490000),

    ];
});
