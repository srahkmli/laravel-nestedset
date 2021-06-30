<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Model;
use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'customer_id' => Customer::factory(),
            'address_id' => Customer::factory(),
            'productName' => $this->faker->sentence(),
            'status' => $this->faker->session_status(),
            'created_at'  =>  date('H:i:s', rand(1, 54000)),
            'updated_at'  =>  date('H:i:s', rand(1, 54000)),
        ];
    }
}
