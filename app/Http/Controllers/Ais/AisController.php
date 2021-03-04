<?php

namespace App\Http\Controllers\Ais;

use App\Ais;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class AisController extends Controller
{
    public function aisSave(Request $request)
    {
        $ais = Ais::create($request->all());
        return response()->json($ais, 201);
    }
}
