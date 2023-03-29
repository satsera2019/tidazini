<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminPanel\loginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthController extends Controller
{
    public function loginForm(): view
    {
        return (auth()->check()) ? redirect()->route('admin-panel.users.index') : view('admin-panel.auth.login');
    }

    public function login(loginRequest $request): RedirectResponse
    {
        $result = Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'admin',]);
        if ($result) {
            return redirect()->route('admin-panel.users.index');
        }
        return back()->with(['success' => false, 'error' => "Incorrect credentials."]);
    }
}
