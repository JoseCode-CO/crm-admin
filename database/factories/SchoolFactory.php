<?php

namespace Database\Factories;

use App\Models\School;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\School>
 */
class SchoolFactory extends Factory
{
    protected $model = School::class;

    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'address' => $this->faker->address,
            'logo' => null,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->unique()->numerify('##########'),
            'website' => $this->faker->url,
        ];
    }
}
