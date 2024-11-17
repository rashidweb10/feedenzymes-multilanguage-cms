<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Enquiry;
use Illuminate\Support\Facades\Validator;
//use App\Jobs\SendEnquiryEmail;
use App\Mail\EnquiryMail;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Mailer\Exception\TransportException;

class IndexController extends Controller
{
    function index(){
        $productCategory = ProductCategory::where('is_active', 1)->get();
        return view('frontend.pages.order.index', compact('productCategory'));
    }

    function getProducts(Request $request, $category_id) {
        $products = Product::where('category_id', $category_id)->get();
        $options = '<option value="">--Select Product--</option>';
        foreach($products as $row):
            $options .= '<option value="'.$row->id.'">'.$row->name.'</option>';
        endforeach;
        return $options;
    }

    function getVariation(Request $request, $product_id) {
        $product = Product::where('id', $product_id)->first();
        $variations = json_decode($product->variation, true);
        $options = '<option value="">--Select Product--</option>';
        foreach($variations as $row):
            foreach($row as $weight => $price):
            $options .= '<option value="'.$product->id.'" data-category="'.$product->category->name.'" data-product="'.$product->name.'" data-weight="'.$weight.'" data-price="'.$price.'">'.$weight.'</option>';
            endforeach;
        endforeach;           
        return response()->json(['options' => $options, 'image' => $product->image]);
    }

    public function submitForm(Request $request)
    {
        // Define validation rules
        $rules = [
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:50',
            'message' => 'max:500',
            'id.*' => 'required|string|max:155',
            'category.*' => 'required|string|max:155',
            'product.*' => 'required|string|max:155',
            'price.*' => 'required|string|max:155',
            'weight.*' => 'required|string|max:155',
        ];
    
        // Validate the request
        $validator = Validator::make($request->all(), $rules);
    
        if ($validator->fails()) {
            // Return validation errors as JSON
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }
    
        // Prepare additional info in JSON format
        $additionalInfo = [];
        foreach ($request->input('id') as $index => $id) {
            $additionalInfo[] = [
                'id' => $request->input('id')[$index],
                'category' => $request->input('category')[$index],
                'product' => $request->input('product')[$index],
                'price' => $request->input('price')[$index],
                'weight' => $request->input('weight')[$index],
            ];
        }
    
        // Create a new enquiry record
        $enquiry = new Enquiry();
        $enquiry->name = $request->input('name');
        $enquiry->phone = $request->input('phone');
        $enquiry->email = $request->input('email');
        $enquiry->message = $request->input('message');
        $enquiry->additional_info = json_encode($additionalInfo); // Save additional info as JSON
        $enquiry->save();

        // Dispatch the job with a delay of 1 minute
        //SendEnquiryEmail::dispatch($enquiry)->delay(now()->addMinute()); 
        
        //Mail::to(env('MAIL_TO_ADDRESS'))->send(new EnquiryMail($enquiry));
        try {
            Mail::to(env('MAIL_TO_ADDRESS'))->send(new EnquiryMail($enquiry));
        } catch (TransportException $e) {
            \Log::error('Mail sending failed: ' . $e->getMessage());
        }        
    
        // Return a success response
        return response()->json([
            'status' => 'success',
            'message' => 'Form submitted successfully!'
        ]);
    }
}