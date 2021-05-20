<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Services\ProductService;

class CartController extends Controller
{
    protected $productservice;
    public function __construct(ProductService $productservice)
    {
        $this->productservice=$productservice;
    }
    public function index(){
        return view ('Carts.index');
    }
    public function store(Request $request, $id){
       
        $product=$this->productservice->findbyid($id);
        $cart=session::get('cart') ?? collect();
        // dd($cart);
        if($cart->count()>0){
            // dd('hello');
            $searchproduct=$cart->where('id',$id)->first();
            // dd( $searchproduct);
            if( $searchproduct!=null){
             $searchproduct['qty']+=$request['amount'];}
             else{
                $product['qty']+=$request['amount'];
                $cart->push($product);
             }
        }else{
            $product['qty']+=$request['amount'];
            $cart->push($product);
        }
        session::put('cart',$cart);
        return redirect()->back()->with('success','successfully purchase');
        // dd(session::get('cart') ?? collect());
    }
    public function update(Request $request, $id){
        // dd($request['amount']);
        $cart=session::get('cart') ?? collect();
        $product=$cart->where('id',$id)->first();
        $product['qty']=$request['amount'];
        // session::put('cart',$cart);
        return redirect()->back();
    }
    public function detroy($id){
        $cart=session::get('cart') ?? $collect();
        $product=$cart->reject(function($products)use($id){
            return $products->id==$id;
        });
        $cart=session::put('cart',$product);
        return redirect(route('cart.index'));
     }
}


