<?php

namespace Database\Factories;

use App\Models\Newsletter;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewsletterFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Newsletter::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' =>$this->faker->email,
            'password' =>$this->faker->password
        ];
    }
}
