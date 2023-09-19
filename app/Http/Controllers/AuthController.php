<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginAuthRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login(LoginAuthRequest $request)
    {
        $credentials = $request->only(['email', 'password']);

        if (!Auth::attempt($credentials, true)) {
            throw ValidationException::withMessages([
                'email' => trans('auth.failed')
            ]);
        }

        return redirect()->route('admin.name');
    }
}
