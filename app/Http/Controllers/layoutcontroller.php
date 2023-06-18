<?php

namespace App\Http\Controllers;

use App\Models\komen;
use Illuminate\Http\Request;

class layoutcontroller extends Controller
{
    public function index(){
        return view('layout.main');
    }

    public function home(){
        return view('layout.home');
    }
    public function frontend(){
        $data = komen::latest()->paginate(3);
        // dd($data);
        return view('layout.frontend', ['data'=>$data] );
    }
    public function signin(){
        return view('layout.signin');
    }
    public function signup(){
        return view('layout.signup');
    }
}
