<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Order;
use App\Category;
use Auth;
use DB;
use Storage;

class AdminController extends Controller
{
    // ADMIN PANEL
    public function adminpanel(){
        if(Auth::user()->is_admin == 1){
            $orders = Order::where('status',1)->get();
        }else{
            $orders = Order::where('user_id',Auth::user()->id)->get();
        }
    	return view('admin_orders',compact('orders'));
    }


    public function admincategories(){
    	$categories = Category::get();
    	return view('adminpanel/admincategories',['categories'=>$categories]);
    }


    public function admincategories_add(){
    	return view('adminpanel/admincategories_add');
    }


    public function storecategories(Request $request){
        $request->validate([
            'code' => 'required|unique:categories,code',
            'name' => 'required',
            'description' => 'required',
			'image' => 'required|mimes:jpeg,png|max:10240',
        ]);

		$image = $request->file('image');
        $extension = $image->getClientOriginalExtension();
        $image_name = uniqid().'.'.$extension;
        $image->storeAs('public/product_images', $image_name);
        $image_url = "storage/product_images/".$image_name;
    	Category::create([
    		"name"=>$request->input("name"),
    		"code"=>$request->input("code"),
    		"description"=>$request->input("description"),
            "image"=>$image_url,
    	]);
        return redirect()->route('admincategories');

    }
    public function destroycategory(Request $request){
        Category::where('id',$request->input('id'))->delete();
        return redirect()->route('admincategories');
    }
    public function editcategory($id)
    {
        $category = Category::where('id',$id)->firstOrFail();
        return view('adminpanel/admincategories_edit',['category'=>$category]);
    }

    public function updatecategory(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,png|max:10240',
        ]);

        if($request->hasFile('image')) {
                $image_url = DB::table('categories')
                    ->where('id', $request->input('id'))
                    ->first()
                    ->image;
                Storage::delete(str_replace('storage', 'public', $image_url));
                $image = $request->file('image');
                $extension = $image->getClientOriginalExtension();
                $image_name = uniqid().'.'.$extension;
                $image->storeAs('public/category_images', $image_name);
                $image_url = "storage/category_images/".$image_name;
                Category::where("id", $request->input('id'))
                    ->update([
                        'image'=>$image_url
                    ]);
            }
        Category::where("id",$request->input("id"))->update([
            "name"=>$request->input("name"),
            "code"=>$request->input('code'),
            "description"=>$request->input("description"),
            "image"=>$image_url,

        ]);
        return redirect()->route('admincategories');
    }

    public function viewCategory($id){
        $category = Category::where('id',$id)->firstOrFail();
        return view('adminpanel/admincategories_view',['category'=>$category]);
    }









    public function adminproducts(){
    	$products = Product::get();
    	return view('adminpanel/adminproducts',['products'=>$products]);
    }

    public function addproducts(){
        $categories = Category::get();
    	return view('adminpanel/admin_productsadd',compact('categories'));
    }


    public function storeproducts(Request $request){
        $all_categories = Category::all();
        $product_categories = array();
        foreach($all_categories as $category){
            if($request->has($category->id)){
                array_push($product_categories,$category->id);
            }
        }

        $request->validate([
            'name' => 'required',
            'code' => 'required|unique:products,code',
            'description' => 'required',
            'price' => 'required',
            'image' => 'required|mimes:jpeg,png|max:10240',
        ]);
        $image = $request->file('image');
        $extension = $image->getClientOriginalExtension();
        $image_name = uniqid().'.'.$extension;
        $image->storeAs('public/product_images', $image_name);
        $image_url = "storage/product_images/".$image_name;

    	Product::create([
    		"name"=>$request->input("name"),
    		"code"=>$request->input("code"),
    		"description"=>$request->input("description"),
            "price"=>$request->input("price"),
            "image"=>$image_url,
    	]);

        Product::latest()->first()->categories()->sync($product_categories);
        return redirect()->route('adminproducts');

    }

    public function editproduct($id){
        $product = Product::where('id',$id)->firstOrFail();
        return view('adminpanel/adminproducts_edit',['product'=>$product]);
    }

    public function updateproduct(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'price' => 'required',
            'image' => 'required|mimes:jpeg,png|max:10240',
        ]);
        if($request->hasFile('image')) {
                $image_url = DB::table('products')
                    ->where('id', $request->input('id'))
                    ->first()
                    ->image;
                Storage::delete(str_replace('storage', 'public', $image_url));
                $image = $request->file('image');
                $extension = $image->getClientOriginalExtension();
                $image_name = uniqid().'.'.$extension;
                $image->storeAs('public/product_images', $image_name);
                $image_url = "storage/product_images/".$image_name;
                Product::where("id", $request->input('id'))
                    ->update([
                        'image'=>$image_url
                    ]);
            }

        Product::where("id",$request->input("id"))->update([
            "category_id"=>$request->input("category_id"),
            "name"=>$request->input("name"),
            "price"=>$request->input("price"),
            "code"=>$request->input('code'),
            "description"=>$request->input("description"),
            "image"=>$image_url,

        ]);
        return redirect()->route('adminproducts');
    }


    public function destroyproduct(Request $request){
        Product::where('id',$request->input('id'))->delete();
        return redirect()->route('adminproducts');
    }

    public function viewProduct($id){
        $product = Product::where('id',$id)->firstOrFail();
        return view('adminpanel/adminproducts_view',['product'=>$product]);
    }



    public function showorder(Order $order){
        return view('adminpanel/admin_showorder',compact('order'));
    }
}
