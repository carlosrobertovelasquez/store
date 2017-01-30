<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=array(
            [
              'name'=> 'Playera 1',
              'slug'=>'playera-1',
              'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, minima!',
              'extract'=>'Lorem ipsum dolor sit amet, consectetur.',
              'price'=>275.00,
              'image'=>'https://www.truffleshuffle.co.uk/images_high_res/Mens_Red_Batman_Graffiti_Logo_T_Shirt_hi_res.jpg',
              'visible'=>1,
              'created_at'=>new DateTime,
              'updated_at'=>new DateTime,
              'category_id'=>1
              
            ],
            [
              'name'=> 'Playera 2',
              'slug'=>'playera-2',
              'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, minima!',
              'extract'=>'Lorem ipsum dolor sit amet, consectetur.',
              'price'=>255.00,
              'image'=>'https://www.truffleshuffle.co.uk/images_high_res/Mens_Blue_Distressed_Superman_Logo_T_Shirt_hi_res.jpg',
              'visible'=>1,
              'created_at'=>new DateTime,
              'updated_at'=>new DateTime,
              'category_id'=>1
            ],
            [
              'name'=> 'Playera 3',
              'slug'=>'playera-3',
              'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, minima!',
              'extract'=>'Lorem ipsum dolor sit amet, consectetur.',
              'price'=>255.00,
              'image'=>'https://www.truffleshuffle.co.uk/images_high_res/Mens_Blue_Distressed_Superman_Logo_T_Shirt_hi_res.jpg',
              'visible'=>1,
              'created_at'=>new DateTime,
              'updated_at'=>new DateTime,
              'category_id'=>1
            ],
          );
        Product::insert($data);
    }
}    