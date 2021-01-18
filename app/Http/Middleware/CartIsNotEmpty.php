<?php

namespace App\Http\Middleware;

use Closure;
use App\Order;
class CartIsNotEmpty
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $orderId = session('orderId');
        if(!is_null($orderId)){
            $order = Order::findOrFail($orderId);
            if($order->products->count() > 0){
                return $next($request);
            }

        }
        session()->flash('warning', 'Your Cart Is Empty');
        return redirect()->route('index');
    }
}
