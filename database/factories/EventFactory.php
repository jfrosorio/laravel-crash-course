<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Event::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(5),
            'description' => $this->faker->text(80),
            'observations' => $this->faker->text(100),
            'image_url' => $this->faker->imageUrl(),
            'highlighted' => $this->faker->boolean(50),
        ];
    }
}
