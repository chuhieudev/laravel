<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CategoryService;
use App\Services\ProductService;


class Categories extends Controller
{
	protected $CategoryService,$ProductService;
	public $products;
	public function __construct(CategoryService $CategoryService){
		$this-> CategoryService=$CategoryService;
	}
	public function view($slug){
		$category= $this->CategoryService->findbyslug($slug);
		$productspaginate= $this->CategoryService->getProducts($category);
		return view('Products.viewproducts',
			['category'=> $this->CategoryService->findbyslug($slug),
			'productspaginate'=>$productspaginate,
		]);
	}
}
