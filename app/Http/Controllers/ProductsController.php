<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use App\Category;
use App\Tag;
use App\Product;
use App\Image;
use App\Http\Requests\ProductRequest;

class ProductsController extends Controller
{
    public function index(Request $request){
        $products = Product::Search($request->name)->orderBy('id','DESC')->paginate(7);
        return view('admin.products.index')->with('products',$products);
    }
    
    public function create(){
       
        $categories = Category::orderBy('name', 'ASC')->pluck('name','id');
        $tags = Tag::orderBy('name', 'ASC')->pluck('name','id');
        return view('admin.products.create')
            ->with('categories', $categories)
            ->with('tags', $tags);
    }
    
    public function store(ProductRequest $request){
        
        if($request->file('image')) 
        {    
            $file = $request->file('image');
            $name = 'brezzaproduct_'.time().'.'.$file->getClientOriginalExtension();
            $path = public_path().'/images/products/';
            $file->move($path,$name);
        }
        
        $product = new Product($request->all());
        $product->user_id = 1;
        $product->save();
        
        $product->tags()->sync($request->tags);
        
        $image = new Image();
        $image->name = $name;
        $image->product()->associate($product);
        $image->save();
        
        Flash::success('El producto ' . $product->name . ' ha sido registrado exitosamente.');
        return redirect()->route('products.index');
    }
    
    public function show($id)
    {
        //
    }
    
    public function edit($id){
        $product = Product::find($id);
        $product->category;
        $product_tags = $product->tags->pluck('id')->toArray();
        
        $categories = Category::orderBy('name', 'DESC')->pluck('name', 'id');
        $tags = Tag::orderBy('name','DESC')->pluck('name', 'id');
        return view('admin.products.edit')
                ->with('product', $product)
                ->with('categories', $categories)
                ->with('tags', $tags)
                ->with('product_tags', $product_tags);
    }
    
    public function update(Request $request, $id){
        $product = Product::find($id);
        $product->fill($request->all());
        $product->save();
        
        $product->tags()->sync($request->tags);
        Flash::warning('El producto ' . $product->name . ' ha sido actualizado exitosamente.');
        return redirect()->route('products.index');
    }
    
    public function destroy($id){
         $product = Product::find($id);
        
        $product->delete();
        Flash::error('El producto ' . $product->name . ' ha sido eliminado exitosamente.');
        return redirect()->route('products.index');
    }
}
