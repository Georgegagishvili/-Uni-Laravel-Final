@extends('adminpanel/admin_master')
@section('title','Edit Category: ' . $category->name)
@section('content')
	<div class="container card" style = "margin-top:5%">
		<form action = "{{route('updatecategory')}}" method = 'POST' enctype="multipart/form-data">
			@csrf
			<input type="hidden" name="id" value = "{{ $category->id }}">
			<input type="hidden" name="image" value = "{{ $category->image }}">
		  <div class="form-group">
			@error('name')
			<div class = 'alert alert-danger'>{{$message}}</div>
			@enderror
		    <label style = 'margin-top:1%'>Name</label>
		    <input type="text" class="form-control"name="name" placeholder="{{$category->name}}">	    
		  </div>
		  <div class="form-group">
			@error('code')
			<div class = 'alert alert-danger'>{{$message}}</div>
			@enderror
		    <label style = 'margin-top:1%'>Code</label>
		    <input type="text" class="form-control"name="code" placeholder="{{$category->code}}">	    
		  </div>
		  <div class="form-group">
             <input type="file" name="image" id='file' class = 'file' accept="image/png, image/jpeg">
             <label for='file' class='filelabel' @error('description') style="background-color: #963232" @enderror>File</label>
		  </div>
		  <div class="form-group">
			@error('description')
			<div class = 'alert alert-danger'>{{$message}}</div>
			@enderror
			 <label for="exampleFormControlTextarea1">Description</label>
			 <textarea class="form-control" rows="3" name = 'description' placeholder="{{$category->description}}"></textarea>
		  </div>
		  <input type="hidden" name="user_id">
		  <button style ='margin-bottom: 1%' type="submit" class="btn btn-primary">Submit</button>
		  
		</form>
	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
@endsection