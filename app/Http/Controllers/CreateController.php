<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use App\Models\Datadiri;
use App\Models\Pengalaman;
use App\Models\Template;
use Illuminate\Http\Request;
use PDF;

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
    public function pilihtemplate()
    {
        return view('create.chtemplate');
    }
    public function createcheck()
    {
        $data1 = Template::all();
        $data2 = Datadiri::all();
        return view('create.checkout', compact('data1', 'data2'));
    }
    public function chose_template()
    {
        return view('create.chose-template');
    }

    public function about()
    {
        return view('homepage.about');
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
        $request->validate([
            'foto' => 'required',
            'nama_depan' => 'required',
            'nama_belakang' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'status_perkawinan' => 'required',
            'email' => 'required',
            'no_telp' => 'required',
            'alamat' => 'required',
        ]);

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
        // dd($request);

        $dtUpload = new Pengalaman;
        // deskripsi
        $dtUpload->deksripsi = $request->deksripsi;
        // pendidikan
        $dtUpload->nama_instansi = $request->nama_instansi;
        $dtUpload->kota_instansi = $request->kota_instansi;
        $dtUpload->mulai_belajar = $request->mulai_belajar;
        $dtUpload->selesai_belajar = $request->selesai_belajar;
        $dtUpload->nama_instansi2 = $request->nama_instansi2;
        $dtUpload->kota_instansi2 = $request->kota_instansi2;
        $dtUpload->mulai_belajar2 = $request->mulai_belajar2;
        $dtUpload->selesai_belajar2 = $request->selesai_belajar2;
        $dtUpload->nama_instansi3 = $request->nama_instansi3;
        $dtUpload->kota_instansi3 = $request->kota_instansi3;
        $dtUpload->mulai_belajar3 = $request->mulai_belajar3;
        $dtUpload->selesai_belajar3 = $request->selesai_belajar3;
        // Pekerjaan
        $dtUpload->jabatan = $request->jabatan;
        $dtUpload->perusahaan = $request->perusahaan;
        $dtUpload->mulai_kerja = $request->mulai_kerja;
        $dtUpload->selesai_kerja = $request->selesai_kerja;
        $dtUpload->jabatan2 = $request->jabatan2;
        $dtUpload->perusahaan2 = $request->perusahaan2;
        $dtUpload->mulai_kerja2 = $request->mulai_kerja2;
        $dtUpload->selesai_kerja2 = $request->selesai_kerja2;
        $dtUpload->jabatan3 = $request->jabatan3;
        $dtUpload->perusahaan3 = $request->perusahaan3;
        $dtUpload->mulai_kerja3 = $request->mulai_kerja3;
        $dtUpload->selesai_kerja3 = $request->selesai_kerja3;
        // Skill
        $dtUpload->skill = $request->skill;
        $dtUpload->skill_persen = $request->skill_persen;
        $dtUpload->skill2 = $request->skill2;
        $dtUpload->skill_persen2 = $request->skill_persen2;
        $dtUpload->skill3 = $request->skill3;
        $dtUpload->skill_persen3 = $request->skill_persen3;
        // hobi
        $dtUpload->hobi = $request->hobi;
        $dtUpload->hobi2 = $request->hobi2;
        $dtUpload->hobi3 = $request->hobi3;
        $dtUpload->hobi4 = $request->hobi4;
        $dtUpload->save();

        return redirect()->route('chose-template');
    }

    public function storetmp(Request $request)
    {
        $request->validate([
            'nama_template' => 'required',
        ]);

        Template::create($request->all());
        return redirect()->route('checkout');
    }

    public function storecheck(Request $request)
    {
        $request->validate([
            'nama_user' => 'required',
        ]);
        Checkout::create($request->all());
        $data = Template::all();
        foreach ($data as $dat) {
        }
        return redirect()->route($dat->nama_template);
    }
    // public function totemplate()
    // {
    //     $data = Template::all();
    //     foreach ($data as $dat) {
    //     }
    //     return redirect()->route($dat->nama_template);
    // }

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
    public function template_flat()
    {
        $data1 = Datadiri::all();
        $data2 = Pengalaman::all();
        foreach ($data1 as $dat) {
        }

        $pdf = PDF::loadView('template.template-flat', compact('data1', 'data2'))->setPaper('a4');
        return $pdf->download('CV - ' . $dat->nama_depan . ' ' . $dat->nama_belakang . '.pdf');
    }
    public function template_baru()
    {
        $data1 = Datadiri::all();
        $data2 = Pengalaman::all();
        foreach ($data1 as $dat) {
        }

        $pdf = PDF::loadView('template.template-baru', compact('data1', 'data2'))->setPaper('a4');
        return $pdf->download('CV - ' . $dat->nama_depan . ' ' . $dat->nama_belakang . '.pdf');
    }
    public function template_3()
    {
        $data1 = Datadiri::all();
        $data2 = Pengalaman::all();

        foreach ($data1 as $dat) {
        }

        $pdf = PDF::loadView('template.template-3', compact('data1', 'data2'));
        return $pdf->download('CV - ' . $dat->nama_depan . ' ' . $dat->nama_belakang . '.pdf');
    }
    public function template_4()
    {
        $data1 = Datadiri::all();
        $data2 = Pengalaman::all();

        foreach ($data1 as $dat) {
        }

        $pdf = PDF::loadView('template.template-4', compact('data1', 'data2'))->setPaper('a4');
        return $pdf->download('CV - ' . $dat->nama_depan . ' ' . $dat->nama_belakang . '.pdf');
    }
    public function template_5()
    {
        $data1 = Datadiri::all();
        $data2 = Pengalaman::all();

        foreach ($data1 as $dat) {
        }

        $pdf = PDF::loadView('template.template-5', compact('data1', 'data2'))->setPaper('a4');
        return $pdf->download('CV - ' . $dat->nama_depan . ' ' . $dat->nama_belakang . '.pdf');
    }
}
