@extends('master')

@section('title','Category: ' . $category->name)

@section('content')
    <div class ='header'>
    <div class ='header-title'>
      <p>{{$category->name}} {{$products->count()}}</p>
    </div>  
    </div>
    <div class="card-list">
        @foreach($products as $product)
            @include('card', ['category' => $category])
        @endforeach
@endsection