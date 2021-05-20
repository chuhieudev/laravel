 <div class="bg-img" style="margin-top: 40px">
    <div class="content">
        <div class="left">
            <i class="fas fa-bolt" aria-hidden="true"></i>
                Lorem ipsum dolor sit amet 
            <i class="fas fa-bolt" aria-hidden="true"></i>
        </div>
        <div class="right">
            <form action="{{route('product')}}" method="">
                 <input type="text" placeholder="Tên Sản Phẩm" name="search" value="{{request('search')}}">
            <button>
                    Search
                <i class="fas fa-paper-plane" aria-hidden="true"></i>
            </button>
            </form>
        </div>
    </div>
</div>