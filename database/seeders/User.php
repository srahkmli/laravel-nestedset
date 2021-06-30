<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Customer;
use App\Models\Internet;
use App\Models\Order;
use App\Models\Shop;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $shops = [
            [
                'category_name' => 'book',
                'children' => [
                    [
                        'category_name' => 'comic book',
                        'children' => [
                            ['category_name' => 'Manway Comic Book'],
                            ['category_name' => 'Luxury comic book'],
                            ['category_name' => 'Action comic book'],
                        ],
                    ],
                    [
                        'category_name' => 'textbook',
                        'children' => [
                            ['category_name' => 'commercial'],
                            ['category_name' => 'finance'],
                            ['category_name' => 'Computer Science'],
                        ],
                    ],
                ],
            ],
            [
                'category_name' => 'electrical',
                'children' => [
                    [
                        'category_name' => 'TV',
                        'children' => [
                            ['category_name' => 'monitor'],
                            ['category_name' => 'Blu-ray'],
                        ],
                    ],
                    [
                        'category_name' => 'phone',
                        'children' => [
                            ['category_name' => 'Huawei'],
                            ['category_name' => 'iPhone'],
                            ['category_name' => ' '],
                        ],
                    ],
                ],
            ],
            [
                'category_name' => 'House',
                'children' => [
                    [
                        'category_name' => 'Apartment',
                        'children' => [
                            ['category_name' => 'with Bedroom'],
                            ['category_name' => 'Balcony'],
                        ],
                    ],
                    [
                        'category_name' => 'Compony Building',
                        'children' => [
                            ['category_name' => 'sale'],
                            ['category_name' => 'rent'],
                        ],
                    ],
                ],
            ],

        ];

        foreach ($shops as $shop) {
            Shop::create($shop);
        }


        /*---         ---*/

        Customer::factory()->count(20)->create();
        Address::factory()->count(20)->create();

        for ($i = 1; $i < 25; $i++) {

            Order::factory()->count(rand(1, 5))
                ->state(new Sequence(
                    fn () => ['customer_id' => Customer::all()->random()],
                    ['address_id' => Address::all()->random()],
                ))->create();
        }
         /*---         ---*/
    }
}
