<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SiteContatoFactory extends Factory
{
    public function definition(): array {
        return [
            'nome' => fake()->name,
            'telefone' => fake()->tollFreePhoneNumber,
            'email' => fake()->unique()->email,
            'motivo_contato' => fake()->numberBetween(1,3),
            'mensagem' => fake()->text(200)
        ];
    }
}
