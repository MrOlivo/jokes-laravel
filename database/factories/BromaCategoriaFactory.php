<?php

namespace Database\Factories;

use App\Models\Broma;
use App\Models\BromaCategoria;
use App\Models\Categoria;
use Illuminate\Database\Eloquent\Factories\Factory;

class BromaCategoriaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BromaCategoria::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'broma_id' => rand(1, Broma::all()->count('*')),
            'categoria_id' => rand(1, Categoria::all()->count('*')),
        ];
    }
}
