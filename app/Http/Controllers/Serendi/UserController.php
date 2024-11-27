<?php

namespace App\Http\Controllers\Serendi;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ProductModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:3',
            'password_confirmation' => 'required|string|same:password'
        ]);

        if (User::where('email', $request->email)->exists()) {
            return redirect('/')->with('error', 'Email already exists make sure to use another email');
        }


        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ], 422);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Auth::login($user);

        $token = $user->createToken('user_token')->plainTextToken;

        response()->json([
            'success' => true,
            'message' => 'User registered successfully!',
            'user' => $user,
            'token' => $token,
        ], 201);

        return redirect('/')->with('success' , 'User registered successfully!');
    }



    public function login(Request $request)
    {
        $IncomingFields = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($IncomingFields)) {
            $request->session()->regenerate();
        }else{
            return redirect('/')->with('error', 'Username or Password are incorrect');
        }


        return redirect('/');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function getEachProduct()
    {
        $products = ProductModel::all(); // or your specific query
        return view('components.ProductPage', compact('products'));
    }
}
