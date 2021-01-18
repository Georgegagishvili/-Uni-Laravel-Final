@extends('master')


@section('content')
  <div class = 'header'>
    <p>CATEGORIES</p>
  </div>
    <div class = 'category-list'>

           @foreach($categories as $category)
    <div class = 'category-wrapper'>
        <img src="/{{$category->image}}">
        <a href = '{{route('category',$category->code)}}'>{{$category->name}}</a>
        <p>{{$category->description}}
        </p>
    </div>
        @endforeach 
</div>
@endsection