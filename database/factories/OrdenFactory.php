<?php

use Faker\Generator as Faker;


    $factory->define(App\Orden::class, function (Faker $faker) {
    return [
        'proveedor' => $faker->randomElement(['MOVILNET','NEA','EQUIS', 'FRESS', 'BOLT', 'MAQUINE', 'DABLIU', 'EIGTH', 'THREE', 'BLUE', 'LIMBER', 'NERON', 'ALEJO', 'DAN', 'ORI', 'KOKO']),
        'orden_compra' => mt_rand(1000000,18700000),
        'cant_creacion' => 500000,
        'cant_existente' =>mt_rand(0,490000),

    ];
});
