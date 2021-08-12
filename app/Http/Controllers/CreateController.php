<?php

namespace App\Http\Controllers;

use App\Models\Datadiri;
use App\Models\Pengalaman;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createdata()
    {
        return view('create.datadiri');
    }
    public function createpengalam()
    {
        return view('create.pengalaman');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storedata(Request $request)
    {
        // dd($request);
        // $request->validate([
        //     'foto' => 'required',
        //     'nama_depan' => 'required',
        //     'nama_belakang' => 'required',
        //     'tempat_lahir' => 'required',
        //     'tanggal_lahir' => 'required',
        //     'jenis_kelamin' => 'required',
        //     'agama' => 'required',
        //     'status_perkawinan' => 'required',
        //     'email' => 'required',
        //     'no_telp' => 'required',
        //     'alamat' => 'required',
        //     'kota' => 'required',
        //     'negara' => 'required',
        // ]);

        Datadiri::create($request->all());
        return redirect()->route('pengalaman');
    }
    public function storepengalam(Request $request)
    {
        // dd($request);
        $request->validate([
            // 'deksripsi' => 'required',
            'nama_instansi' => 'required',
            'kota_instansi' => 'required',
            'mulai_belajar' => 'required',
            'selesai_belajar' => 'required',
            'nama_org' => 'required',
            'mulai_org' => 'required',
            'selesai_org' => 'required',
            'prestasi' => 'required',
            'bulantahun' => 'required',
            'jabatan' => 'required',
            'perusahaan' => 'required',
            'mulai_kerja' => 'required',
            'selesai_kerja' => 'required',
        ]);

        Pengalaman::create($request->all());
        return redirect()->route('checkout');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function template()
    {
        $data = Datadiri::all();
        // dd($data);
        return view('template.templateflat', compact('data'));
    }
}
