<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LevenshteinController extends Controller
{

    public function index(Request $request)
    {   
        // calculate levenshtein distance
        return levenshtein($request->strOne, $request->strTwo);
    }

}
