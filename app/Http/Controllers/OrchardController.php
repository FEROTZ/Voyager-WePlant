<?php

namespace App\Http\Controllers;

use App\Models\Orchard;
use App\Models\Crop;
use Illuminate\Http\Request;

class OrchardController extends Controller
{
    public function index(){

        $id = auth()->id();
        $orchards = Orchard::all()->where('user_id', $id);
        return view('huertos.mis-huertos', compact('orchards'));
    }

    public function create(){
        $id = auth()->id();
        $crops = Crop::all()->where('user_id', $id);
        return view('huertos.nuevo', compact('crops'));
    }

    public function store(Request $request)
    {
        $crop = Crop::find($request->crop);

        $orchard = new Orchard();

        $orchard->name = $crop->name;
        $orchard->location = $request->location;
        $orchard->serial = $request->serial;
        $orchard->user_id = auth()->id();
        $orchard->crop_id = $request->crop;


        $orchard->save();

        return redirect()->route('mis-huertos');

    }

    public function show( $id ){
        // $sensors = Sensor::all()->where('orchard_id', $id);
        $orchard = Orchard::find($id);
        return view('huertos.ver', compact('orchard'));
    }
}
