@extends('adminpanel/admin_master')
@section('content')
    <div class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                    <div class="col-md-12">
        <h1>Products</h1>
        <table class="table">
            <tbody>
            <div class="btn-group" role="group">
                <a class="btn btn-success" type="button"
                  href="{{route('addproducts')}}">Add Product</a>
            </div>
            <tr>
                <th>
                    Product Name
                </th>
                <th>
                    Product Code
                </th>
                <th>
                    Category ID
                </th>

                <th>
                    Price
                </th>
                <th>
                    Actions
                </th>
            </tr>
            @foreach($products as $product)
                <tr>
                    <td>{{$product->name}}</td>
                    <td>{{$product->code}}</td>
                    <td>{{$product->category_id}}</td>
                    <td>{{$product->price}} $</td>
                    <td>
                        <div class="btn-group" role="group">
                            <a class="btn btn-warning" type="button"
                              href="{{route('editproduct',["id"=>$product->id])}}"
                                >Edit</a>
                            <form method="POST" action = "{{ route('destroyproduct') }}" style = 'display: inline-block;'>
                                @csrf
                                <input type="hidden" name="id" value = '{{ $product->id }}'>
                                <button class = 'btn btn-danger'>Delete</button>
                            <a class="btn btn-success" type="button"
                              href="{{route('viewproduct',["id"=>$product->id])}}"
                                >View</a>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
                        </tbody>
        </table>
        
    </div>
            </div>
        </div>
    </div>
@endsection