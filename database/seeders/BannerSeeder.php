<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Banner;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $banners = [
            [
                'title' => 'Fast Food Restaurant',
                'description' => 'Doloremque, itaque aperiam facilis rerum, commodi, temporibus sapiente ad mollitia laborum quam quisquam esse error unde. Tempora ex doloremque, labore, sunt repellat dolore, iste magni quos nihil ducimus libero ipsam.',
            ],
            [
                'title' => 'Vegan Restaurant',
                'description' => 'Savor the ultimate burger experience with our delectable creations. Juicy patties, freshly grilled and nestled between soft buns, topped with mouthwatering ingredients like melted cheese, crisp veggies, and signature sauces. Indulge in pure burger bliss with every bite.',
            ],
            [
                'title' => 'Burger Bliss',
                'description' => 'Indulge in burger perfection at Burger Bliss. Juicy patties, fresh toppings, and mouthwatering sauces create the ultimate burger experience. From classic favorites to creative twists, every bite is pure bliss.',
            ]
        ];

        foreach ($banners as $banner) {
            Banner::create($banner);
        }
    }
}
