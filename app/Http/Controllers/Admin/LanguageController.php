<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function setLanguage(Request $request)
    {
        // Validate the input
        $request->validate([
            'language' => 'required|string'
        ]);

        // Set the language session variable
        Session::put('language', $request->input('language'));
        //languageSession($request->input('language'));

        // Redirect back or to a specific route
        return redirect()->back()->with('status', 'Language set successfully!');
    }
}
