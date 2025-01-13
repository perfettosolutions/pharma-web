<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login()
    {
        return view('admin.auth.login');
    }
    public function checkLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()->first()
            ], 422);
        }
    
        // Authenticate the user
        if (Auth::attempt($request->only('email', 'password'))) {
            $token = bin2hex(random_bytes(32));
            Session()->put('token', $token);
            return response()->json([
                'success' => true,
                'message' => 'Login successful!',
                
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Invalid email or password.'
            ], 401);
        }
    }
    
    // public function checkLogin(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'required|email',
    //         'password' => 'required',
    //     ]);
    //     if (auth()->attempt($request->only('email', 'password'))) {
    //         $token = bin2hex(random_bytes(32));
    //         Session()->put('token', $token);

    //         return redirect('/admin/dashboard');
    //     }
    //     return redirect()->back()->with('error', 'Invalid credentials');
    // }
    public function logout()
    {
        Session()->forget('token');
        return redirect('/login');
    }
}
