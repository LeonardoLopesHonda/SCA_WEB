<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DecisionArea>
 */
class DecisionAreaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {   
        static $num = 1;
        return [
            'label' => "DA ".str($num++)->trim()->toString(),
            'description' => fake()->realText(200),
        ];
    }
}
