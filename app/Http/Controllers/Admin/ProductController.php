<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductCategory;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $categories = ProductCategory::all();
        return view('admin.products.create', compact('categories'));
    }   

    public function store(Request $request)
    {
        // Handle the file upload and store the file path
        $path = $request->file('image')->store('images', 'public');

        //variation
        $variation = [];
        foreach($request->input('weight') as $index => $weight):
            if(!empty($weight) && !empty($request->input('price')[$index])):
                $variation[] = [$weight => $request->input('price')[$index]];
            endif;
        endforeach;
        $variation = json_encode($variation);

        // Create the product
        $product = Product::create([
            'category_id' => $request->input('category_id'),
            'name' => $request->input('name'),
            'image' => '/storage/' . $path,
            'variation' => $variation,
            'is_active' => $request->input('is_active'),
        ]);
        $response = array(
            'status' => true,
            'notification' => 'Created successfully.'
          );
        return $response;
    }

    public function show($id)
    {
        $category = ProductCategory::find($id);

        if (!$category) {
            return response()->json(['message' => 'Category not found'], 404);
        }

        return response()->json($category);
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $categories = ProductCategory::all();
        return view('admin.products.edit', compact('product', 'categories'));
    }   

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
    
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $product->image = '/storage/' . $path;
        }

        //variation
        $variation = [];
        foreach($request->input('weight') as $index => $weight):
            if(!empty($weight) && !empty($request->input('price')[$index])):
                $variation[] = [$weight => $request->input('price')[$index]];
            endif;
        endforeach;
        $variation = json_encode($variation);        
    
        $product->category_id = $request->input('category_id');
        $product->name = $request->input('name');
        $product->variation = $variation;
        $product->is_active = $request->input('is_active');
        $product->save();
    
        $response = [
            'status' => true,
            'notification' => 'Updated successfully.',
        ];
    
        return response()->json($response);
    }

    public function destroy($id)
    {
        $category = Product::find($id);
        $category->delete();
        $response = [
            'status' => true,
            'notification' => 'Deleted successfully.',
        ];
    
        return response()->json($response);
    }
}