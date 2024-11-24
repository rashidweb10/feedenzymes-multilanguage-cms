<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Product;
use App\Models\ProductCategory;

class PageController extends Controller
{
    public function index()
    {
        $pages = Page::all();
        return view('admin.pages.index', compact('pages'));
    }

    public function create()
    {
        // $categories = ProductCategory::all();
        // return view('admin.pages.create', compact('categories'));
    }   

    public function store(Request $request)
    {
        // // Handle the file upload and store the file path
        // $path = $request->file('image')->store('uploads/'.languageSession(), 'public');

        // //variation
        // $variation = [];
        // foreach($request->input('weight') as $index => $weight):
        //     if(!empty($weight) && !empty($request->input('price')[$index])):
        //         $variation[] = [$weight => $request->input('price')[$index]];
        //     endif;
        // endforeach;
        // $variation = json_encode($variation);

        // // Create the product
        // $product = Product::create([
        //     'category_id' => $request->input('category_id'),
        //     'name' => $request->input('name'),
        //     'image' => '/storage/' . $path,
        //     'variation' => $variation,
        //     'is_active' => $request->input('is_active'),
        // ]);
        // $response = array(
        //     'status' => true,
        //     'notification' => 'Created successfully.'
        //   );
        // return $response;
    }

    public function show($id)
    {
        // $category = ProductCategory::find($id);

        // if (!$category) {
        //     return response()->json(['message' => 'Category not found'], 404);
        // }

        // return response()->json($category);
    }

    public function edit($id)
    {
        $page = Page::find($id);
        return view('admin.pages.edit', compact('page'));
    }   

    // public function update(Request $request, $id)
    // {
    //     $page = Page::findOrFail($id);
    
    //     if ($request->hasFile('image')) {
    //         $path = $request->file('image')->store('uploads/'.languageSession(), 'public');
    //         $page->image = '/storage/' . $path;
    //     }

    //     //variation
    //     // $variation = [];
    //     // foreach($request->input('weight') as $index => $weight):
    //     //     if(!empty($weight) && !empty($request->input('price')[$index])):
    //     //         $variation[] = [$weight => $request->input('price')[$index]];
    //     //     endif;
    //     // endforeach;
    //     // $variation = json_encode($variation);        
    
    //     //$product->category_id = $request->input('category_id');
    //     $page->name = $request->input('name');
    //     //$product->variation = $variation;
    //     //$product->is_active = $request->input('is_active');
    //     $page->save();
    
    //     $response = [
    //         'status' => true,
    //         'notification' => 'Updated successfully.',
    //     ];
    
    //     return response()->json($response);
    // }

