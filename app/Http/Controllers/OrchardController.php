<?php

namespace App\Http\Controllers;

use App\Models\Orchard;
use Illuminate\Http\Request;

class OrchardController extends Controller
{
    public function index(){

        $id = auth()->id();
        $orchards = Orchard::all()->where('user_id', $id);
        return view('huertos.mis-huertos', compact('orchards'));
    }

    public function create(){
        return view('huertos.nuevo');
    }

    public function store(Request $request)
    {

        $orchard = new Orchard();

        $orchard->name = $request->name;
        $orchard->location = $request->location;
        $orchard->serial = $request->serial;


        return $request->all();
    }

    public function show( $orchard ){

        return view('orchards.show', compact('orchard'));

    }
}
