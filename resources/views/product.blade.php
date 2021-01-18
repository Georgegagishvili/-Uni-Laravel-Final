@extends('master')
@section('content')
  <div class = 'header'>
    <p>Full Information</p>
  </div>
  <div class = 'product_card_wrapper'>
    <div class = 'product_card'>
        <div class = 'product_card_left'>
            <img src="/{{$product->image}}">
        </div>

        <div class = 'product_card_right'>
            <p class = 'product_category_name'>@foreach($product->categories as $category)
            {{$category->name}},
            @endforeach</p>
            <span class = 'product_product_name'>{{$product->name}}</span>
            <p class = 'product_description'>Product Description:</p>
            <pre class = 'product_description_text'>{{$product->description}}</pre>
            <p class = 'product_price'>{{$product->price}}$</p>
            <form action="{{route('cart-add',$product)}}" method="POST">
                @csrf
                <button type = 'submit'>ADD TO CART</button>
            </form>
        </div>
      </div>    
    </div>

    <div class = 'product-comments'>
        <h2>Product Comments</h2>
        @auth
        <div class = 'comment-form'>
            <form method = "POST" action = "{{route('storecomment')}}">
                @csrf
                <input type="text" name="title" placeholder="Title">
                <textarea type="text" name="comment" placeholder="comment"></textarea>
                <input type="hidden" name="product_id" value = '{{$product->id}}'>
                <input type="hidden" name="user_id" value = '{{Auth::user()->id}}'>

                <button type = 'SUBMIT'>Submit Comment</button>
            </form>
        </div>
        @endauth
        @foreach($comments as $comment)
        <div class = 'single-comment'>
            <span>Comment Title: {{$comment->title}}</span>
            <span>Comment: <br>{{$comment->comment}}</span>
        </div>
        @endforeach
    </div>
@endsection

