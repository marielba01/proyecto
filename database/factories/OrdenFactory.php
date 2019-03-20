<?php

use Faker\Generator as Faker;


    $factory->define(App\Orden::class, function (Faker $faker) {
    return [
        'proveedor' => $faker->randomElement(['Movilnet','Nea','Equis', 'Fress', 'Bolt', 'Maquine', 'Dabliu', 'Eight', 'Three', 'Blue', 'Limber', 'Neron', 'Alejo', 'Dan', 'Ori', 'Koko']),
        'orden_compra' => mt_rand(1000000,18700000),
        'cant_creacion' => 500000,
        'cant_existente' =>mt_rand(0,490000),

    ];
});
