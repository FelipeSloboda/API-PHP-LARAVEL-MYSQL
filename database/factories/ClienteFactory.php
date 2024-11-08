<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    public function definition(): array
    {
        return [   
            'status' => fake()->boolean(),
            'cpf' => fake()->numerify('###########'),
            'nome' => fake()->name(), 
            'sobrenome' => fake()->lastName(),
            'nascimento' => fake()->date(),
            'email' => fake()->unique()->safeEmail(),
            'telefone' => fake()->phoneNumber(),
            'sexo' => fake()->randomElement(['M','F']),
            'cep' => fake()->postcode(),
        ];
    }
}