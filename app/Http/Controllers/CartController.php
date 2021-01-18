<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Product;
use App\Category;
use Auth;

class CartController extends Controller
{
    // CART
    public function cart(){
    	$orderId = session('orderId');
    	if(!is_null($orderId)){
    		$order = Order::findOrFail($orderId);
    	}
        return view('cart',compact('order'));
    }

    public function cartConfirm(Request $request){
        $orderId = session('orderId');
        if(is_null($orderId)){
            return redirect()->route('index');
        }
        $order = Order::find($orderId);

        $success = $order->saveOrder($request->name,$request->phone);

        session()->flash('success','Your Order Is Being Proceed');

        session()->forget('orderId');


        return redirect()->route('index');
    }


    public function cartPlace(){
        $orderId = session('orderId');
        if(is_null($orderId)){
            return redirect()->route('index');
        }
        $order = Order::find($orderId);
        return view('order',compact('order'));
    }

    public function cartAdd($productId, Request $request){

    	$orderId = session('orderId');
    	if(is_null($orderId)){
    		$order = Order::create([
    		"id"=>$request->get("id"),
    		]);
    		session(['orderId' => $order->id]);
    	}else{
    		$order = Order::find($orderId);
    	}

        if ($order->products->contains($productId)){
            $newRow = $order->products()->where('product_id',$productId)->first()->pivot;
            $newRow->count++;
            $newRow->update();
        }else{
            $order->products()->attach($productId);
        }

        if (Auth::check()){
            $order->user_id = Auth::id();
            $order->save();
        }


        $product = Product::find($productId);

        session()->flash('success','Successfully Added ' . $product->name);

        return redirect()->route('cart');
    }

    public function cartRemove($productId, Request $request){
        $orderId = session('orderId');
        if (is_null($orderId)){
            return view('cart',compact('order'));
        }
        $order = Order::find($orderId);

        if ($order->products->contains($productId)){
            $newRow = $order->products()->where('product_id',$productId)->first()->pivot;
            if ($newRow->count < 2){
                $order->products()->detach($productId);
            }
            $newRow->count--;
            $newRow->update();
        }  
        $product = Product::find($productId);

        session()->flash('warning','Successfully Removed ' . $product->name);

        return redirect()->route('cart');

    }

}
