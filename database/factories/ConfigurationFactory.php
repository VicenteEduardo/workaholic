<?php

namespace Database\Factories;

use App\Models\Configuration;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ConfigurationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Configuration::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'facebook' => "Aqui vai o link do facebook",
            'youtube' => "Aqui vai o link do Youtube",
            'instagram' => "Aqui vai o link do instagram",
            'email' => "Aqui vai o email",
            'twitter' => "Aqui vai o link do twitter",
            'telefone' => "Aqui vai os telefones separados por uma barra(/)",
            'adress' => "Aqui vai a localização",
        ];
    }
}
