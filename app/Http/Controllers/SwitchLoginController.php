<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;

class SwitchLoginController extends Controller
{
    //creating token in existing panel
    public function handleSwitch(Request $request)
    {
        // Validate token
        $token = $request->input('token');
    
        try {
            // Decode and authenticate the user
            $user = JWTAuth::setToken($token)->authenticate();
    
            if (!$user) {
                return response()->json(['error' => 'Invalid token'], 401);
            }
    
            // Determine target application
            $targetApp = $request->input('target_app'); // 'App B' or 'App A'
            $targetUrl = $targetApp === 'App B' 
                ? 'https://app-b.com/switch-login' 
                : 'https://app-a.com/switch-login';
    
            // Return redirection URL
            return response()->json([
                'redirect_url' => $targetUrl . '?token=' . $token,
            ]);
        } catch (\Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {
            return response()->json(['error' => 'Invalid token'], 401);
        } catch (\Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {
            return response()->json(['error' => 'Token expired'], 401);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
    
    
    //redirecting others panel
    public function switchLogin(Request $request)
    {
        $token = $request->input('token');
        try {
            $user = JWTAuth::setToken($token)->authenticate();
            if (!$user) {
                return redirect('/login')->with('error', 'Invalid token');
            }

            // Log in the user
            auth()->login($user);

            // Redirect to dashboard
            return redirect('/dashboard');
        } catch (\Exception $e) {
            return redirect('/login')->with('error', 'Token invalid or expired');
        }
    }    
}
