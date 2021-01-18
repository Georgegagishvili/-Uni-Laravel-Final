@extends('master')

@section('content')
<style type="text/css">
body{
    height: 100%;
    background: linear-gradient(90deg, #18191a 70%, #31313a 130%);
}
</style>
  <div class = 'header'>
    <p>CART/CHECKOUT</p>
  </div>
  <div class="orders_table_wrapper">
      <table>
        <thead>
          <tr class="table_head">
            <th class="column1">Product Name</th>
            <th class="column2">Quantity</th>
            <th class="column3">Price</th>
            <th class="column4">Total</th>
          </tr>
        </thead>
        <tbody class = 'table_body'>
         @foreach($order->products as $product)
            <tr>
              <td class = 'column1'><a href="{{route('product',[$product->getCategory()->code,$product->code])}}">{{$product->name}}</a></td>
              <td class="column2">
                <form action="{{route('cart-add',$product)}}" method="POST" style = 'display: inline-block;'>
                    @csrf
                    <button type="submit" class = 'order_plus'>+</button>
                </form>
                        {{$product->pivot->count}}

                <form action="{{route('cart-remove',$product)}}" method="POST" style = 'display: inline-block;'>
                    @csrf
                    <button type = 'submit' class = 'order_minus'>-</button>
                </form>
              </td>
              <td class="column3">${{$product->price}}</td>
              <td class="column4">${{$product->getPriceForCount()}}</td>
            </tr>
        @endforeach
            <tr>
              <td class="column1">Full Price</td>
              <td class="column2"></td>
              <td class="column3"></td>
              <td class="column4">${{$order->fullPrice()}}</td>
            </tr>

        </tbody>
      </table>
  </div>


  <div class = 'place_order_footer'>
    <div class = 'place_order_button_wrapper'>
      <a href= "{{route('cartplace')}}" type = 'button'>
        Place Order
      </a>
    </div>
  </div>
@endsection