<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SubCategory;
use App;
class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SubCategory::create([
            'id' => '1',
            'category_id' => '1',
            'name' => 'Xtra Power Professional',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',
            'slug' => 'xtraPower',
            'metaTitle' => 'xtraPower',
            'metaDesc' => 'xtraPower',
            'metaKeyword' => 'xtraPower',
            'image' => 'https://xtrapowertools.com/wp-content/uploads/2021/11/xpt-25-300x300.jpg'
        ]);

        SubCategory::create([
            'id' => '2',
            'category_id' => '1',
            'name' => 'Xtra Power Gold',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',
            'slug' => 'xtraPower',
            'metaTitle' => 'xtraPower',
            'metaDesc' => 'xtraPower',
            'metaKeyword' => 'xtraPower',
            'image' => 'https://xtrapowertools.com/wp-content/uploads/2022/02/xp-gold-300x300.jpg'
        ]);

        SubCategory::create([
            'id' => '3',
            'category_id' => '1',
            'name' => 'Xtra Power Heavy Duty',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',
            'slug' => 'xtraPower',
            'metaTitle' => 'xtraPower',
            'metaDesc' => 'xtraPower',
            'metaKeyword' => 'xtraPower',
            'image' => 'https://xtrapowertools.com/wp-content/uploads/2021/11/slot-cutter-heavy-duty-33-300x300.jpg'
        ]);

        SubCategory::create([
            'id' => '4',
            'category_id' => '1',
            'name' => 'HI-Max Power Tools',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',
            'slug' => 'xtraPower',
            'metaTitle' => 'xtraPower',
            'metaDesc' => 'xtraPower',
            'metaKeyword' => 'xtraPower',
            'image' => 'https://xtrapowertools.com/wp-content/uploads/2022/02/hi-max-2-300x300.jpg'
        ]);
        //category1 ends
        //category2 starts: welding machine
        SubCategory::create([
            'id' => '5',
            'category_id' => '2',
            'name' => 'ARC Welding Machine',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',
            'slug' => 'arc',
            'metaTitle' => 'arc',
            'metaDesc' => 'arc',
            'metaKeyword' => 'arc',
            'image' => 'https://xtrapowertools.com/wp-content/uploads/2021/10/mig-11-300x300.jpg'
        ]);

        SubCategory::create([
            'id' => '6',
            'category_id' => '2',
            'name' => 'MIG Welding Machine',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',
            'slug' => 'mig',
            'metaTitle' => 'mig',
            'metaDesc' => 'mig',
            'metaKeyword' => 'mig',
            'image' => 'https://xtrapowertools.com/wp-content/uploads/2021/10/arc-11-300x300.jpg'
        ]);

        SubCategory::create([
            'id' => '7',
            'category_id' => '2',
            'name' => 'TIG Welding Machines',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',
            'slug' => 'tig',
            'metaTitle' => 'tig',
            'metaDesc' => 'tig',
            'metaKeyword' => 'tig',
            'image' => 'https://xtrapowertools.com/wp-content/uploads/2021/10/tig-11-300x300.jpg'
        ]);

        //category2 ends
        //category3 starts: vaccume cleaner
        SubCategory::create([
            'id' => '8',
            'category_id' => '3',
            'name' => 'XP Wet and Dry',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',
            'slug' => 'wetanddry',
            'metaTitle' => 'wetanddry',
            'metaDesc' => 'wetanddry',
            'metaKeyword' => 'wetanddry',
            'image' => 'https://xtrapowertools.com/wp-content/uploads/2021/10/vacuum-cleaner-11-300x300.jpg'
        ]);
        //category3 ends
        //category4 starts: pressure washer
        SubCategory::create([
            'id' => '9',
            'category_id' => '4',
            'name' => 'Pressure Washer',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',
            'slug' => 'washer',
            'metaTitle' => 'washer',
            'metaDesc' => 'washer',
            'metaKeyword' => 'washer',
            'image' => 'https://xtrapowertools.com/wp-content/uploads/2021/10/pw-11-300x300.jpg'
        ]);

        SubCategory::create([
            'id' => '10',
            'category_id' => '4',
            'name' => 'Cordless Pressure Washer',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',
            'slug' => 'cordless',
            'metaTitle' => 'cordless',
            'metaDesc' => 'cordless',
            'metaKeyword' => 'cordless',
            'image' => 'https://xtrapowertools.com/wp-content/uploads/2021/10/cordless-pw-11-300x300.jpg'
        ]);
        //category4 ends
        //category5 starts: abrasives
        SubCategory::create([
            'id' => '11',
            'category_id' => '5',
            'name' => 'WA Wheel',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',
            'slug' => 'wheel',
            'metaTitle' => 'wheel',
            'metaDesc' => 'wheel',
            'metaKeyword' => 'wheel',
            'image' => 'https://xtrapowertools.com/wp-content/uploads/2021/11/wa-wheel-300x300.jpg'
        ]);

        SubCategory::create([
            'id' => '12',
            'category_id' => '5',
            'name' => 'DC Wheel',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',
            'slug' => 'wheel',
            'metaTitle' => 'wheel',
            'metaDesc' => 'wheel',
            'metaKeyword' => 'wheel',
            'image' => 'https://xtrapowertools.com/wp-content/uploads/2021/11/dc-wheel-300x300.jpg'
        ]);

        SubCategory::create([
            'id' => '13',
            'category_id' => '5',
            'name' => 'Cut off Wheel',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',
            'slug' => 'wheel',
            'metaTitle' => 'wheel',
            'metaDesc' => 'wheel',
            'metaKeyword' => 'wheel',
            'image' => 'https://xtrapowertools.com/wp-content/uploads/2021/11/cut-off-wheel-44-300x300.jpg'
        ]);

        SubCategory::create([
            'id' => '14',
            'category_id' => '5',
            'name' => 'GC Wheel',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',
            'slug' => 'wheel',
            'metaTitle' => 'wheel',
            'metaDesc' => 'wheel',
            'metaKeyword' => 'wheel',
            'image' => 'https://xtrapowertools.com/wp-content/uploads/2021/11/gc-wheel-300x300.jpg'
        ]);

        SubCategory::create([
            'id' => '15',
            'category_id' => '5',
            'name' => 'Polishing PAD',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',
            'slug' => 'polishing',
            'metaTitle' => 'polishing',
            'metaDesc' => 'polishing',
            'metaKeyword' => 'polishing',
            'image' => 'https://xtrapowertools.com/wp-content/uploads/2021/11/polishing-pad-300x300.jpg'
        ]);
    }
}
