<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AboutItems;

class AboutItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AboutItems::create([
            'id' => '1',
            'product_id' => '1',
            'value' => 'Embraces 180mm disc',
           ]);

           AboutItems::create([
            'id' => '2',
            'product_id' => '1',
            'value' => 'Solid 2050 watts motor',
           ]);

           AboutItems::create([
            'id' => '3',
            'product_id' => '1',
            'value' => 'Adjustable lightweight build',
           ]);

           AboutItems::create([
            'id' => '4',
            'product_id' => '1',
            'value' => 'Backside switch with lock lever',
           ]);

           AboutItems::create([
            'id' => '5',
            'product_id' => '1',
            'value' => 'Side handle with three positions',
           ]);

           AboutItems::create([
            'id' => '6',
            'product_id' => '1',
            'value' => 'An efficient slim body enables consistent use',
           ]);

           AboutItems::create([
            'id' => '7',
            'product_id' => '1',
            'value' => 'Sturdy metal gears for higher tool reliability and enhanced tool life',
           ]);

           //Product 1 ends

           AboutItems::create([
            'id' => '8',
            'product_id' => '2',
            'value' => 'Solid 710 watts motor',
           ]);

           AboutItems::create([
            'id' => '9',
            'product_id' => '2',
            'value' => 'Supports 125mm disc',
           ]);

           AboutItems::create([
            'id' => '10',
            'product_id' => '2',
            'value' => 'Adjustable compact body
            ',
           ]);

           AboutItems::create([
            'id' => '11',
            'product_id' => '2',
            'value' => 'Backside switch with locking button',
           ]);

           AboutItems::create([
            'id' => '12',
            'product_id' => '2',
            'value' => 'Cast metal case for increased tool life',
           ]);

           AboutItems::create([
            'id' => '13',
            'product_id' => '2',
            'value' => 'High-quality gear enables consistent use',
           ]);

           //Product 2 ends

           AboutItems::create([
            'id' => '14',
            'product_id' => '3',
            'value' => 'Backs a 110mm disc',
           ]);

           AboutItems::create([
            'id' => '15',
            'product_id' => '3',
            'value' => 'High-efficiency 1240 watts motor',
           ]);

           AboutItems::create([
            'id' => '16',
            'product_id' => '3',
            'value' => 'Structured for ease during extended work',
           ]);

           AboutItems::create([
            'id' => '17',
            'product_id' => '3',
            'value' => 'Modular body for use with low exhaustion',
           ]);

           AboutItems::create([
            'id' => '18',
            'product_id' => '3',
            'value' => 'Metal gear case housing for increased durability of the tool',
           ]);

            //Product 3 ends

           
    }
}
