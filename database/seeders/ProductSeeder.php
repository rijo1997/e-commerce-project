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
        //
        DB::table('products')->insert([
            [
                'name'=> 'LG Mobile',
                "price"=> "200",
                "description"=>"LG mobile with 5.5 disp",
                "category"=>"Mobile",
                "gallery"=>"https://www.lg.com/in/mobile-phones/lg-lmg910emw-aurora-silver#none"
                
            ],
            [
                'name'=> 'RealMe Mobile',
                "price"=> "200",
                "description"=>"MOtorolla mobile with 5.5 disp",
                "category"=>"Mobile",
                "gallery"=>"https://www.lg.com/in/mobile-phones/lg-lmg910emw-aurora-silver#none"
                
            ],
            [
                'name'=> 'Redmi Mobile',
                "price"=> "200",
                "description"=>"MI mobile with 5.5 disp",
                "category"=>"Mobile",
                "gallery"=>"https://www.lg.com/in/mobile-phones/lg-lmg910emw-aurora-silver#none"
                
            ],
            
            [
                'name'=> 'Apple Mobile',
                "price"=> "200",
                "description"=>"Apple mobile with 5.5 disp",
                "category"=>"Mobile",
                "gallery"=>"https://www.lg.com/in/mobile-phones/lg-lmg910emw-aurora-silver#none"
                
                ]
        ]);

    
    }
}
