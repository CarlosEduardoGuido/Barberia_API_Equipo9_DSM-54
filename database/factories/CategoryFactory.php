<?php
namespace Database\Factories;
//Mandamos a llamar a nuestro modelo
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's correponding model.
     * 
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     * 
     * @return array
     */
    public function definition()
    {
        return[
            //
            'name' => $this->faker->word,
            'description' => $this->faker->text(80),
            'image' => $this->faker->imageUrl(1200,720),
            
        ];
    }
}