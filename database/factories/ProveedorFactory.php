<?php

use Faker\Generator as Faker;

$factory->define(App\Proveedores::class, function (Faker $faker) {

    return [
        'proveedor' => $faker->randomElement(['MOVILNET','NEA','EQUIS', 'FRESS', 'BOLT', 'MAQUINE', 'DABLIU', 'EIGTH', 'THREE', 'BLUE', 'LIMBER', 'NERON', 'ALEJO', 'DAN', 'ORI', 'KOKO']),
        'cod_motivo' => str_random(5),
        'motivo' => $faker->randomElement(['PIN VIRTUAL','UNICA','CANTV']),
        'valor_facial' => $faker->randomElement(['1000','1500','2000']),
        'tiraje' =>500000,
        'orden_compra' => mt_rand(1000000,18700000),
        'status' => $faker->randomElement(['LIBERAR','POR CARGAR','POR ENVIAR','SUSPENDIDO', 'CARGADO' ]),
    ];
});
