<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Enquiry;

class EnquiryController extends Controller
{
    public function index(Request $request)
    {
        $query = Enquiry::query();
    
        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', "%$search%")
                  ->orWhere('email', 'like', "%$search%")
                  ->orWhere('phone', 'like', "%$search%");
            });
        }
    
        if ($request->filled('from')) {
            $from = $request->input('from');
            $query->whereDate('created_at', '>=', $from);
        }
    
        if ($request->filled('to')) {
            $to = $request->input('to');
            $query->whereDate('created_at', '<=', $to);
        }
    
        $enquiries = $query->get();
    
        return view('admin.enquiries.index', compact('enquiries'));
    }
}