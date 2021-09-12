<?php

namespace Database\Factories;

use App\Models\Subscritor;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubscritorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Subscritor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
        ];
    }
}
