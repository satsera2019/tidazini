<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AboutControler extends Controller
{
    public function loginForm(): view
    {
        return view('admin-panel.about.index');
    }
}
