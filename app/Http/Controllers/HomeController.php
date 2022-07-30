<?php

namespace App\Http\Controllers;

use App\Models\Information;
use App\Models\Crop;
use App\Models\Orchard;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return redirect('Dashboard');
    }
    public function index()
    {
        $id = auth()->id();

        $crops = Crop::where('user_id', $id)->orderByDesc('id')->take(2)->get();
        $orchards = Orchard::where('user_id', $id)->orderByDesc('id')->take(2)->get();

        $informations = Information::orderByDesc('id')->take(2)->get();

        return view('dashboard', compact('informations', 'crops', 'orchards'));
    }
}
