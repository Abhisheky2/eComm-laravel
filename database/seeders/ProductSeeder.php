<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
        	[
        	'name'=>'Samsung Galaxy S21 5G',
        	'price'=>'100000',
        	'description'=>'Triple rear camera setup- Main Camera 12MP Dual Pixel + Ultra Wide 12MP Camera + Tele1 3X 64MP Camera | 10MP front Dual Pixel Camera. (6.2-inch) Dynamic AMOLED 2X Display, FHD+ resolution with 2400 X 1080 pixels resolution, 421 PPI with 16M colours',
        	'category'=>'mobile',
        	'gallery'=>'https://images-na.ssl-images-amazon.com/images/I/91Pn-O%2BYuKL._SL1500_.jpg'
        	],
        	[
        	'name'=>'Samsung Galaxy A21s',
        	'price'=>'14900',
        	'description'=>'48MP (F2.0) quad rear camera +8MP (F2.2) ultra wide camera +2MP (F2.4) depth camera +2MP (F2.4) macro camera | 13MP (F2.0) front facing punch hole camera. 16.40 centimeters (6.5-inch) TFT infinity-O display with capacitive touchscreen and HD+ resolution with 720 x 1600 pixels resolution',
        	'category'=>'mobile',
        	'gallery'=>'https://images-na.ssl-images-amazon.com/images/I/811RH5e-snL._SL1500_.jpg'
        	],
        	[
        	'name'=>'Lenovo IdeaPad Gaming 3 AMD',
        	'price'=>'70000',
        	'description'=>'Processor: 4th Gen AMD Ryzen 5 4600H | Speed: 3.0 GHz (Base) - 4.0 GHz (Max) | 6 Cores | 3MB L2 & 8MB L3 Cache. OS: Pre-Loaded Windows 10 Home with Lifetime Validity',
        	'category'=>'laptop',
        	'gallery'=>'https://images-na.ssl-images-amazon.com/images/I/61TlKHyOHLL._SL1000_.jpg'
        	],
        	[
        	'name'=>'Acer Nitro 5 Intel Core',
        	'price'=>'59000',
        	'description'=>'Processor: Intel Core i5-9300H processor, turbo up to 4.10 Ghz. Display: 15.6" display with IPS (In-Plane Switching) technology, Full HD',
        	'category'=>'laptop',
        	'gallery'=>'https://images-na.ssl-images-amazon.com/images/I/81IXuyeJhYL._SL1500_.jpg'
        	],
        	[
        	'name'=>'Dell Vostro 3400 14" FHD AG Display Laptop',
        	'price'=>'40000',
        	'description'=>'Processor: 11th Generation Intel Core i5-1135G7 Processor (8MB Cache, up to 4.2 GHz). Memory & Storage:8GB RAM | 1TB 5400 rpm 2.5" SATA Hard Drive. Display:14.0-inch FHD (1920 x 1080) Anti-glare LED Backlight Narrow Border WVA Display',
        	'category'=>'laptop',
        	'gallery'=>'https://images-na.ssl-images-amazon.com/images/I/8147cwFm2PL._SL1500_.jpg'
        	],
        	[
        	'name'=>'LG Gram 10th Gen Intel Core i5-1035G7',
        	'price'=>'67000',
        	'description'=>'14 Inch Ultra-Lightweight (990 grams) Laptop with 10th Gen Intel i5-1035G7 w/Intel Iris Plus. RAM 8GB DDR 4, 256GB SSD, Windows 10 Home. Upto 18.5 hrs backup with 72Wh Battery. USB3.1 (x2), USB3.1 Type C (x1, Thunderbolt 3, USB PD), DC-In, HDMI, HP Out',
        	'category'=>'laptop',
        	'gallery'=>'https://images-na.ssl-images-amazon.com/images/I/71Dv5BtTh8L._SL1500_.jpg'
        	]
        ]);
    }
}
