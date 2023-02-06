<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;

use  App\Models\Product ; 
use Image;
class ProductsController extends Controller
{
    public function index() {
        return view('product.index');
    }

    public function create(){
        return view('product.create');
    }

    public function store(ProductRequest $request){

        $product = new Product(); 
        if ($request->hasFile('image')) {

            $rename = time() . '.' .$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('uploads/product/', $rename);
            //resize image
            Image::make(('uploads/product/' . $rename))->resize(450, 450)
                        ->save(('uploads/resize/' . $rename));

            $product->image = $rename; 

        }else{
            $product->image = "https://via.placeholder.com/450x450.png"; 
        }
            $product->name = $request->name ; 
            $product->detail = $request->detail ; 
            $product->price = $request->price ; 
            $product->stock = $request->stock ; 
            $product->save(); 
            return redirect('/products'); 
        
    }
}
