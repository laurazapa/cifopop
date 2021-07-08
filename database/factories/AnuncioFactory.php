<?php

namespace Database\Factories;

use App\Models\Anuncio;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class AnuncioFactory extends Factory{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Anuncio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(){
        return [
            'titulo' => $this->faker->word(),
            'descripcion' => $this->faker->text(200),
            'precio' => $this->faker->randomFloat(2, 5, 10000),
            'user_id'=> User::all()->random()->id //per posar un usuari aleatori dels que tenim creats
        ];
    }
}
