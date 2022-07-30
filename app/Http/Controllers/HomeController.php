<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return redirect('Dashboard');
    }
    public function index()
    {
        $informations = Information::orderByDesc('id')->take(2)->get();
        return view('dashboard', compact('informations'));
    }
}
