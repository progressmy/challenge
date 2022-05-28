<?php

namespace App\Http\Controllers;

use App\Models\Challenge;
use Illuminate\Http\Request;

class ChallengeController extends Controller
{
    public function index()
    {
        
        return view('index');
}

    public function confirm()
    {
        return view('confirm');
    
}
}