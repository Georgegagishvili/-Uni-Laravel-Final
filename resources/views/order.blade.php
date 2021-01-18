@extends('master')
    
@section('content')
  <div class = 'header'>
    <p>Place Order</p>
  </div>
  <div class = 'order_middle_panel'>
    <h2>Full Cost: {{$order->fullPrice()}} $</h2>
    <h3>Please, specify your personal data to our manager may contact with you:</h2>
  </div>
    <div class = 'order_form_wrapper'>
    <form class = 'order_place_form' action="{{route('cart-confirm')}}" method="POST" autocomplete="off">
        @csrf
        <label>First Name</label>
        <input type="text" name="name">
        <label>Phone Number</label>
        <input type="text" name="phone">
        <button>
            Order
        </button>
    </form>
  </div>
@endsection