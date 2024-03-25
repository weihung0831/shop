<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menus = [
            [
                'name' => 'Delicious Burger',
                'description' => 'Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque',
                'price' => 15,
                'category' => 'Burger'
            ],
            [
                'name' => 'Delicious Burger',
                'description' => 'Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque',
                'price' => 15,
                'category' => 'Burger'
            ],
            [
                'name' => 'Delicious Pizza',
                'description' => 'Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque',
                'price' => 20,
                'category' => 'Pizza'
            ],
            [
                'name' => 'Delicious Pizza',
                'description' => 'Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque',
                'price' => 20,
                'category' => 'Pizza'
            ],
            [
                'name' => 'Delicious Pasta',
                'description' => 'Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque',
                'price' => 18,
                'category' => 'Pasta'
            ],
            [
                'name' => 'Delicious Pasta',
                'description' => 'Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque',
                'price' => 18,
                'category' => 'Pasta'
            ],
            [
                'name' => 'French Fries',
                'description' => 'Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque',
                'price' => 10,
                'category' => 'Fries'
            ],
            [
                'name' => 'French Fries',
                'description' => 'Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque',
                'price' => 10,
                'category' => 'Fries'
            ]
        ];

        foreach ($menus as $menu) {
            Menu::create($menu);
        }
    }
}
