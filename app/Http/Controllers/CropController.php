<?php

namespace App\Http\Controllers;

use App\Models\Crop;
use App\Models\Regulation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CropController extends Controller
{
    public function index()
    {
        $id = auth()->id();

        $crops = Crop::where('user_id', $id)->get();
        return view('cultivos.mis-cultivos', compact('crops'));
    }

    public function create(){
        return view('cultivos.nuevo');
    }

    public function store(Request $request)
    {

        $id = auth()->id();

        $request->validate([
            'photo' => 'required|image'
        ]);

        $image = $request->file('photo')->store("public/cultivos/$id");

        $url = Storage::url($image);

        $crop = new Crop();

        $crop->name = $request->name;
        $crop->photo = $url;
        $crop->description = $request->description;
        $crop->user_id = $id;

        $crop->save();

        $dataCrop = Crop::latest('id')->first();

        $regulation = new Regulation();

        $regulation->name = $request->name;
        $regulation->low_ph = $request->low_ph;
        $regulation->high_ph = $request->high_ph;
        $regulation->low_humidity = $request->low_humidity;
        $regulation->high_humidity = $request->high_humidity;
        $regulation->low_temperature = $request->low_temperature;
        $regulation->high_temperature = $request->high_temperature;
        $regulation->crop_id = $dataCrop->id;

        $regulation->save();


        return redirect()->route('mis-cultivos');
    }

    public function show( Crop $crop )
    {
        return view('cultivos.ver', compact('crop'));
    }

    public function edit(Crop $crop, Request $request)
    {
        $crop->name = $request->name;
        $crop->description = $request->description;
        $crop->regulation->name = $request->name;
        $crop->regulation->low_ph = $request->low_ph;
        $crop->regulation->high_ph = $request->high_ph;
        $crop->regulation->low_humidity = $request->low_humidity;
        $crop->regulation->high_humidity = $request->high_humidity;
        $crop->regulation->low_temperature = $request->low_temperature;
        $crop->regulation->high_temperature = $request->high_temperature;

        $crop->save();
        $crop->regulation->save();

        return redirect()->route('show.cultivo', $crop);
    }

    public function destroy(Crop $crop)
    {
        $crop->delete();
        return redirect()->route('mis-cultivos');
    }

}
