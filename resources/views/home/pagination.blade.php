<div class="card-columns my-5">
    @foreach ($data as $item)
        <div class="card my-3">
            <img class="card-img-top" src="/storage/images/{{$item->image}}" height="600" width="600"alt="{{$item->productname}}">
            <div class="card-body">
                <h4 class="card-title">{{$item->productname}}</h4>
                <p class="card-text">{{$item->price}}</p>
            </div>
            <div class="card-footer">
                    <a href="/product_detail/{{$item->id}}" class="theme-btn btn-style-one btn-block">Review</a>
                <a href="/shopping_cart/{{$item->id}}" class="theme-btn btn-style-one btn-block">Add to Cart</a>
            </div>
        </div>
    @endforeach

    {{ $data->links() }}
</div>
