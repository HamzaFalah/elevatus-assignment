<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\HammingDistanceRequest;

class HammingController extends Controller
{
    // calculate hamming distance
    public function index(HammingDistanceRequest $request)
    {   
        $i = 0; $count = 0;
        while (isset($request->strOne[$i]) != '')
        {
            if ($request->strOne[$i] != $request->strTwo[$i])
                $count++;
            $i++;
        }
        return $count;
    }

}
