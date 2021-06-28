<?php

namespace Database\Seeders;

use App\Models\Shop;
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
        ];

        foreach ($shops as $shop) {
            Shop::create($shop);
        }
    }
}
