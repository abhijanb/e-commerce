<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResponseController extends Controller
{
    //
    public function successResponse($data){
        return response()->json([$data]);
    }
    public function failResponse($data)
    {
        return response()->json($data);

    }
}
