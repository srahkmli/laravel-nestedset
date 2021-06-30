<?php

namespace Database\Factories;

use App\Models\Internet;
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class InternetFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Internet::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */


    public function definition()
    {
        return [
            'safeEmail' => $this->faker->unique()->safeEmail(),
            'domainName' => $this->faker->unique()->domainName(),
            'url' => $this->faker->unique()->url(),
            'ipv6' => $this->faker->unique()->ipv6(),
        ];
    }
}
