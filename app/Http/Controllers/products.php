<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProductService;

class products extends Controller
{
	protected $ProductService; 
	public function __construct(ProductService $ProductService){
		 $this->ProductService=$ProductService;
	}
    public function index(Request $request){
    	$products= ($request['search']) ? $this->ProductService->search($request) : $this->ProductService->getAllproduct();
    	// dd($request['search']);
		return view('Products.viewproducts',['products'=>$products]);
    }
	public function show($slug){
		$product=$this->ProductService->findbyslug($slug);
		$image=$this->ProductService->image($product);
		return view ('Products.showproduct',['product'=>$product,'image'=>$image]);
	}
}
