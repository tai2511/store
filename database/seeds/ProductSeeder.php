<?php

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
                'name'=>'Product 1',
                "price"=>"300",
                "description"=>"This is product 1",
                "category"=>"T-shirt",
                "gallery"=>"https://cdn.pixabay.com/photo/2021/01/15/17/01/green-5919790_960_720.jpg"
            ],
            [
                'name'=>'Product 2',
                "price"=>"400",
                "description"=>"This is product 2",
                "category"=>"T-shirt",
                "gallery"=>"https://cdn.pixabay.com/photo/2021/01/15/17/01/green-5919790_960_720.jpg"
            ],
            [
                'name'=>'Product 3',
                "price"=>"500",
                "description"=>"This is product 3",
                "category"=>"Polo",
                "gallery"=>"https://cdn.pixabay.com/photo/2021/01/15/17/01/green-5919790_960_720.jpg"
            ],
            [
                'name'=>'Product 4',
                "price"=>"600",
                "description"=>"This is product 4",
                "category"=>"Polo",
                "gallery"=>"https://cdn.pixabay.com/photo/2021/01/15/17/01/green-5919790_960_720.jpg"
            ],
            [
                'name'=>'Product 5',
                "price"=>"500",
                "description"=>"This is product 5",
                "category"=>"T-shirt",
                "gallery"=>"https://cdn.pixabay.com/photo/2021/01/15/17/01/green-5919790_960_720.jpg"
            ],
            [
                'name'=>'Product 6',
                "price"=>"400",
                "description"=>"This is product 6",
                "category"=>"T-shirt",
                "gallery"=>"https://cdn.pixabay.com/photo/2021/01/15/17/01/green-5919790_960_720.jpg"
            ],
            [
                'name'=>'Product 7',
                "price"=>"500",
                "description"=>"This is product 7",
                "category"=>"Polo",
                "gallery"=>"https://cdn.pixabay.com/photo/2021/01/15/17/01/green-5919790_960_720.jpg"
            ],
            [
                'name'=>'Product 8',
                "price"=>"600",
                "description"=>"This is product 8",
                "category"=>"Polo",
                "gallery"=>"https://cdn.pixabay.com/photo/2021/01/15/17/01/green-5919790_960_720.jpg"
            ]
        ]);
    }
}
