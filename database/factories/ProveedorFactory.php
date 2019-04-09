<?php

use Faker\Generator as Faker;

$factory->define(App\Proveedores::class, function (Faker $faker) {

    return [
        'proveedor' => $faker->randomElement(['Movilnet','Nea','Equis', 'Fress', 'Bolt', 'Maquine', 'Dabliu', 'Eight', 'Three', 'Blue', 'Limber', 'Neron', 'Alejo', 'Dan', 'Ori', 'Koko']),
        'cod_motivo' => str_random(5),
        'motivo' => $faker->randomElement(['PIN VIRTUAL','UNICA','CANTV']),
        'valor_facial' => $faker->randomElement(['1000','1500','2000']),
        'tiraje' =>500000,
        'orden_compra' => mt_rand(1000000,18700000),
        'status' => $faker->randomElement(['Liberar','Por Cargar','Por Enviar', 'Cargado' ]),
        'fecha'=>$faker->dateTimeBetween($startDate = '-9 years', $endDate = 'now'),
    ];
});
