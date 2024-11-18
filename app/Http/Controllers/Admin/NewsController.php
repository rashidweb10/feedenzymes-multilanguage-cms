<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('admin.news.index', compact('news'));
    }

    public function create()
    {
        return view('admin.news.create');
    }   

    public function store(Request $request)
    {
        $news = new News();
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('uploads/' . languageSession(), 'public');
            $image = '/storage/' . $path;
        }
        
        $news->name = $request->name; 
        $news->image = $image; 
        $news->contents = json_encode([]);
        $news->year = $request->year;
        $news->series = $request->series;
        $news->status = $request->status;
        $news->save();

        $response = array(
            'status' => true,
            'notification' => 'Created successfully.'
          );
        return $response;
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $news = News::find($id);
        return view('admin.news.edit', compact('news'));
    }   

    public function update(Request $request, $id)
    {
        $news = News::findOrFail($id); 

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('uploads/' . languageSession(), 'public');
            $image = '/storage/' . $path;
        } else {
            $image = $news->image; 
        }
        
        $news->name = $request->name;
        $news->image = $image;
        $news->contents = json_encode([]);
        $news->year = $request->year;
        $news->status = $request->status;
        $news->series = $request->series;
        
        $news->save(); 
    
        $response = [
            'status' => true,
            'notification' => 'Updated successfully.',
        ];
    
        return response()->json($response);
    }   

    public function destroy($id)
    {
        $news = News::find($id);
        $news->delete();
        $response = [
            'status' => true,
            'notification' => 'Deleted successfully.',
        ];
    
        return response()->json($response);
    }
}
