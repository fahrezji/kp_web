<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class SessionController extends Controller
{
    function index(){
        return view("layout.signin");
    }
    function login(Request $request){

        $request->validate([
            'email'=> 'required',
            'password'=> 'required'
        ], [
            'email.required'=> 'Email Wajib Diisi',
            'password.required' => 'Password Wajib Diisi'
        ]
    );

    $infologin=[
        'email' => $request->email,
        'password' => $request->password
    ];
    if (Auth::attempt($infologin)){
        // dd($infologin);
        if(Auth::user()->level == 'Admin'){
            return redirect('/layout/home')->with('success','Berhasil Login');
        }else{
            return redirect('/')->with('success','Berhasil Login');
        }

    }else {
        return redirect('sesi')->withErrors('Username atau Password Salah');
    }

    }
    public function logout(){
        Auth::logout();
        return redirect('/')->with('Success', 'Berhasil Logout');
    }
    public function register(){
        return view('sesi/register');
    }
    public function create(Request $request){
        Session::flash('name', $request->input('name'));
        Session::flash('email', $request->input('email'));
        Session::flash('telepon', $request->input('telepon'));
        Session::flash('alamat', $request->input('alamat'));
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5',
            'telepon' => 'required|max:13',
            'alamat' => 'required'

        ],[
            'name.required' => 'Nama Wajib Diisi',
            'email.required' => 'Email Wajib Diisi',
            'email.email' => 'Masukkan Email Dengan Benar',
            'email.unique' => 'Email Anda Sudah Digunakan',
            'password.required' => 'Password Wajib Diisi',
            'password.min' => 'Minimum Password 5 Karakter',
            'telepon.required' => 'No Telepon Wajib Diisi',
            'telepon.max' => 'No Telepon Maksimal 13 Karakter',
            'alamat.required' => 'Alamat Wajib Diisi'
        ]);
        $data =[
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'password' => Hash::make($request->password),
            'telepon' => $request->telepon,
            'alamat' => $request->alamat
          ];
          User::create($data);
          $infologin=[
            'email' => $request->email,
            'password' => ($request->password)
          ];
          if (Auth::attempt($infologin)){
            return redirect('/layout/frontend')->with('success', Auth::user()->name. ' Berhasil Login');
          }else {
            return redirect('sesi')->withErrors('Username dan Password Salah');
          }
    }
}
