<?php

namespace App\Http\Controllers\Serendi;

use App\Models\AdminUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    //
    function register(Request $request)
    {
        $incomingData = Validator::make($request->all() , [
            'name' => 'required|string',
            'password' => 'required|string',
            'password_confirmation' => 'required|string|same:password'
        ]);

        if (AdminUser::where('name', $request->name)->exists()) {
            return redirect('/adminAuth')->with('error', 'Email already exists make sure to use another email');
        }
        if($incomingData->fails()){
            return redirect('/adminAuth')->back()->with('error' , 'Something Error');
        };

        $user = AdminUser::create([
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'role' => 'admin'
        ]);

        $token = $user->createToken('admin_token')->plainTextToken;

        response()->json([
            'success' => true,
            'message' => 'User registered successfully!',
            'user' => $user,
            'token' => $token,
        ], 201);

        return redirect('/adminAuth')->with('success' , 'Admin registered successfully');
    }



    public function login(Request $request)
    {
        $IncomingFields = $request->validate([
            'name' => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($IncomingFields)) {
            $request->session()->regenerate();
        }else{
            return redirect('/adminAuth')->with('error', 'Username or Password are incorrect');
        }

        return redirect('/adminAuth');
    }


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
