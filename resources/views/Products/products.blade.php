<div class="container">
    <div class="selection" style="margin-top: 80px; border-bottom: 1px solid #7d7d7d;height: 40px">
        <x-menu></x-menu>
    </div>
    <center style="margin-top: 30px; font-size: 35px;font-weight:bolder;">{{$category->name??'Danh Sách Sản Phẩm'}}</center>
    <div class="content" style="margin-top: 50px">
        <div class="left">
            <div class="filter">
                <b>Filter by:</b>
            </div>
            <div class="select">
                <b>Size</b>
                <div>
                    <input type="checkbox">
                    XS
                </div>
                <div>
                    <input type="checkbox">
                    S
                </div>
                <div>
                    <input type="checkbox">
                    M
                </div>
                <div>
                    <input type="checkbox">
                    L
                </div>
                <div>
                    <input type="checkbox">
                    XL
                </div>
                <div>
                    <input type="checkbox">
                    XXL
                </div>
            </div>
            <div class="select">
                <b>Color</b>
                <div>
                    <input type="checkbox">
                    Green
                </div>
                <div>
                    <input type="checkbox">
                    Black
                </div>
                <div>
                    <input type="checkbox">
                    White
                </div>
                <div>
                    <input type="checkbox">
                    Yellow
                </div>
                <div>
                    <input type="checkbox">
                    Blue
                </div>
                <div>
                    <input type="checkbox">
                    Grey
                </div>
            </div>
            <div class="select">
                <b>Brand</b>
                <div>
                    <input type="checkbox">
                    Columbia
                </div>
                <div>
                    <input type="checkbox">
                    Diadora
                </div>
                <div>
                    <input type="checkbox">
                    Supreme
                </div>
                <div>
                    <input type="checkbox">
                    FILA
                </div>
                <div>
                    <input type="checkbox">
                    Fourlaps
                </div>
                <div>
                    <input type="checkbox">
                    Kappa
                </div>
                <div>
                    <input type="checkbox">
                    Katin
                </div>
                <div>
                    <input type="checkbox">
                    Les Benjamins
                </div>
            </div>
        </div>
        <div class="right">
            <div class="product" style="justify-content: normal;">
                @foreach($productspaginate->items() as $product)
                <div class="item" style="margin: 0px 20px 35px 0px;">
                    <div class="img">
                        <img src="{{$product->image}}" alt="">
                        <div class="add">
                            <a href="/projectdemo/public/product/{{$product->slug}}">Add to cart</a>
                        </div>
                    </div>
                    <div class="info">
                        <p><a href="">{{$product->name}}</a></p>
                        <b>${{number_format($product->price)}}</b>&emsp;
                        @if($product->discount)
                        <b style="color:orange">${{number_format($product->discount)}}</b>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
            <div class="page">
                {{$productspaginate->links()}}
            </div>
        </div>
    </div>
</div>