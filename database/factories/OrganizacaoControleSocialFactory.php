<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class OrganizacaoControleSocialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nome' => 'Organização de Controle Social',
            'representante' => fake()->name(),
            'cnpj' => '000.000.000-00',
            'associacao_id' => 1,
            'data_fundacao' => today(),
            'endereco_id' => 1,
            'contato_id' => 1
        ];
    }
}