    public function update(Request $request, $id)
    {
        if($id == 1){ 
            $page = Page::findOrFail($id);
            if ($request->hasFile('banner_image')) {
                $path = $request->file('banner_image')->store('uploads/'.languageSession(), 'public');
                $banner_image = '/storage/' . $path;
            }else{
                $banner_image = $request->old_banner_image;
            }  
            
            if ($request->hasFile('gevent_image')) {
                $path = $request->file('gevent_image')->store('uploads/'.languageSession(), 'public');
                $gevent_image = '/storage/' . $path;
            }else{
                $gevent_image = $request->old_gevent_image;
            }  
            
            //ABOUT SECTION
            $p1_data = [];
            foreach($request->p1_index as $index => $d):

                if ($request->hasFile('p1_image.'.$index)) {
                    $path = $request->file('p1_image.'.$index)->store('uploads/'.languageSession(), 'public');
                    $p1_image = '/storage/' . $path;
                } else {
                    $p1_image = $request->old_p1_image[$index] ?? null;
                }

                $p1_data[] = [
                    'p1_title' => $request->p1_title[$index],
                    'p1_image' => $p1_image,
                    'p1_description' => $request->p1_description[$index]
                ];
            endforeach; 
            
            //Custom Product
            $p2_data = [];
            foreach($request->p2_index as $index => $d):
        
                if ($request->hasFile('p2_image.'.$index)) {
                    $path = $request->file('p2_image.'.$index)->store('uploads/'.languageSession(), 'public');
                    $p2_image = '/storage/' . $path;
                } else {
                    $p2_image = $request->old_p2_image[$index] ?? null;
                }
        
                $p2_data[] = [
                    'p2_title' => $request->p2_title[$index],
                    'p2_image' => $p2_image,
                    'p2_description' => $request->p2_description[$index]
                ];
            endforeach; 
            
            $p3_data = [];
            foreach($request->p3_index as $index => $d):
        
                if ($request->hasFile('p3_image.'.$index)) {
                    $path = $request->file('p3_image.'.$index)->store('uploads/'.languageSession(), 'public');
                    $p3_image = '/storage/' . $path;
                } else {
                    $p3_image = $request->old_p3_image[$index] ?? null;
                }
        
                $p3_data[] = [
                    'p3_title' => $request->p3_title[$index],
                    'p3_image' => $p3_image,
                    'p3_description' => $request->p3_description[$index]
                ];
            endforeach;             


            $contents = [
                'banner_title' => $request->banner_title,
                'banner_image' => $banner_image,
                'banner_description' => $request->banner_description,         
                'gevent_image' => $gevent_image,
                'gevent_description' => $request->gevent_description,  
                'uevent_description' => $request->uevent_description,       
                'p1_data' => $p1_data,       
                'p2_desc' => $request->p2_desc,       
                'p2_data' => $p2_data,   
                'p3_desc' => $request->p3_desc,    
                'p3_data' => $p3_data,       
            ];
            $page->contents = json_encode($contents);
            $page->save(); 
                         
        }elseif($id == 2){
            $page = Page::findOrFail($id);

            if ($request->hasFile('banner_image')) {
                $path = $request->file('banner_image')->store('uploads/'.languageSession(), 'public');
                $banner_image = '/storage/' . $path;
            }else{
                $banner_image = $request->old_banner_image;
            }    
            
            if ($request->hasFile('about_image')) {
                $path = $request->file('about_image')->store('uploads/'.languageSession(), 'public');
                $about_image = '/storage/' . $path;
            }else{
                $about_image = $request->old_about_image;
            } 
            
            $tabs_data = [];
            foreach($request->tab_index as $index => $d):

                if ($request->hasFile('tab_image.'.$index)) {
                    $path = $request->file('tab_image.'.$index)->store('uploads/'.languageSession(), 'public');
                    $tab_image = '/storage/' . $path;
                } else {
                    $tab_image = $request->old_tab_image[$index] ?? null;
                }

                $tabs_data[] = [
                    'tab_alias' => $request->tab_alias[$index],
                    'tab_title' => $request->tab_title[$index],
                    'tab_image' => $tab_image,
                    'tab_description' => $request->tab_description[$index]
                ];
            endforeach;

            $contents = [
                'banner_title' => $request->banner_title,
                'banner_image' => $banner_image,
                'banner_description' => $request->banner_description,
                'about_title' => $request->about_title,
                'about_image' => $about_image,
                'about_description' => $request->about_description,   
                "tabs_data" =>  $tabs_data          
            ];

            $page->contents = json_encode($contents);
            $page->save();           

        }elseif($id == 3){ 
            $page = Page::findOrFail($id);
            if ($request->hasFile('banner_image')) {
                $path = $request->file('banner_image')->store('uploads/'.languageSession(), 'public');
                $banner_image = '/storage/' . $path;
            }else{
                $banner_image = $request->old_banner_image;
            }            
            $contents = [
                'banner_title' => $request->banner_title,
                'banner_image' => $banner_image,
                'banner_description' => $request->banner_description,         
                'page_description' => $request->page_description,         
            ];
            $page->contents = json_encode($contents);
            $page->save();  

        }elseif($id == 4){ 
            $page = Page::findOrFail($id);
            if ($request->hasFile('banner_image')) {
                $path = $request->file('banner_image')->store('uploads/'.languageSession(), 'public');
                $banner_image = '/storage/' . $path;
            }else{
                $banner_image = $request->old_banner_image;
            }            
            $contents = [
                'banner_title' => $request->banner_title,
                'banner_image' => $banner_image,
                'banner_description' => $request->banner_description,  
                'page_description' => $request->page_description,          
            ];
            $page->contents = json_encode($contents);
            $page->save(); 

        }
    
        $response = [
            'status' => true,
            'notification' => 'Updated successfully.',
        ];
    
        return response()->json($response);
    }   

    public function destroy($id)
    {
        // $category = Product::find($id);
        // $category->delete();
        // $response = [
        //     'status' => true,
        //     'notification' => 'Deleted successfully.',
        // ];
    
        // return response()->json($response);
    }
}
