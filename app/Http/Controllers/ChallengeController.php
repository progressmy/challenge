<?php

namespace App\Http\Controllers;

use App\Models\Challenge;
use Illuminate\Http\Request;
use App\Http\Requests\ClientRequest;

class ChallengeController extends Controller
{
    public function index(Request $request)
    {
        return view('index',['txt'=>'フォームを入力']);
}
    public function post(ClientRequest $request)
    {
        return view('index', ['txt' => '正しい入力です']);
    }

        public function confirm(Request $request)
    {
        
        return view('confirm');
    
}
    public function thanks()
    {

        return view('thanks');
    }
}
