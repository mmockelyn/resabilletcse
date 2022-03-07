<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VerifController extends Controller
{
    public function siret(Request $request)
    {
        $result = \Insee::siret($request->siret);
        return response()->json($result);
    }
}
