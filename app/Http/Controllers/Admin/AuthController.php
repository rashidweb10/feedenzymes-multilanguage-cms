<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{

    public function index()
    {
        return view('admin.auth.login');
    }

    public function postLogin(request $request)
    {
        $validator = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);    

        $authenticated = Auth::guard('admins')->attempt($request->only(['email', 'password']));
        if($authenticated)
        {
            return redirect('admin/dashboard');
        }
        else
        {
            return redirect()->back()->withErrors(['invalid_credential' => 'Credential is invalid!']);
        }
    }

    public function Logout()
    {
        Auth::guard('admins')->logout();
        return redirect()->route('admin.login');
    }
}
