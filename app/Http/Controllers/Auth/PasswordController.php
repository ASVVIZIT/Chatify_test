<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class PasswordController extends Controller
{
    /**
     * Update the user's password.
     */
    public function update(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'current_password' => ['required', 'current_password'],
            'password' => ['required', Password::defaults(), 'confirmed'],
        ], [
             'password.required'  => 'Поле пароль обязательно для заполнения.',
             'current_password.required'  => 'Поле подтверждения пароля обязательно для заполнения.',
             'current_password.current_password'  => 'Поле подтверждения пароля должно совпадать с новым и текушим паролем.'
            ]
        );

        $request->user()->update([
            'password' => Hash::make($validated['password']),
        ]);

        return back();
    }
}
