@extends('adminpanel/admin_master')
@section('content')
<div class = 'wrapper' style ='display: flex;justify-content: center;'>
	<div class="card" style="width: 40vw;">
	  <img class="card-img-top"style = 'height:300px; object-fit: cover;' src="/{{$category->image}}" alt="Card image cap">
	  <ul class="list-group list-group-flush">
	    <li class="list-group-item">Category Name: {{$category->name}}</li>
	  </ul>
	  <div class="card-body">
	    <p class="card-text">Description: {{$category->description}}</p>
	  </div>
	  <ul class="list-group list-group-flush">
	    <li class="list-group-item">Code: {{$category->code}}</li>
	    <li class="list-group-item">ID: {{$category->id}}</li>
	    <li class="list-group-item">Vestibulum at eros</li>
	  </ul>
	</div>	
</div>

@endsection