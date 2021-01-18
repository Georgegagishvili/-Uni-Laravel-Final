@extends('adminpanel/admin_master')
@section('title','Edit Product: ' . $product->name)
@section('content')
	<div class="container card" style = "margin-top:5%">
		<form action = "{{route('updateproduct')}}" method = 'POST' enctype="multipart/form-data">
			@csrf
			<input type="hidden" name="id" value = "{{ $product->id }}">
			<input type="hidden" name="image" value = "{{ $product->image }}">
		  <div class="form-group">
		    <label style = 'margin-top:1%'>Category Id</label>
		    <input type="text" class="form-control"name="category_id" placeholder="{{$product->category_id}}">	    
		  </div>
		  <div class="form-group">
		    <label style = 'margin-top:1%'>Name</label>
		    <input type="text" class="form-control"name="name" placeholder="{{$product->name}}">	    
		  </div>
		  <div class="form-group">
		    <label style = 'margin-top:1%'>Code</label>
		    <input type="text" class="form-control"name="code" placeholder="{{$product->code}}">	    
		  </div>
		  <div class="form-group">
             <input type="file" name="image" id='file' class = 'file' accept="image/png, image/jpeg">
             <label for='file' class='filelabel' @error('description') style="background-color: #963232" @enderror>File</label>
		  </div>
		  <div class="form-group">
			 <label for="exampleFormControlTextarea1">Price</label>
		    <input type="text" class="form-control"name="price" placeholder="{{$product->price}}">
		  </div>
		  <div class="form-group">
			 <label for="exampleFormControlTextarea1">Description</label>
			 <textarea class="form-control" rows="3" name = 'description' placeholder="{{$product->description}}"></textarea>
		  </div>
		  <input type="hidden" name="user_id">
		  <button style ='margin-bottom: 1%' type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
@endsection