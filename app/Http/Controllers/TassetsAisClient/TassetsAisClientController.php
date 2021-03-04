<?php

namespace App\Http\Controllers\TassetsAisClient;

use App\TassetsAisClient;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TassetsAisClientController extends Controller
{
    public function getTassetsAisClient($codeClient)
    {
        $refAsset = "4789526987";
        $tassetsAisClient = TassetsAisClient::where('refclient', $codeClient)
                                             ->where('refasset', $refAsset)
                                             ->first();
        return response()->json($tassetsAisClient, 200);
        //return $tassetsAisClient;
    }

    public function getListTassetsAisClient($codeClient)
    {
        //$etat = "non activé";
        //$clientsva = app('App\Http\Controllers\ClientsvaController')->;
        $listTassetsAisClient = TassetsAisClient::where('refclient', $codeClient)
                                                //->where('status', $etat)
                                                ->get();
        return response()->json($listTassetsAisClient, 200);
    }

    public function updatetassetsAisClient(Request $request)
    {
        //$refAsset = "4789526987";
        $refAsset = $request->refasset;
        $codeClient = $request->refclient;
        $tassetsAisClient = TassetsAisClient::where('refclient', $codeClient)
                                             ->where('refasset', $refAsset)
                                             ->first();
        //$tassetsAisClient = TassetsAisClient::find($codeClient);
        $tassetsAisClient->status = "activé";
        $tassetsAisClient->save();

        return response()->json($tassetsAisClient, 200);
    }

    public function insertTassetsAisClient(Request $request){
        $tassetsAisClient = new \App\TassetsAisClient;
        $tassetsAisClient->idaisclient = $request->idaisclient;
        $tassetsAisClient->refasset = $request->refasset;
        $tassetsAisClient->refclient = $request->refclient;
        $tassetsAisClient->status = $request->status;

        $tassetsAisClient->save();
        return response()->json($tassetsAisClient, 200);


    }
}
