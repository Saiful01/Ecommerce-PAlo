<?php

use App\Shop;
use App\ShopOperator;
use Illuminate\Database\Seeder;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 12; $i++) {
            Shop::create([
                'shop_name' => "Firebox",
                'shop_phone' => "01825435612" . $i,
                'shop_email' => "abc@gmail.com" . $i,
                'user_id' => 2,
                'shop_image' => "/images/shop/1.jpg"
            ]);
            Shop::create([
                'shop_name' => "Firebox",
                'shop_phone' => "01825435612" . $i,
                'shop_email' => "abc@gmail.com" . $i,
                'user_id' => 2,
                'shop_image' => "/images/shop/2.png"
            ]);
            Shop::create([
                'shop_name' => "Firebox",
                'shop_phone' => "01825435612" . $i,
                'shop_email' => "abc@gmail.com" . $i,
                'user_id' => 2,
                'shop_image' => "/images/shop/3.jpg"
            ]);

        }


        ShopOperator::create([
            'user_id' => 2,
            'shop_id' => 1,
            'user_type' => 1,
        ]);


        //Voucher

        \App\Voucher::create([
            'shop_id' => 1,
            'min_value' => 100,
            'max_value' => 500,
            'discount' => 40,
        ]);

        \App\Voucher::create([
            'shop_id' => 1,
            'min_value' => 1000,
            'max_value' => 5000,
            'discount' => 80,
        ]);


    }
}
