@extends('adminpanel/admin_master')
@section('content')
    <div class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                    <div class="col-md-12">
        <h1>Orders</h1>
        <table class="table">
            <tbody>
            <tr>
                <th>
                    #
                </th>
                <th>
                    Name
                </th>
                <th>
                    Phone
                </th>
                <th>
                    Order Date
                </th>
                <th>
                    Price
                </th>
                <th>
                    Actions
                </th>
            </tr>
            @foreach($orders as $order)
                <tr>
                    <td>{{$order->id}}</td>
                    <td>{{$order->name}}</td>
                    <td>{{$order->phone}}</td>
                    <td>{{$order->created_at}}</td>
                    <td>{{$order->fullPrice()}} $</td>
                    <td>
                        <div class="btn-group" role="group">
                            <a class="btn btn-success" type="button" href="{{route('ordersshow',$order)}}">Open</a>
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