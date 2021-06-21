<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

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
            'name'=>'Oppo mobile',
            'price'=>"670",
            'description'=>"A smartphone with 4gb ram much more featur",
            'category'=> "mobile",
            'gallery'=> "https://ichef.bbci.co.uk/news/976/cpsprodpb/BE54/production/_117842784_lg.jpg",

            ],
            [
            'name'=>'Panasonic TV',
            'price'=>"300",
            'description'=>"A smartphone with 4gb ram much more featur",
            'category'=> "tv",
            'gallery'=> "https://www.sony-asia.com/image/0e614d566f11f2bac75a48b230d142fe?fmt=png-alpha&wid=720",

           ],
           [
            'name'=>'LG fridge',
            'price'=>"400",
            'description'=>"A smartphone with 4gb ram much more featur",
            'category'=> "tv",
            'gallery'=> "https://images-na.ssl-images-amazon.com/images/I/61wln1u%2BtlL._AC_SX522_.jpg",

           ],
           [
            'name'=>'LG mobile',
            'price'=>"200",
            'description'=>"A smartphone with 4gb ram much more featur",
            'category'=> "fridge",
            'gallery'=> "https://www.lg.com/us/images/tvs/42ln5700/gallery/large07.jpg",

           ],
           [
            'name'=>'LG mobile',
            'price'=>"200",
            'description'=>"A smartphone with 4gb ram much more featur",
            'category'=> "tv",
            'gallery'=> "https://www.lg.com/us/images/tvs/42ln5700/gallery/large07.jpg",

           ]
          ]);
    }
}
