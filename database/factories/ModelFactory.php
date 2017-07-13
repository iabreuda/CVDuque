<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Cliente::class, function (Faker\Generator $faker) {
    return [
        'nome'          => $faker->name,
        'email'         => $faker->unique()->freeEmail,
        'celular'       => $faker->numberBetween($min = 21900000000, $max = 21999999999),
        'telefone'      => $faker->numberBetween($min = 2120000000, $max = 2139999999),
        'cpf'           => $faker->numberBetween($min = 00000000000, $max = 99999999999),
        'cep'           => $faker->numberBetween($min = 20000000, $max = 80000000),
        'logradouro'    => $faker->streetName(),
        'numero'        => $faker->numberBetween($min = 00001, $max = 99999),
        'complemento'   => $faker->secondaryAddress(),
        'bairro'        => $faker->cityPrefix(),
        'estado'        => $faker->state(),
        'municipio'     => $faker->city(),
        "dt_nascimento" => $faker->dateTime($max = '-18 years', $timezone = date_default_timezone_get())
    ];
});

$factory->define(App\Models\Produto::class, function (Faker\Generator $faker) {
    return [
        'nome'         => $faker->unique->word(),
        'descricao'    => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'preco'        => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 999),
        'pontos'       => $faker->numberBetween($min = 10, $max = 900),
        'preco_pontos' => $faker->numberBetween($min = 10, $max = 90000)
    ];
});

$factory->define(App\Models\Venda::class, function (Faker\Generator $faker) {
    return [
        'pontos' => $faker->numberBetween($min = 10, $max = 900),
        'dt_venda' => $faker->dateTime($max = '-1 years', $timezone = date_default_timezone_get()),
        'comentario' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'quantidade' => $faker->numberBetween($min = 1, $max = 10),
        'cliente_id' => $faker->numberBetween(1, 50),
        'produto_id' => $faker->numberBetween(1, 50)
    ];
});
