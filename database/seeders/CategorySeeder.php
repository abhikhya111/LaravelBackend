<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'id' => '1',
            'name' => 'Power Tools',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',
            'slug' => 'powerTools',
            'metaTitle' => 'powerTools',
            'metaDesc' => 'powerTools',
            'metaKeyword' => '2powerTools',
            'image' => 'https://xtrapowertools.com/wp-content/uploads/2021/10/power-tool-011-600x600.jpg'
        ]);

        Category::create([
            'id' => '2',
            "name"=> "Welding Machine",
            "slug"=> "weldingMachine",
            "desc"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam",
            "metaTitle"=> "weldingMachine",
            "metaDesc"=> "weldingMachine",
            "metaKeyword"=> "weldingMachine",
            'image' => 'https://xtrapowertools.com/wp-content/uploads/2021/10/weling-machine21-600x600.jpg'

        ]);

        Category::create([
            'id' => '3',
            "name"=> "Vaccume Cleaner",
            "slug"=> "vaccumeCleaner",
            "desc"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam",
            "metaTitle"=> "vaccumeCleaner",
            "metaDesc"=> "vaccumeCleaner",
            "metaKeyword"=> "vaccumeCleaner",
            'image' => 'https://xtrapowertools.com/wp-content/uploads/2021/10/vacuum-cleaner-011-600x600.jpg'

        ]);

        Category::create([
            'id' => '4',
            "name"=> "Pressure Washer",
            "slug"=> "pressureWasher",
            "desc"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam",
            "metaTitle"=> "pressureWasher",
            "metaDesc"=> "pressureWasher",
            "metaKeyword"=> "pressureWasher",
            'image' => 'https://xtrapowertools.com/wp-content/uploads/2021/10/power-tool-011-600x600.jpg'

           
        ]);

        Category::create([
            'id' => '5',
            "name"=> "Abrasive",
            "slug"=> "abrasive",
            "desc"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam",
            "metaTitle"=> "abrasive",
            "metaDesc"=> "abrasive",
            "metaKeyword"=> "abrasive",
            'image' => 'https://xtrapowertools.com/wp-content/uploads/2021/10/pressure-washer-111-600x600.jpg'

        ]);

        Category::create([
            'id' => '6',
            "name"=> "Diamond Saw Blades",
            "slug"=> "diamondSawBlades",
            "desc"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam",
            "metaTitle"=> "diamondSawBlades",
            "metaDesc"=> "diamondSawBlades",
            "metaKeyword"=> "diamondSawBlades",
            'image' => 'https://xtrapowertools.com/wp-content/uploads/2021/10/abrassives-011-600x600.jpg'

        ]);

        Category::create([
            'id' => '7',
            "name"=> "TCT Saw Blades",
            "slug"=> "sawBlades",
            "desc"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam",
            "metaTitle"=> "sawBlades",
            "metaDesc"=> "sawBlades",
            "metaKeyword"=> "sawBlades",
            'image' => 'https://xtrapowertools.com/wp-content/uploads/2021/10/power-tool-011-600x600.jpg'

        ]);

        Category::create([
            'id' => '8',
            "name"=> "Welding Machine",
            "slug"=> "weldingMachine",
            "desc"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam",
            "metaTitle"=> "weldingMachine",
            "metaDesc"=> "weldingMachine",
            "metaKeyword"=> "weldingMachine",
            'image' => 'https://xtrapowertools.com/wp-content/uploads/2021/10/dsb-600x600.jpg'

        ]);

        Category::create([
            'id' => '9',
            "name"=> "Accessorise",
            "slug"=> "accesorise",
            "desc"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam",
            "metaTitle"=> "accesorise",
            "metaDesc"=> "accesorise",
            "metaKeyword"=> "accesorise",
            'image' => 'https://xtrapowertools.com/wp-content/uploads/2021/10/tct-saw-blade-011-600x600.jpg'

        ]);

        Category::create([
            'id' => '10',
            "name"=> "SDS Drill Bits and Chisels",
            "slug"=> "chisels",
            "desc"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam",
            "metaTitle"=> "Chisels",
            "metaDesc"=> "Chisels",
            "metaKeyword"=> "Chisels",
            'image' => 'https://xtrapowertools.com/wp-content/uploads/2021/11/accessories-5-600x600.jpg'

        ]);

        Category::create([
            'id' => '11',
            "name"=> "Router Bits",
            "slug"=> "routerBits",
            "desc"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam",
            "metaTitle"=> "routerBits",
            "metaDesc"=> "routerBits",
            "metaKeyword"=> "routerBits",
            'image' => 'https://xtrapowertools.com/wp-content/uploads/2021/10/sds-drill-bit-chisel-011-600x600.jpg'

        ]);

        Category::create([
            'id' => '12',
            "name"=> "Spare Parts",
            "slug"=> "spareParts",
            "desc"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam",
            "metaTitle"=> "spareParts",
            "metaDesc"=> "spareParts",
            "metaKeyword"=> "spareParts",
            'image' => 'https://xtrapowertools.com/wp-content/uploads/2021/10/spare-parts-011-600x600.jpg'
        ]);

        Category::create([
            "id"=>'13',
            "name"=> "Agriculture Machines",
            "slug"=> "agricultureMachines",
            "desc"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam",
            "metaTitle"=> "agricultureMachines",
            "metaDesc"=> "agricultureMachines",
            "metaKeyword"=> "agricultureMachines",
            'image' => 'https://xtrapowertools.com/wp-content/uploads/2021/10/power-tool-011-600x600.jpg'

        ]);
    }
}
