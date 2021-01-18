@extends('adminpanel/admin_master')
@section('content')
    <div class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                    <div class="col-md-12">
        <h1>Categories</h1>
        <table class="table">
            <tbody>
                <a class="btn btn-success" type="button"
                  href="{{route('admincategories_add')}}"
                    >New Category</a>
            <tr>
                <th>
                    #
                </th>
                <th>
                    Category Name
                </th>
                <th>
                    Code
                </th>
                <th>
                    Actions
                </th>
            </tr>
            @foreach($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <td>{{$category->code}}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <a class="btn btn-warning" type="button"
                              href="{{route('editcategory',["id"=>$category->id])}}"
                                >Edit</a>
                            <form method="POST" action = "{{ route('destroycategory') }}" style = 'display: inline-block;'>
                                @csrf
                                <input type="hidden" name="id" value = '{{ $category->id }}'>
                                <button class = 'btn btn-danger'>Delete</button>
                            </form>
                           <a class="btn btn-success" type="button"
                              href="{{route('viewcategory',["id"=>$category->id])}}"
                                >View</a>
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