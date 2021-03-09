<?php
namespace Database\Factories;
//Mandamos a llamar a nuestro modelo
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's correponding model.
     * 
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     * 
     * @return array
     */
    public function definition()
    {
        return[
            //
            'title' => $this->faker->sentence,
            'slug' => $this->faker->slug,
            'description' => $this->faker->text(80),
            'image' => $this->faker->imageUrl(1200,720),
            'extract' => $this->faker->text(80),
            'status' => $this->faker->randomElement([1,2]),
            //declaramos las llaves foraneas
            'user_id' => rand(1,100),
            'category_id' => rand(1,100),
        ];
    }
}