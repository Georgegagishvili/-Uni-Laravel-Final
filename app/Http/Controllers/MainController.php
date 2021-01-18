<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Order;
use App\Category;
use App\Comment;
use Auth;

class MainController extends Controller
{
    public function index(Request $request){
        $categories = Category::get();
        $productsQuery = Product::query()->latest();

        if($request->filled('price_from')){
            $productsQuery->where('price','>=',$request->price_from);
        }

        if($request->filled('price_to')){
            $productsQuery->where('price','<=',$request->price_to);
        }

        $products = $productsQuery->paginate(6);
        $product = Product::count();
        return view('index',compact('products','product'));
    }

// categories
    public function categories(){
    	$categories = Category::get();
    	return view('categories',['categories'=>$categories]);
    }
    public function category($code){
        $category = Category::where('code',$code)->first();
        $products = Product::where('id',$category->id)->latest()->get();
        return view('category',compact('category','products'));
    }

    // Product
    public function product($category,$productCode){
        $categories = Category::get();
        $product = Product::where('code',$productCode)->first();
        $comments = Comment::where('product_id',$product->id)->get();

        return view('product', compact('product','comments','categories')); 
    }
// product-comments

    public function storeComment(Request $request){
        Comment::create([
            'product_id'=>$request->input('product_id'),
            'user_id'=>Auth::user()->id,
            'title'=>$request->input('title'),
            'comment'=>$request->input('comment'),
        ]);
        return redirect()->back();
    }
}

