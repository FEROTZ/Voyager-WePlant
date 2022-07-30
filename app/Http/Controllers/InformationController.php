<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function index()
    {
        $informations = Information::orderByDesc('id')->get();
        return view('sabias que.sabias-que', compact('informations'));
    }
    public function show(Information $information)
    {
        return view('sabias que.ver', compact('information'));
    }
}
