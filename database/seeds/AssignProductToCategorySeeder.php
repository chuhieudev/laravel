<?php

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;
use Illuminate\support\arr;
class AssignProductToCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $Categories= Category::pluck('id')->toArray();
        // Product::chunk(10, function($products) use ($Categories){
        //     foreach($products as $product){
        //         $product->categories()->sync([arr::random($Categories)]);
        //     }   
        // });
    }
}
