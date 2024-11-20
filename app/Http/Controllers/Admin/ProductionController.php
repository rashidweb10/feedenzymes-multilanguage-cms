<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Production;

class ProductionController extends Controller
{
    public function index()
    {
        $productions = Production::all();
        return view('admin.productions.index', compact('productions'));
    }

    public function create()
    {

    }   

    public function store(Request $request)
    {

    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $production = Production::find($id);
        return view('admin.productions.edit', compact('production'));
    }   

    public function update(Request $request, $id)
    {
        $production = Production::findOrFail($id); 
        
        $p1_data = [];
        foreach($request->p1_index as $index => $key):

            $p1_data[] = [
                'p1_title' => $request->p1_title[$index],
                'p1_status' => $request->p1_status[$index],
                'p1_description' => $request->p1_description[$index]
            ];
        endforeach;

        $p2_data = [];
        foreach($request->p2_index as $index => $key):

            $p2_data[] = [
                'p2_title' => $request->p2_title[$index],
                'p2_status' => $request->p2_status[$index],
                'p2_description' => $request->p2_description[$index]
            ];
        endforeach;     
        
        $p3_data = [];
        foreach($request->p3_index as $index => $key):

            $p3_data[] = [
                'p3_title' => $request->p3_title[$index],
                'p3_status' => $request->p3_status[$index],
                'p3_description' => $request->p3_description[$index]
            ];
        endforeach;        

        $contents = [
            'nspEnzymes' => $p1_data,        
            'digestiveEnzymes' => $p2_data,       
            'phytaseEnzymes' => $p3_data         
        ];

        $production->contents = json_encode($contents);
        $production->save();
    
        $response = [
            'status' => true,
            'notification' => 'Updated successfully.',
        ];
    
        return response()->json($response);
    }   

    public function destroy($id)
    {
        // $news = Production::find($id);
        // $news->delete();
        // $response = [
        //     'status' => true,
        //     'notification' => 'Deleted successfully.',
        // ];
    
        // return response()->json($response);
    }
}
