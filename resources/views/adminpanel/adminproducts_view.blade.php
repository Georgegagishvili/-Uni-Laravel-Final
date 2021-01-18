@extends('adminpanel/admin_master')
@section('content')
<div class = 'wrapper' style ='display: flex;justify-content: center;'>
	<div class="card" style="width: 40vw;">
	  <img class="card-img-top"style = 'height:300px; object-fit: cover;' src="/{{$product->image}}" alt="Card image cap">
	  <ul class="list-group list-group-flush">
	    <li class="list-group-item">Product Name: {{$product->name}}</li>
	  </ul>
	  <div class="card-body">
	    <p class="card-text">Description: {{$product->description}}</p>
	  </div>
	  <ul class="list-group list-group-flush">
	    <li class="list-group-item">Code: {{$product->code}}</li>
	    <li class="list-group-item">Category ID: {{$product->category_id}}</li>
	    <li class="list-group-item">Category Name: {{$product->getCategory()->name}}</li>
	    <li class="list-group-item">Price: {{$product->price}} $</li>
	  </ul>
	</div>	
</div>

@endsection