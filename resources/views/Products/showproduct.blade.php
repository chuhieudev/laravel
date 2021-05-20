
@extends('index')
@section('page_title',$product->name??'Products')	
@section('description',$product->meta_desc??null)
@section('keyword',$product->meta_keyword??null)
@section('content')
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
@include('header.header')
<div style="display:flex;width:1200px;margin:auto;margin-top:40px;margin-bottom:40px">
    <div>
        <ul>
            @foreach ($image as $image)
            <li style="cursor: pointer; padding-bottom:25px;list-style:none">
                <img src="{{$image->name}}"width="64px" height="85px" onclick="changeImage(this.id)" id="{{$image->id}}" style="padding-bottom: 5px;object-fit: cover;">
            </li>
            @endforeach
        </ul>
    </div>
    <div >
        <img src="{{$image->name}}" alt="" id='show' width="350px" height="414" style="padding-left: 20px;object-fit: cover;"> 
    </div>
    <div style="width: 500px; margin-left: 40px;">
        <h3 style="font-family: 'bebas_neueregular';color: #555555;font-size: 2em;margin-bottom: 10px;">
            {{$product->name}}
        </h3>
        <p style="font-size: 0.8725em;color: #555555;line-height: 1.8em;">
            It is a long established fact that a reader will be distracted by the readable
            content of a page when looking at its layout.
        </p>
        <div style="margin: 20px 0">
            <span style="margin: 20px 0;font-size: 1.6em;color: #5EAFA5;line-height: 1.5em;text-shadow: 0 1px 0 #ffffff;">
                ${{number_format($product->price)}} 
            </span>
            @if($product->discount)
            <span style="margin: 20px 50px;font-size: 1.6em;color: orange;line-height: 1.5em;text-shadow: 0 1px 0 #ffffff;">${{number_format($product->discount)}}</span>
            @endif
        </div>
        <div style="margin-top: 10px;
        padding: 45px 0 ;
        border-top: 1px solid #979393;
        border-bottom: 1px solid #979393;">
            <h4 style="    font-size: 1.1em;color: #777;margin-bottom: 20px;text-transform: uppercase;text-shadow: 0 1px 0 #ffffff;">
                Available Options :
            </h4>
            <form method="POST" action="{{route('cart.store',['productId'=>$product->id])}}">
                @csrf
            <ul style="list-style: none;margin: 0;padding: 0;">
                <li style="display: inline;font-size: 0.8125em;padding: 10px 15px;color: #555555;">
                    Color:
                    <select style="font-family: 'Source Sans Pro', sans-serif;
                    outline: none;
                    display: inline;
                    font-size: 1em;
                    color: #555555;
                    margin-left: 10px;
                    padding: 4px;
                    border: 1px solid rgb(224, 224, 224);">
                        <option style="font-weight: normal;
                        display: block;
                        white-space: nowrap;
                        min-height: 1.2em;
                        padding: 0px 2px 1px;">
                        Silver
                        </option>
                        <option style="font-weight: normal;
                        display: block;
                        white-space: nowrap;
                        min-height: 1.2em;
                        padding: 0px 2px 1px;">
                        Black
                        </option>
                        <option style="font-weight: normal;
                        display: block;
                        white-space: nowrap;
                        min-height: 1.2em;
                        padding: 0px 2px 1px;">
                        White
                        </option>
                        <option style="font-weight: normal;
                        display: block;
                        white-space: nowrap;
                        min-height: 1.2em;
                        padding: 0px 2px 1px;">
                        Red
                        </option>
                    </select></li>
                    <li style="display: inline;font-size: 0.8125em;padding: 10px 15px;color: #555555;">
                        Size:
                        <select style="font-family: 'Source Sans Pro', sans-serif;
                        outline: none;
                        display: inline;
                        font-size: 1em;
                        color: #555555;
                        margin-left: 10px;
                        padding: 4px;
                        border: 1px solid rgb(224, 224, 224);">
                            <option style="font-weight: normal;
                            display: block;
                            white-space: nowrap;
                            min-height: 1.2em;
                            padding: 0px 2px 1px;">L</option>
                            <option style="font-weight: normal;
                            display: block;
                            white-space: nowrap;
                            min-height: 1.2em;
                            padding: 0px 2px 1px;">XL</option>
                            <option style="font-weight: normal;
                            display: block;
                            white-space: nowrap;
                            min-height: 1.2em;
                            padding: 0px 2px 1px;">S</option>
                            <option style="font-weight: normal;
                            display: block;
                            white-space: nowrap;
                            min-height: 1.2em;
                            padding: 0px 2px 1px;">M</option>
                        </select>
                    </li>
                    <li style="display: inline;font-size: 0.8125em;padding: 10px 15px;color: #555555;">
                        Amount:
                        <input type="number" value="1" min="1" style="    width: 60px;
                        height: 25px; border: 1px solid rgb(224, 224, 224);" name="amount">
                    </li>
                </ul>
                <div style="margin-top: 40px;">
                        <input type="submit" value="Add To Card" style="cursor: pointer;
                        padding: 10px 25px;
                        font-size: 15px;
                        background-color:orange;
                        text-decoration:none;
                        color:white
                        outline:none">
                   
                </div>
            </form>
           @if(Session::has('success'))
            <div class="alert alert-success" style="margin-top: 10px">{{Session::get('success')}}</div>
           @endif
            </div>
        </div>
</div>  
<script>
    function changeImage(id){
        let img=document.getElementById(id).getAttribute('src');
        document.getElementById('show').setAttribute('src',img);
    }
</script>
@include('footer.footer')
@endsection
