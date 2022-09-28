<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index(){
    $products = Product::all();

    return view('admin.products.index', compact('products'));

    }

    public function create(){
        return view('admin.products.create');
    }

    public function store(Request $request){

        $request->validate([
            'Entitle' => 'required' ,
            'Artitle' => 'required' ,
            'image'   => 'required' ,

        ]);

        $ex = $request->file('image')->getClientOriginalExtension();
        $new_img_name = rand() . '_' . time() . '.' . $ex;
        $request->file('image')->move(public_path('uploads'), $new_img_name);


        Product::create([
            'Entitle' => $request->Entitle ,
            'Artitle' => $request->Artitle ,
            'image'   => $new_img_name


        ]);
        return redirect()->route('admin.product.index');
    }

    public function edit($id){
$product = Product::find($id);
return view('admin.products.edit',compact('product'));

    }

    public function update(Request $request , $id){
        $request->validate([
            'Entitle' => 'required' ,
            'Artitle' => 'required' ,
            'image'   => 'required' ,



        ]);


        $product = Product::find($id);

        $new_name = $product->image;
        if($request->has('image')) {
            $ex = $request->file('image')->getClientOriginalExtension();
            $new_name = rand() . '_' . time() . '.' . $ex;
            $request->file('image')->move(public_path('uploads'), $new_name);
        }

        $product = $product->update([
            'Entitle' => $request->Entitle,
            'Artitle' => $request->Artitle,
            'image' => $new_name,

        ]);
        return redirect()->route('admin.product.index');



    }

    public function destroy($id)
    {
        $product = Product::find($id);
        unlink(public_path('uploads/'.$product->image));
        $product->delete();
        return redirect()->back();
    }
}
