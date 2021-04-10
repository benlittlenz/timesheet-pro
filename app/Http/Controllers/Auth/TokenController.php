<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\AuthenticationException;

class TokenController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:sanctum'])->only('destroy');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(!Auth::attempt($request->only('email', 'password'))) {
            throw new AuthenticationException();
        }

        return [
            'token' => Auth::user()->createToken($request->deviceId)->plainTextToken
            //'token' => Auth::user()->createToken('test')->plainTextToken
        ];
    }

    public function destroy(Request $request)
    {
        auth()->user()->tokens()->where('name', $request->deviceId)->delete();
    }
}
