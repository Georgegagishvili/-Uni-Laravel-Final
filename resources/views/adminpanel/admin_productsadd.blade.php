@extends('adminpanel/admin_master')
@section('title','Add Category')
@section('content')
	<div class="container card" style = "margin-top:5%">
		<form action = "{{route('storeproducts')}}" method = 'POST' enctype="multipart/form-data">
			@csrf
		  <div class="form-group">
		    <label style = 'margin-top:1%'>Category Id</label>
		    <input type="text" class="form-control"name="category_id">	    
		  </div>
		  <div class="form-group">
		    <label style = 'margin-top:1%'>Name</label>
		    <input type="text" class="form-control"name="name">	    
		  </div>
		  <div class="form-group">
		    <label style = 'margin-top:1%'>Code</label>
		    <input type="text" class="form-control"name="code">	    
		  </div>
		  <div class="form-group">
             <input type="file" name="image" id='file' class = 'file' accept="image/png, image/jpeg">
             <label for='file' class='filelabel' @error('description') style="background-color: #963232" @enderror>File</label>
		  </div>
		  <div class="form-group">
			 <label for="exampleFormControlTextarea1">Price</label>
		    <input type="text" class="form-control"name="price">
		  </div>
		  <div class="form-group">
			 <label for="exampleFormControlTextarea1">Description</label>
			 <textarea class="form-control" rows="3" name = 'description'></textarea>
		  </div>

		  <button style ='margin-bottom: 1%' type="submit" class="btn btn-primary">Submit</button>
		  
		</form>
	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
@endsection