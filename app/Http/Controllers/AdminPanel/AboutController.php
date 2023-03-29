<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AboutController extends Controller
{
    public function index(): view
    {
        $about = About::first();
        return view('admin-panel.about.index');
    }

    public function create(): view
    {
        return view('admin-panel.about.create');
    }
}
