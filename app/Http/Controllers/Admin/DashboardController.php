<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Models\Product;
use App\Models\Enquiry;
use App\Models\Page;
use App\Models\News;
use App\Models\Production;

class DashboardController extends Controller
{
    public function index()
    {
        $pageCount = Page::where('id', '!=', 5)->count();
        $newsCount = News::count();
        $productionCount = Production::count();
        return view('admin.dashboard.index', compact('pageCount', 'newsCount', 'productionCount'));
    }
}