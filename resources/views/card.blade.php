    <div  class = 'card-wrapper'>
      <div class = 'card'>
        <div class = 'card-left'>
          <img src = '/{{$product->image}}'>
          <div class = 'card-buttons'>
            <form action="{{route('cart-add',$product)}}" method="POST">
                @csrf
                <button type="submit" role="button">ADD TO CART</button>
                <button><a style  = 'color: inherit;' href ="{{route('product',[$product->getCategory()->code,$product->code])}}">SEE MORE</a></button>     
            </form>
          </div>
        </div>
        <div class = 'card-right'>
          <p class = 'card-category-name'>@foreach($product->categories as $category){{$category->name}}, @endforeach</p>
          <h2>{{$product->name}}</h2>
          <span>{{$product->price}} $</span>
          <pre class = 'card-description'>{{$product->description}}</pre>
        </div>
      </div>
    </div>