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
        Shop::create([
            'shop_name' => "Arong",
            'shop_phone' => "01825435612",
            'shop_email' => "abc@gmail.com",
            'user_id' => 2,
            'shop_image' => "/images/shop/arong.png"
        ]);
        Shop::create([
            'shop_name' => "Sailor",
            'shop_phone' => "01825435612",
            'shop_email' => "abc@gmail.com",
            'user_id' => 2,
            'shop_image' => "/images/shop/sailor.png"
        ]);
        Shop::create([
            'shop_name' => "Apex",
            'shop_phone' => "01825435612",
            'shop_email' => "abc@gmail.com",
            'user_id' => 2,
            'shop_image' => "/images/shop/apex.png"
        ]);
        Shop::create([
            'shop_name' => "Bata",
            'shop_phone' => "01825435612",
            'shop_email' => "abc@gmail.com",
            'user_id' => 2,
            'shop_image' => "/images/shop/bata.jpg"
        ]);
        Shop::create([
            'shop_name' => "Sara",
            'shop_phone' => "01825435612",
            'shop_email' => "abc@gmail.com",
            'user_id' => 2,
            'shop_image' => "/images/shop/sara.jpg"
        ]);
        Shop::create([
            'shop_name' => "Darji Bari",
            'shop_phone' => "01825435612",
            'shop_email' => "abc@gmail.com",
            'user_id' => 2,
            'shop_image' => "/images/shop/darjibari.png"
        ]);



    }
}
