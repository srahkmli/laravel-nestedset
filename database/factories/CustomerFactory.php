<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->name(),
            'created_at'  =>  date('H:i:s', rand(1, 54000)),
            'updated_at'  =>  date('H:i:s', rand(1, 54000)),
        ];
    }
}
