<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductCategory;

class ProductCategoryController extends Controller
{
    public function index()
    {
        $categories = ProductCategory::all();
        return view('admin.product-categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.product-categories.create');
    }   

    public function store(Request $request)
    {
        // Handle the file upload and store the file path
        $path = $request->file('thumbnail_image')->store('images', 'public');

        // Create the product category
        $category = ProductCategory::create([
            'name' => $request->input('name'),
            'thumbnail_image' => '/storage/' . $path,
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
        $category = ProductCategory::find($id);
        return view('admin.product-categories.edit', compact('category'));
    }   

    public function update(Request $request, $id)
    {
        $category = ProductCategory::findOrFail($id);
    
        if ($request->hasFile('thumbnail_image')) {
            $path = $request->file('thumbnail_image')->store('images', 'public');
            $category->thumbnail_image = '/storage/' . $path;
        }
    
        $category->name = $request->input('name');
        $category->is_active = $request->input('is_active');
        $category->save();
    
        $response = [
            'status' => true,
            'notification' => 'Updated successfully.',
        ];
    
        return response()->json($response);
    }

    public function destroy($id)
    {
        $category = ProductCategory::find($id);
        $category->delete();
        $response = [
            'status' => true,
            'notification' => 'Deleted successfully.',
        ];
    
        return response()->json($response);
    }
}