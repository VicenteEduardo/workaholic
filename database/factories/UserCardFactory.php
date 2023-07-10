<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\UserCard;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserCardFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserCard::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => 'Cartão de Utilizador ',
            'description' => "
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, voluptatum.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, voluptatum.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, voluptatum.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, voluptatum.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, voluptatum.
            "
        ];
    }
}


