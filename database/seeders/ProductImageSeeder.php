<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductImage;

class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //SubCategory 1 Starts
        ProductImage::create([
            'id' => '1',
            'product_id' => '1',
            'product_name' => 'XPT 400 ANGLE GRINDER',
            'image1' => 'https://xtrapowertools.com/wp-content/uploads/2021/01/xpt-400-1-100x100.png',
            'image2' => 'https://xtrapowertools.com/wp-content/uploads/2021/01/xpt-400-2-100x100.png',
            'image3' => 'https://xtrapowertools.com/wp-content/uploads/2021/01/xpt-400-3-100x100.png',
            'image4' => 'https://xtrapowertools.com/wp-content/uploads/2021/01/xpt-400-4-100x100.png'
            
        ]);

        ProductImage::create([
            'id' => '2',
            'product_id' => '2',
            'product_name' => 'XPT 410 STRAIGHT GRINDER',
            'image1' => 'https://xtrapowertools.com/wp-content/uploads/2021/01/xpt-410-1-100x100.png',
            'image2' => 'https://xtrapowertools.com/wp-content/uploads/2021/01/xpt-410-2-100x100.png',
            'image3' => 'https://xtrapowertools.com/wp-content/uploads/2021/01/xpt-410-3-100x100.png',
            'image4' => 'https://xtrapowertools.com/wp-content/uploads/2021/01/xpt-410-4-100x100.png'
            
        ]);

        ProductImage::create([
            'id' => '3',
            'product_id' => '3',
            'product_name' => 'XPT 411 MARBLE CUTTER',
            'image1' => 'https://xtrapowertools.com/wp-content/uploads/2021/01/xpt-411-2-100x100.png',
            'image2' => 'https://xtrapowertools.com/wp-content/uploads/2021/01/xpt-411-1-100x100.png',
            'image3' => 'https://xtrapowertools.com/wp-content/uploads/2021/01/xpt-411-3-100x100.png',
            'image4' => 'https://xtrapowertools.com/wp-content/uploads/2021/01/xpt-411-4-100x100.png'
            
        ]);

        ProductImage::create([
            'id' => '4',
            'product_id' => '4',
            'product_name' => 'XPT 418 WALL CHASER',
            'image1' => 'https://xtrapowertools.com/wp-content/uploads/2021/01/xpt-418-1-100x100.png',
            'image2' => 'https://xtrapowertools.com/wp-content/uploads/2021/01/xpt-418-2-100x100.png',
            'image3' => 'https://xtrapowertools.com/wp-content/uploads/2021/01/xpt-418-3-100x100.png',
            'image4' => 'https://xtrapowertools.com/wp-content/uploads/2021/01/xpt-418-4-100x100.png'
            
        ]);
        //SubCategory 2 Starts

        ProductImage::create([
            'id' => '5',
            'product_id' => '5',
            'product_name' => 'XPG-8204 ELECTRIC PLANER',
            'image1' => 'https://xtrapowertools.com/wp-content/uploads/2021/01/Electric-Planer-XPG-8204-1-100x100.png',
            'image2' => 'https://xtrapowertools.com/wp-content/uploads/2021/01/Electric-Planer-XPG-8204-2-100x100.png',
            'image3' => 'https://xtrapowertools.com/wp-content/uploads/2021/01/Electric-Planer-XPG-8204-3-100x100.png',
            'image4' => 'https://xtrapowertools.com/wp-content/uploads/2021/01/Electric-Planer-XPG-8204-4-100x100.png'
            
        ]);

        ProductImage::create([
            'id' => '6',
            'product_id' => '6',
            'product_name' => 'XPG-BC2A BRUSH CUTTER 2 STROKE',
            'image1' => 'https://xtrapowertools.com/wp-content/uploads/2021/01/Brush-Cutter-2-Stroke-XPG-BC2A-1-100x100.png',
            'image2' => 'https://xtrapowertools.com/wp-content/uploads/2021/01/Brush-Cutter-2-Stroke-XPG-BC2A-2-100x100.png',
            'image3' => 'https://xtrapowertools.com/wp-content/uploads/2021/01/Brush-Cutter-2-Stroke-XPG-BC2A-3-100x100.png',
            'image4' => 'https://xtrapowertools.com/wp-content/uploads/2021/01/Brush-Cutter-2-Stroke-XPG-BC2A-4-100x100.png'
            
        ]);

        ProductImage::create([
            'id' => '7',
            'product_id' => '7',
            'product_name' => 'XPG-BC2S BRUSH CUTTER 2 STROKE',
            'image1' => 'https://xtrapowertools.com/wp-content/uploads/2021/01/Brush-Cutter-2-Stroke-XPG-BC2S-1-100x100.png',
            'image2' => 'https://xtrapowertools.com/wp-content/uploads/2021/01/Brush-Cutter-2-Stroke-XPG-BC2S-2-100x100.png',
            'image3' => 'https://xtrapowertools.com/wp-content/uploads/2021/01/Brush-Cutter-2-Stroke-XPG-BC2S-3-100x100.png',
            'image4' => 'https://xtrapowertools.com/wp-content/uploads/2021/01/Brush-Cutter-2-Stroke-XPG-BC2S-4-100x100.png'
            
        ]);

        ProductImage::create([
            'id' => '8',
            'product_id' => '8',
            'product_name' => 'XPG-BC4S BRUSH CUTTER 4 STROKE',
            'image1' => 'https://xtrapowertools.com/wp-content/uploads/2021/01/Brush-Cutter-4-Stroke-XPG-BC4S-1-100x100.png',
            'image2' => 'https://xtrapowertools.com/wp-content/uploads/2021/01/Brush-Cutter-4-Stroke-XPG-BC4S-2-100x100.png',
            'image3' => 'https://xtrapowertools.com/wp-content/uploads/2021/01/Brush-Cutter-4-Stroke-XPG-BC4S-3-100x100.png',
            'image4' => 'https://xtrapowertools.com/wp-content/uploads/2021/01/Brush-Cutter-4-Stroke-XPG-BC4S-4-100x100.png'
            
        ]);
        //category 3 starts
        ProductImage::create([
            'id' => '9',
            'product_id' => '9',
            'product_name' => 'XP-1101 ANGLE GRINDER',
            'image1' => 'https://xtrapowertools.com/wp-content/uploads/2021/01/Angle-Grinder-xp-1101-1-100x100.png',
            'image2' => 'https://xtrapowertools.com/wp-content/uploads/2021/01/Angle-Grinder-xp-1101-2-100x100.png',
            'image3' => 'https://xtrapowertools.com/wp-content/uploads/2021/01/Angle-Grinder-xp-1101-3-100x100.png',
            'image4' => 'https://xtrapowertools.com/wp-content/uploads/2021/01/Angle-Grinder-xp-1101-4-100x100.png'
            
        ]);

        ProductImage::create([
            'id' => '10',
            'product_id' => '10',
            'product_name' => 'XPG-8204 ELECTRIC PLANER',
            'image1' => 'https://xtrapowertools.com/wp-content/uploads/2021/01/Electric-Planer-XPG-8204-1-100x100.png',
            'image2' => 'https://xtrapowertools.com/wp-content/uploads/2021/01/Electric-Planer-XPG-8204-2-100x100.png',
            'image3' => 'https://xtrapowertools.com/wp-content/uploads/2021/01/Electric-Planer-XPG-8204-3-100x100.png',
            'image4' => 'https://xtrapowertools.com/wp-content/uploads/2021/01/Electric-Planer-XPG-8204-4-100x100.png'
            
        ]);

        ProductImage::create([
            'id' => '11',
            'product_id' => '11',
            'product_name' => 'XPG-8204 ELECTRIC PLANER',
            'image1' => 'https://xtrapowertools.com/wp-content/uploads/2021/01/Electric-Planer-XPG-8204-1-100x100.png',
            'image2' => 'https://xtrapowertools.com/wp-content/uploads/2021/01/Electric-Planer-XPG-8204-2-100x100.png',
            'image3' => 'https://xtrapowertools.com/wp-content/uploads/2021/01/Electric-Planer-XPG-8204-3-100x100.png',
            'image4' => 'https://xtrapowertools.com/wp-content/uploads/2021/01/Electric-Planer-XPG-8204-4-100x100.png'
            
        ]);

        ProductImage::create([
            'id' => '12',
            'product_id' => '12',
            'product_name' => 'XPG-8204 ELECTRIC PLANER',
            'image1' => 'https://xtrapowertools.com/wp-content/uploads/2021/01/Electric-Planer-XPG-8204-1-100x100.png',
            'image2' => 'https://xtrapowertools.com/wp-content/uploads/2021/01/Electric-Planer-XPG-8204-2-100x100.png',
            'image3' => 'https://xtrapowertools.com/wp-content/uploads/2021/01/Electric-Planer-XPG-8204-3-100x100.png',
            'image4' => 'https://xtrapowertools.com/wp-content/uploads/2021/01/Electric-Planer-XPG-8204-4-100x100.png'
            
        ]);

        ProductImage::create([
            'id' => '13',
            'product_id' => '13',
            'product_name' => 'XPG-8204 ELECTRIC PLANER',
            'image1' => 'https://xtrapowertools.com/wp-content/uploads/2021/01/Electric-Planer-XPG-8204-1-100x100.png',
            'image2' => 'https://xtrapowertools.com/wp-content/uploads/2021/01/Electric-Planer-XPG-8204-2-100x100.png',
            'image3' => 'https://xtrapowertools.com/wp-content/uploads/2021/01/Electric-Planer-XPG-8204-3-100x100.png',
            'image4' => 'https://xtrapowertools.com/wp-content/uploads/2021/01/Electric-Planer-XPG-8204-4-100x100.png'
            
        ]);

        ProductImage::create([
            'id' => '14',
            'product_id' => '14',
            'product_name' => 'XPG-8204 ELECTRIC PLANER',
            'image1' => 'https://xtrapowertools.com/wp-content/uploads/2021/01/Electric-Planer-XPG-8204-1-100x100.png',
            'image2' => 'https://xtrapowertools.com/wp-content/uploads/2021/01/Electric-Planer-XPG-8204-2-100x100.png',
            'image3' => 'https://xtrapowertools.com/wp-content/uploads/2021/01/Electric-Planer-XPG-8204-3-100x100.png',
            'image4' => 'https://xtrapowertools.com/wp-content/uploads/2021/01/Electric-Planer-XPG-8204-4-100x100.png'
            
        ]); 
    }
}
