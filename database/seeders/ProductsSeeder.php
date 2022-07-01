<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Products;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Subcategory1 starts-Xtra Power Professional
        //1
        Products::create([
            'subcategory_id' => '1',
            'name' => 'XPT 400 ANGLE GRINDER',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',
            'slug' => 'grinder',
            'metaTitle' => 'grinder',
            'metaDesc' => 'grinder',
            'metaKeyword' => 'grinder',
            'image' => 'https://xtrapowertools.com/wp-content/uploads/2021/01/xpt-400-1.png'
        ]);
        //2
        Products::create([
            'subcategory_id' => '1',
            'name' => 'XPT 410 STRAIGHT GRINDER',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',
            'slug' => 'grinder',
            'metaTitle' => 'grinder',
            'metaDesc' => 'grinder',
            'metaKeyword' => 'grinder',
            'image' => 'https://xtrapowertools.com/wp-content/uploads/2021/01/xpt-410-1.png'
        ]);
        //3
        Products::create([
            'subcategory_id' => '1',
            'name' => 'XPT 411 MARBLE CUTTER',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',
            'slug' => 'cutter',
            'metaTitle' => 'cutter',
            'metaDesc' => 'cutter',
            'metaKeyword' => 'cutter',
            'image' => 'https://xtrapowertools.com/wp-content/uploads/2021/01/xpt-400-1.png'
        ]);
        //4
        Products::create([
            'subcategory_id' => '1',
            'name' => 'XPT 418 WALL CHASER',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',
            'slug' => 'chaser',
            'metaTitle' => 'chaser',
            'metaDesc' => 'chaser',
            'metaKeyword' => 'chaser',
            'image' => 'https://xtrapowertools.com/wp-content/uploads/2021/01/xpt-418-1.png'
        ]);
        //5

      
        //5

        //Subcategory1 ends-Xtra Power Professional
        //Subcategory2 starts-Xtra Power Gold
        Products::create([
            'subcategory_id' => '2',
            'name' => 'XPG-8204 ELECTRIC PLANER',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',
            'slug' => 'grinder',
            'metaTitle' => 'grinder',
            'metaDesc' => 'grinder',
            'metaKeyword' => 'grinder',
            'image' => 'https://xtrapowertools.com/wp-content/uploads/2021/01/Electric-Planer-XPG-8204-1.png'
        ]);

        //6
        Products::create([
            'subcategory_id' => '2',
            'name' => 'XPG-BC2A BRUSH CUTTER 2 STROKE',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',
            'slug' => 'grinder',
            'metaTitle' => 'grinder',
            'metaDesc' => 'grinder',
            'metaKeyword' => 'grinder',
            'image' => 'https://xtrapowertools.com/wp-content/uploads/2021/01/Brush-Cutter-2-Stroke-XPG-BC2A-1-300x300.png'
        ]);

        //7
        Products::create([
            'subcategory_id' => '2',
            'name' => 'XPG-BC2S BRUSH CUTTER 2 STROKE',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',
            'slug' => 'grinder',
            'metaTitle' => 'grinder',
            'metaDesc' => 'grinder',
            'metaKeyword' => 'grinder',
            'image' => 'https://xtrapowertools.com/wp-content/uploads/2021/01/Brush-Cutter-2-Stroke-XPG-BC2S-1-300x300.png'
        ]);

        //8
        Products::create([
            'subcategory_id' => '2',
            'name' => 'XPG-BC4S BRUSH CUTTER 4 STROKE',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',
            'slug' => 'grinder',
            'metaTitle' => 'grinder',
            'metaDesc' => 'grinder',
            'metaKeyword' => 'grinder',
            'image' => 'https://xtrapowertools.com/wp-content/uploads/2021/01/Brush-Cutter-4-Stroke-XPG-BC4S-1-300x300.png'
        ]);

        //9
        //Subcategory2 ends-Xtra Power Gold
        //Subcategory3 starts-Xtra Power Heavy Duty
        Products::create([
            'subcategory_id' => '3',
            'name' => 'XP-1101 ANGLE GRINDER',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',
            'slug' => 'grinder',
            'metaTitle' => 'grinder',
            'metaDesc' => 'grinder',
            'metaKeyword' => 'grinder',
            'image' => 'https://xtrapowertools.com/wp-content/uploads/2021/01/Angle-Grinder-xp-1101-1-300x300.png'
        ]);
        //Subcategory3 ends-Xtra Power Heavy Duty
        //Subcategory4 starts-HI-MAX Power Tools

        //10
        Products::create([
            'subcategory_id' => '4',
            'name' => 'XP-1101 ANGLE GRINDER',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',
            'slug' => 'grinder',
            'metaTitle' => 'grinder',
            'metaDesc' => 'grinder',
            'metaKeyword' => 'grinder',
            'image' => 'https://xtrapowertools.com/wp-content/uploads/2021/01/Angle-Grinder-xp-1101-1-300x300.png'
        ]);
        //11

        Products::create([
            'subcategory_id' => '4',
            'name' => 'IC-001 MARBLE CUTTER',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',
            'slug' => 'grinder',
            'metaTitle' => 'grinder',
            'metaDesc' => 'grinder',
            'metaKeyword' => 'grinder',
            'image' => 'https://xtrapowertools.com/wp-content/uploads/2021/01/ic-001-2-1.png'
        ]);

        //12

        //Subcategory4 ends-Xtra Power Heavy Duty
        //Subcategory5 starts-ARC Welding Machine
        Products::create([
            'subcategory_id' => '5',
            'name' => 'XP-WM 200A ARC WELDING MACHINE',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',
            'slug' => 'grinder',
            'metaTitle' => 'grinder',
            'metaDesc' => 'grinder',
            'metaKeyword' => 'grinder',
            'image' => 'https://xtrapowertools.com/wp-content/uploads/2021/01/Welding-Machine-XP-WM-200A-1-300x300.png'
        ]);
        //13

        Products::create([
            'subcategory_id' => '5',
            'name' => 'XP-WM 250A ARC WELDING MACHINE',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',
            'slug' => 'grinder',
            'metaTitle' => 'grinder',
            'metaDesc' => 'grinder',
            'metaKeyword' => 'grinder',
            'image' => 'https://xtrapowertools.com/wp-content/uploads/2021/07/Welding-Machine-XP-WM-250A-1-300x300.png'
        ]);
        //14
        Products::create([
            'subcategory_id' => '5',
            'name' => 'XP-WM 300A ARC WELDING MACHINE',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',
            'slug' => 'grinder',
            'metaTitle' => 'grinder',
            'metaDesc' => 'grinder',
            'metaKeyword' => 'grinder',
            'image' => 'https://xtrapowertools.com/wp-content/uploads/2021/07/Welding-Machine-XP-WM-300A-1-300x300.png'
        ]);

    }
}
