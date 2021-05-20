<?php
namespace App\Services;
use App\Models\Category;

class CategoryService{
	const per_page=12;
	public function menus($limit=5){
		return	Category::take($limit)->get();
	}
	public function findbyslug($slug){
		return Category::where(['slug'=>$slug])->first();
	}
	public function getProducts(Category $Category){
		return $Category->Products()->paginate(self::per_page);
	}
}