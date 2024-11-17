<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Models\Product;
use App\Models\Enquiry;

class DashboardController extends Controller
{
    public function index()
    {
        $productCount = Product::count();
        $productCategoryCount = ProductCategory::count();
        $enquiryCount = Enquiry::count();
        return view('admin.dashboard.index', compact('productCount', 'productCategoryCount', 'enquiryCount'));
    }
}