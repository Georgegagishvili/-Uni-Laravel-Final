@extends('adminpanel/admin_master')
@section('content')
    <div class="py-4">
        <div class="container">
            <div class="justify-content-center">
                <div class="panel">
                    <h1>Order №{{ $order->id }}</h1>
                    <p>Name: <b>{{ $order->name }}</b></p>
                    <p>Phone number: <b>{{ $order->phone }}</b></p>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Full Price</th>
                        </tr>
                        </thead>
                        <tbody>
						@foreach($order->products as $product)
						<tr>
							<td>
								<img src="/{{$product->image}}" style = 'width:50px;height: 50px;'>
                                {{$product->name}}
							</td>
							<td>
								{{$product->pivot->count}}
							</td>
							<td>
								{{$product->price}}
							</td>
							<td>
								{{$product->getPriceForCount()}}
							</td>
						</tr>
                        @endforeach
                        <tr>
                            <td colspan="3">Total Price:</td>
                            <td>{{$order->fullPrice()}}</td>
                        </tr>
                        </tbody>
                    </table>
                    <br>
                </div>
            </div>
        </div>
    </div>
@endsection