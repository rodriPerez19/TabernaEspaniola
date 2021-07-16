<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{

    public function menu(){

        $products = Product::orderBy('name')
                            ->paginate(10);
        return view('frontend.index')->with(array('products'=> $products));
    }

    public function aboutUs(){
        return view('frontend.about-us');
    }



    public function index(){
        $products = Product::orderBy('created_at','desc')
                             ->paginate(10);

        return view('backend.product-list')->with(array('products'=> $products));
    }

    public function detail($id){
        $product = Product::find($id);
        return view('backend.product-detail')->with(array('product'=> $product));

    }

    public function categoryProducts($id){
        if($id != null){
            $products= Product::where('id_category',$id)
                                ->orderBy('name')
                                ->paginate(10);
            return view('frontend.index')->with(array('products'=> $products));
        }
    }

    public function create() {

        return view('backend.create-product');
    }

    public function config($id){

        $product= Product::find($id);

        return view('backend.config-product')->with(array('product' => $product));
    }

    public function save(Request $request){

        $validate = $this->validate($request, array(
            'name' => 'required|string|max:255|unique:products',
            'description' => 'required|string|max:255',
        ));

        $name = $request->name;
        $description = $request->description;
        $category = $request->category;
        $price = $request->price;
        $show = $request->show;

        $product = new Product;

        $product->name = $name;
        $product->description = $description;
        $product->id_category = $category;
        $product->price = $price;
        $product->show = $show;

        $product->save();

        return redirect()->route('product.create')
                         ->with(array('message' => 'El producto ha sido cargado correctamente!'));
    }

    public function update(Request $request){

        $validate = $this->validate($request, array(
            'name' => "required|string|max:255|unique:products,name,$request->id",
            'description' => 'required|string|max:255',
        ));

        $product = Product::find($request->id);
        if($product != null)
        {
            $name = $request->name;
            $description = $request->description;
            $category = $request->category;
            $price = $request->price;
            $show = $request->show;

            $product->name = $name;
            $product->description = $description;
            $product->id_category = $category;
            $product->price = $price;
            $product->show = $show;
            $product->update();
        }
        else{
            $message = "El producto no ha podido actualizarse";
        }
        return redirect()->route('product.index');
    }

    public function delete($id){

        $product = Product::find($id);
        $product->delete();

        return redirect()->route('product.index');

    }
}
