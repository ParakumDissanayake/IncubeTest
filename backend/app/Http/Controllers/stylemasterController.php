<?php

namespace App\Http\Controllers;

use App\stylemaster;
use Illuminate\Http\Request;

class stylemasterController extends Controller
{
    //


    public function index()
    {
        $customers = stylemaster::orderBy('id', 'dec')->get();
        return response()->json($stylemaster);
    }

    public function store(Request $request)
    {
        $stylemaster = new stylemaster;
        $stylemaster->style_code = $request->style_code;
        $stylemaster->style_name = $request->style_name;
        $stylemaster->style_quantity = $request->style_quantity;
        $stylemaster->style_status = $request->style_status;
        $stylemaster->style_type = $request->style_type;
        return response()->json($stylemaster);

    }

    public function show($id)
    {
        $stylemaster = stylemaster::findOrFail($id);
        return response()->json($stylemaster);
    }

    public function update($id)
    {
        $stylemaster = stylemaster::findOrFail($id);
        $stylemaster->style_code = $request->style_code;
        $stylemaster->style_name = $request->style_name;
        $stylemaster->style_quantity = $request->style_quantity;
        $stylemaster->style_status = $request->style_status;
        $stylemaster->style_type = $request->style_type;
        $stylemaster->save();
        return response()->json($stylemaster);
    }

    public function destroy($id)
    {
        $stylemaster = stylemaster::findOrFail($id);
        $stylemaster->delete();
        return response()->json($stylemaster);

    }
}    

