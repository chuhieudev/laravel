<div class="container">
   <div class="row-header">
    <div class="logo">
        <a href="{{route('home')}}">
            <i class="fab fa-galactic-republic" aria-hidden="true"></i>
        </a>
    </div>
    <div class="icon">
        <ul>
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            <li>
                <a href="{{route('cart.index')}}"><i class="fas fa-shopping-cart">{{Session::get('cart')?Session::get('cart')->count():0}}</i></a>
                {{-- <div class="table">
                    <table cellpadding="0"cellspacing="0">
                        <tr>
                            <td>
                                <img src="./frontend/image/01.jpg" alt="">
                            </td>
                            <td>
                                Hoodie Sweatshirt
                            </td>
                            <td>
                                32,000$
                            </td>
                            <td>
                                <input type="number" value="1" min="1" max="5">
                            </td>
                            <td>
                                <i class="fas fa-times-circle" aria-hidden="true"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="./frontend/image/02.jpg" alt="">
                            </td>
                            <td>
                                Hoodie Sweatshirt
                            </td>
                            <td>
                                32,000$
                            </td>
                            <td>
                                <input type="number" value="1" min="1" max="5">
                            </td>
                            <td>
                                <i class="fas fa-times-circle" aria-hidden="true"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="./frontend/image/03.jpg" alt="">
                            </td>
                            <td>
                                Hoodie Sweatshirt
                            </td>
                            <td>
                                32,000$
                            </td>
                            <td>
                                <input type="number" value="1" min="1" max="5">
                            </td>
                            <td>
                                <i class="fas fa-times-circle" aria-hidden="true"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="./frontend/image/04.jpg" alt="">
                            </td>
                            <td>
                                Hoodie Sweatshirt
                            </td>
                            <td>
                                32,000$
                            </td>
                            <td>
                                <input type="number" value="1" min="1" max="5">
                            </td>
                            <td>
                                <i class="fas fa-times-circle" aria-hidden="true"></i>
                            </td>
                        </tr>
                        <tr>
                            <td  colspan="5">
                                <a href="#"> Pay Now</a>
                            </td>
                        </tr>
                    </table>
                </div> --}}
            </li>
            <li>
                <i class="fas fa-bars" style="cursor: pointer;font-size: 20px; color:#7d7d7d"></i>
                <ul>
                    <li><a href="{{route('product')}}">Product</a></li>
                    <li><a href="{{route('new')}}">News</a></li>
                    <li><a href="{{route('logout')}}">Logout</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
</div>