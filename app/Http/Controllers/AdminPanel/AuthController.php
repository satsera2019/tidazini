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
    public function loginForm()
    {
        return (auth()->check()) ? redirect()->route('admin-panel.about.index') : view('admin-panel.auth.login');
        // return view('admin-panel.auth.login');
    }

    public function login(loginRequest $request): RedirectResponse
    {
        $result = Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'admin']);
        if ($result) {
            return redirect()->route('admin-panel.about.index');
        }
        return back()->with(['success' => false, 'error' => "Incorrect credentials."]);
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin-panel.loginForm');
    }
}
