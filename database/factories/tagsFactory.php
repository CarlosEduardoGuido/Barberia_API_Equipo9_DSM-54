<?php
namespace Database\Factories;
//Mandamos a llamar a nuestro modelo
use App\Models\tags;
use Illuminate\Database\Eloquent\Factories\Factory;

class tagsFactory extends Factory
{
    /**
     * The name of the factory's correponding model.
     * 
     * @var string
     */
    protected $model = tags::class;

    /**
     * Define the model's default state.
     * 
     * @return array
     */
    public function definition()
    {
        return[
            //
            'name' => $this->faker->word 
        ];
    }
}