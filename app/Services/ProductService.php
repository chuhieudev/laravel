<?php
namespace App\Services;
use App\Models\Product;

class ProductService{
	const per_page=12;
	public function findbyid($id){
		return Product::where(['id'=>$id])->first();
	}
	public function getAllproduct(){
		return Product::paginate(self::per_page);
	}
	public function findbyslug($slug){
		return Product::where(['slug'=>$slug])->first();
	}
	public function image(Product $Product){		
		return $Product->images()->get();
	}
	public function search($input){
		$query=Product::join('category_product',function($query){
			$query->on('category_product.product_id','products.id');
		});
		if(!empty($input['search'])){
			$query->where('name','like',"%".$input['search']."%");
		}
		return $query->paginate(self::per_page);
	}
}