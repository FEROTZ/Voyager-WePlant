<?php

namespace App\Http\Controllers;

use App\Models\Crop;
use App\Models\Regulation;
use Illuminate\Http\Request;

class CropController extends Controller
{
    public function index(){

        $crops = Crop::all();
        return view('cultivos.mis-cultivos', compact('crops'));
    }

    public function create(){
        return view('cultivos.nuevo');
    }

    public function store(Request $request)
    {

        $id = auth()->id();

        $crop = new Crop();

        $crop->name = $request->name;
        $crop->description = $request->description;
        $crop->user_id = $id;

        $crop->save();

        $regulation = new Regulation();

        $regulation->name = $request->name;
        $regulation->low_ph = $request->low_ph;
        $regulation->high_ph = $request->high_ph;
        $regulation->low_humidity = $request->low_humidity;
        $regulation->high_humidity = $request->high_humidity;
        $regulation->low_temperature = $request->low_temperature;
        $regulation->high_temperature = $request->high_temperature;

        $regulation->save();


        return redirect()->route('mis-cultivos');
    }

    public function show( $id ){

        $crop = Crop::find($id);
        // return $crop;
        return view('cultivos.ver', compact('crop'));

    }

    public function destroy($id)
    {
        $regulation = Regulation::where('crop_id', $id)->delete();
        $crop = Crop::find($id);
        $crop->delete();
        return response()->json([
            'success' => true,
            'message' => 'User successfully deleted',
        ]);
    }
}
