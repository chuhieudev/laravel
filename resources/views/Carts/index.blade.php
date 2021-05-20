@extends('index')
@section('page_title','Cart')	
@section('content')
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<style>
     .tablecart {
                    margin:auto; 
                    width: 1170px;
                    background-color: #7d7d7d;
                    margin-top:30px; 
                    margin-bottom: 30px;
                }
                
                table {
                    text-align: center;
                    width:100%;
                    padding: 10px;
                    border-collapse: collapse;
                }
                .tablecart tr:nth-child(1){
                    background:rgb(243, 184, 74);
                    color: black;
                    font-weight: bolder;
                }
                .tablecart tr:nth-child(even) {
                    background-color: #686565;
                }
                
                .tablecart tr td {
                    padding: 30px 30px;
                    border: 1px solid white;
                }
                .tablecart tr td:nth-child(1){
                    padding:20px 10px;
                }
                .tablecart tr td img {
                    width: 50px;
                    height: 50px;
                    object-fit: contain;
                }
                .white{
                    color: white;
                    font-size: 15px;
                }
                .tablecart tr td input {
                    width: 65px;
                    height: 30px;
                    text-align: center;
                }

                .tablecart tr td i {
                    color: white;
                    font-size: 25px;
                    cursor: pointer;
                }
                
                .tablecart tr td i:hover {
                    color:black;
                }
                .table tr:last-child td {
                    text-align: center;
                    padding: 20px 0px;
                    
                }
                
                .tablecart tr:last-child a {
                    text-decoration:none;
                    color: white;
                    padding: 15px 25px;
                    background-color: rgb(36, 35, 35);
                    font-size: 20px;
                }
                
                .tablecart tr:last-child .proceed-btn:hover{
                    background-color: orange;
                    color: white;
                }
                      
.proceed-checkout ul {
	border: 2px solid #ebebeb;
	background: #f3f3f3;
	padding-left: 25px;
	padding-right: 25px;
	padding-top: 16px;
	padding-bottom: 20px;
}

.proceed-checkout ul li {
	list-style: none;
	font-size: 16px;
	font-weight: 700;
	color: #252525;
	text-transform: uppercase;
	overflow: hidden;
}

.proceed-checkout ul li.subtotal {
	font-weight: 400;
	text-transform: capitalize;
	border-bottom: 1px solid #ffffff;
	padding-bottom: 14px;
}

.proceed-checkout ul li.subtotal span {
	font-weight: 700;
}

.proceed-checkout ul li.cart-total {
	padding-top: 10px;
}

.proceed-checkout ul li.cart-total span {
	color: #e7ab3c;
}

.proceed-checkout ul li span {
	float: right;
}

.proceed-checkout .proceed-btn {
	font-size: 14px;
	font-weight: 700;
	color: #ffffff;
	background: #252525;
	text-transform: uppercase;
	padding: 15px 25px 14px 25px;
	display: block;
	text-align: center;
}
.no-product{
    width: 800px;
    margin: auto;
    text-align: center;
}
</style>
@include('header.header')
@if(!Session::has('cart'))
    <div class="alert alert-warning no-product">Hiện Tại Chưa Có Sản Phẩm Nào Trong Giỏ. Vui Lòng Quay Lại Hàng Hóa Để Mua Sản Phẩm </div>
    @endif
<div class="tablecart">
    @iF(Session::has('cart'))
    
    <table cellpadding="0"cellspacing="0">
        <tr>
            <td>Image</td>
            <td>Name</td>
            <td>Price</td>
            <td>Amount</td>
            <td>ToTal</td>
            <td>Delete</td>
            <td>Edit</td>
        </tr>
        @php
            $total=0;
        @endphp
        @foreach (Session::get('cart') as $product)
        @php
            $total+=$product->price*$product->qty;
        @endphp
       <form action="{{route('cart.update',['id'=>$product->id])}}" method="POST">
        @method('put')
        @csrf
        <tr>
            <td>
                <img src="{{$product->image}}" alt="">
            </td>
            <td class="white">
                {{$product->name}}
            </td>
            <td class="white">
                ${{$product->price}}
            </td>
            <td>
                <input type="number" value="{{$product->qty}}" min="1" name="amount">
            </td>
            <td class="white">
                ${{$product->price*$product->qty}}
            </td>
            <td>
                <a href="{{route('cart.delete',['id'=>$product->id])}}"><i class="fas fa-times-circle" aria-hidden="true"></i></a>
            </td>
            <td>
               <button type="submit"><i class="far fa-edit" style="color: black"></i></button>
            </td>
        </tr>
    </form> 
        @endforeach
        <tr style="background: white">
            <td colspan="4"></td>
            <td  colspan="3" style="padding: 30px 0px">
                <div class="proceed-checkout">
                    <ul>
                        {{-- <li class="subtotal">Subtotal <span>$240.00</span></li> --}}
                        <li class="cart-total">Total <span>{{number_format($total)}}</span></li>
                    </ul>
                    <a href="#" class="proceed-btn">Pay Now</a>
                    @if(Session::has('message'))
                        <div class="alert alert-success">{{Session::get('message')}}</div>
                    @endif
                </div>
            </td>
        </tr>  
    </table>

    @endif
</div>
@include('footer.footer')
@endsection
