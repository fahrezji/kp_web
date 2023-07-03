<?php

namespace App\Http\Controllers;

use App\Models\tamu;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Laravel\Sail\Console\PublishCommand;


class tamucontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = User::orderby('id', 'desc')->paginate(7);
        return view('tamu.index')->with ('data',$data);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tamu/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        // Session::flash('id', $request->id);
        Session::flash('name', $request->name);
        Session::flash('email', $request->email);
        Session::flash('telepon', $request->telepon);
        Session::flash('alamat', $request->alamat);




         $request->validate([
        'name' => 'required',
        'email'=> 'required',
        'telepon'=> 'required',
        'alamat'=> 'required',




         ], [
            'name.required' => 'Nama tamu Wajib Diisi',
            'email.required' => 'Email tamu Wajib Diisi',
            'telepon.required' => 'Telepon tamu Wajib Diisi',
            'alamat.required' => 'Alamat tamu Wajib Diisi',



         ]

     );
        //  //return 'Cek Data';
        //  $foto_file = $request->file('gambar');
        //  $foto_ekstensi = $foto_file->extension();
        //  $gambar_nama = date('ymdhis') . ".". $foto_ekstensi;
        //  $foto_file->move(public_path('gambar'),$gambar_nama);

         $data=[
             'name'=> $request->input('name'),
             'email'=> $request->input('email'),
             'telepon'=> $request->input('telepon'),
             'alamat'=> $request->input('alamat'),



            //  'gambar' => $gambar_nama

         ];
         User::create($data);
         return redirect('/tamu')->with('success', 'Berhasil Melakukan Input Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $data = User::where('id', $id)->first();
        return view('tamu/show')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = User::where('id', $id)->first();
        return view('tamu/edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'name' => 'required',
            'email'=> 'required',
            'telepon'=> 'required',
            'alamat'=> 'required',





             ], [
                'name.required' => 'Nama tamu Wajib Diisi',
                'email.required' => 'Email tamu Wajib Diisi',
                'telepon.required' => 'Telepon tamu Wajib Diisi',
                'alamat.required' => 'Alamat tamu Wajib Diisi',




             ]

         );
         $data=[
            'name'=> $request->input('name'),
            'email'=> $request->input('email'),
            'telepon'=> $request->input('telepon'),
            'alamat'=> $request->input('alamat'),



         ];
    User::where('id', $id)->update($data);
    return redirect('/tamu')->with('success', 'Berhasil Melakukan Update Data');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $data= User::where('id', $id)->delete();

        // $data_gambar = tamu::where('id', $id)->first();
        // File::delete(public_path('gambar'). '/'. $data_gambar->gambar);

       User::where('id', $id)->delete();
        return redirect('/tamu')->with('success', 'Berhasil Hapus Data');
    }
}
