<?php

namespace App\Http\Controllers;

use App\Models\komen;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class layoutcontroller extends Controller
{
    public function index(){
        return view('layout.main');
    }

    public function home(){
        return view('layout.home');
    }
    public function frontend(){
        $data = komen::latest()->get();

        // dd($data);
        if(Auth::user()){
            $data = [
                'data' => komen::latest()->get(),
                'user' => User::where('id',Auth::user()->id)->get()
            ];

            return view('layout.frontend', $data);
        }else{
            $data = komen::latest()->get();
            return view('layout.frontend', ['data' => $data]);
        }



    }
    public function signin(){
        return view('layout.signin');
    }
    public function signup(){
        return view('layout.signup');
    }
    public function testemplate(){
        return view('layout.testemplate');
    }
}
