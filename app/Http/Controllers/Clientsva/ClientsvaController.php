<?php

namespace App\Http\Controllers\Clientsva;

use App\Clientsva;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientsvaController extends Controller
{
    public function checkClient(Request $request)
    {
        $codeClient = $request->CODECLIENT;
        $password = $request->mdp_client;

        /*$codeClient = "35407610";
        $password = "abcd";*/
        $clientsva = Clientsva::where('CODECLIENT', $codeClient)
                                ->where('mdp_client', $password)
                                ->first();
        
        //return $clientsva;
        if($clientsva == null)
        {
            return response()->json("login ou mot de passe incorrect", 422);
        }
        else{
            return response()->json($clientsva, 200);
        }

    }
}
