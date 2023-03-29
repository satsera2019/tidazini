<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AboutController extends Controller
{
    public function about(): view
    {
        return view('admin-panel.about.index');
    }
}
