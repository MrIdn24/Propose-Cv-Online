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

        $nm = $request->foto;
        $namafile = time() . rand(100, 999) . "." . $nm->getClientOriginalExtension();

        $dtUpload = new Datadiri;
        $dtUpload->foto = $namafile;
        $dtUpload->nama_depan = $request->nama_depan;
        $dtUpload->nama_belakang = $request->nama_belakang;
        $dtUpload->tempat_lahir = $request->tempat_lahir;
        $dtUpload->tanggal_lahir = $request->tanggal_lahir;
        $dtUpload->jenis_kelamin = $request->jenis_kelamin;
        // $dtUpload->agama = $request->agama;
        $dtUpload->status_perkawinan = $request->status_perkawinan;
        $dtUpload->email = $request->email;
        $dtUpload->no_telp = $request->no_telp;
        $dtUpload->alamat = $request->alamat;
        // $dtUpload->kota = $request->kota;
        // $dtUpload->negara = $request->negara;

        $nm->move(public_path() . '/imgup', $namafile);
        $dtUpload->save();

        return redirect()->route('pengalaman');
    }
    public function storepengalam(Request $request)
    {
        // dd($request);
        $request->validate([
            'deksripsi' => 'required',
            'nama_instansi' => 'required',
            'kota_instansi' => 'required',
            'mulai_belajar' => 'required',
            'selesai_belajar' => 'required',
            'hobi' => 'required',
            'skill' => 'required',
            'skill_persen' => 'required',
            'jabatan' => 'required',
            'perusahaan' => 'required',
            'mulai_kerja' => 'required',
            'selesai_kerja' => 'required',
        ]);

        // $dtUpload = new Pengalaman;
        // $dtUpload->deksripsi = $request->deksripsi;
        // $dtUpload->nama_instansi = $request->nama_instansi;
        // $dtUpload->kota_instansi = $request->kota_instansi;
        // $dtUpload->mulai_belajar = $request->mulai_belajar;
        // $dtUpload->selesai_belajar = $request->selesai_belajar;
        // $dtUpload->nama_org = $request->nama_org;
        // $dtUpload->mulai_org = $request->mulai_org;
        // $dtUpload->selesai_org = $request->selesai_org;
        // $dtUpload->prestasi = $request->prestasi;
        // $dtUpload->bulantahun = $request->bulantahun;
        // $dtUpload->jabatan = $request->jabatan;
        // $dtUpload->perusahaan = $request->perusahaan;
        // $dtUpload->mulai_kerja = $request->mulai_kerja;
        // $dtUpload->selesai_kerja = $request->selesai_kerja;
        // $id = Datadiri::all();
        // foreach ($id as $i) {
        //     $dtUpload->id_datadiris = $i->id;
        // }

        // $dtUpload->save();
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
        $data1 = Datadiri::all();
        $data2 = Pengalaman::all();

        // dd($data);
        return view('template.templateflat', compact('data1', 'data2'));
    }
    public function template_baru()
    {
        $data1 = Datadiri::all();
        $data2 = Pengalaman::all();

        // dd($data);
        return view('template.templatebaru', compact('data1', 'data2'));
    }
}
