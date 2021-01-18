@extends('master')
@section('content')
  <div class = 'header'>
    <div class ='header-title'>
      <p>ALL PRODUCTS {{$product}}</p>
    </div>
    <form method="GET" action="{{route('index')}}" autocomplete="off">
      <div class = 'header-filters'>
        <label for="price_from">Price From<input type="text" name="price_from" id="price_from">
        </label>
        <label for="price_to">to<input type="text" name="price_to" id="price_to">
        </label>
        <button>Filter</button> 
      </div>
  </form>
  </div>

    </form>
    <div class="card-list">
        @foreach($products as $product)
        @include('card',compact('product'))
        @endforeach
    </div>
    <div class = 'paginations'>{{$products->links()}}
    </div>
@endsection
