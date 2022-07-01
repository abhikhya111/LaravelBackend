<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contents;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Product 1 Starts
        Contents::create([
            'id' => '1',
            'product_id' => '1',
            'value' => '1 unit Angle Grinder',
            
        ]);

        Contents::create([
            'id' => '2',
            'product_id' => '1',
            'value' => '1 unit Wheel Guard',
            
        ]);

        Contents::create([
            'id' => '3',
            'product_id' => '1',
            'value' => '1 unit Side Handle',
            
        ]);

        Contents::create([
            'id' => '4',
            'product_id' => '1',
            'value' => '1 Pair Carbon Brush',
            
        ]);

        Contents::create([
            'id' => '5',
            'product_id' => '1',
            'value' => '1 unit Spanner',
            
        ]);

        Contents::create([
            'id' => '6',
            'product_id' => '1',
            'value' => '1 unit User Manual',
            
        ]);

        //Product 1 Ends

        //Product 2 Starts

        Contents::create([
            'id' => '7',
            'product_id' => '2',
            'value' => '1 unit Straight Grinder',
            
        ]);

        Contents::create([
            'id' => '8',
            'product_id' => '2',
            'value' => '1 unit Side Handle',
            
        ]);

        Contents::create([
            'id' => '9',
            'product_id' => '2',
            'value' => '1 unit Spanner',
            
        ]);

        Contents::create([
            'id' => '10',
            'product_id' => '2',
            'value' => '1 unit User Manual',
            
        ]);

        Contents::create([
            'id' => '11',
            'product_id' => '2',
            'value' => '1 Pair Carbon Brush',
            
        ]);

        Contents::create([
            'id' => '12',
            'product_id' => '2',
            'value' => '1 unit Wheel Guard',
            
        ]);

        //Product 2 ends

        //Product 3 starts
        Contents::create([
            'id' => '13',
            'product_id' => '3',
            'value' => '1 unit Marble Cutter',
            
        ]);

        Contents::create([
            'id' => '14',
            'product_id' => '3',
            'value' => '1 unit Rubber Water Nozzle',
            
        ]);

        Contents::create([
            'id' => '15',
            'product_id' => '3',
            'value' => '1 unit Plastic Nozzle',
            
        ]);

        Contents::create([
            'id' => '16',
            'product_id' => '3',
            'value' => '1 unit Pipe',
            
        ]);

        Contents::create([
            'id' => '17',
            'product_id' => '3',
            'value' => '2 units Wrench',
            
        ]);

        Contents::create([
            'id' => '18',
            'product_id' => '3',
            'value' => '1 Pair Carbon Brush',
            
        ]);

        Contents::create([
            'id' => '19',
            'product_id' => '3',
            'value' => '1 unit User Manual',
            
        ]);
        



        
        
        
         
        

    
    }
}
