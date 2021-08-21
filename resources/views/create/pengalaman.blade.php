@extends('master')
@section('title')
    <title>Pengalaman</title>
@endsection
@section('content')
    <section id="input-one">
        <div class="breadcrumb container w-75 justify-content-evenly">
            <div class="row">
                <div class="col-md-3 bulet1 me-4" style="opacity: 50%;">
                    <i class="fas fa-user text-white text-center"></i>
                </div>
                <div class="col-md-3 bulet2 me-4"><i class="fas fa-file-alt text-white text-center"></i>
                </div>
                <div class="col-md-3 bulet3 me-4" style="opacity: 50%;"><i class="fas fa-pen   text-white text-center"></i>
                </div>
                <div class="col-md-3 bulet3 me-4 " style="opacity: 50%;"><i
                        class="fas fa-check   text-white text-center"></i>
                </div>
            </div>
        </div>
        <div class="container ">
            <!-- deskripsi -->
            <div class="card shadow mb-4">
                <div class="container">
                    <form action="{{ route('create.storepengalam') }}" method="POST">
                        @csrf
                        <h4 class="border-bottom border-1 border-dark pb-1  mb-2 mb-md-4">Tentang Saya</h4>
                        <label for="exampleInputPassword1" class="form-label">Deskripsi Diri</label>
                        <textarea class="form-control" name="deksripsi" id="" cols="30" rows="10"
                            placeholder="Deskripsikan dirimu"></textarea>
                </div>
            </div>
            <!-- riwayat pendidikan -->
            <div class="card shadow mb-4">
                <div class="container">
                    <h4 class="border-bottom border-1 border-dark pb-1  mb-2 mb-md-4">Riwayat Pendidikan</h4>
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-2">
                                <label for="exampleInputPassword1" class="form-label">Nama Instansi <i class="fw-light">(
                                        Sekolah / Universitas / dll )</i> </label>
                                <input type="text" name="nama_instansi" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-2">
                                <label for="exampleInputPassword1" class="form-label">Mulai</label>
                                <input type="date" name="mulai_belajar" class="form-control" id="exampleInputPassword1">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-2">
                                <label for="exampleInputPassword1" class="form-label">Kota <i class="fw-light">( Tulis:
                                        Kota, Negara )</i></label>
                                <input type="text" name="kota_instansi" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-2 ">
                                <label for="exampleInputPassword1" class="form-label">Selesai</label>
                                <input type="date" name="selesai_belajar" class="form-control" id="exampleInputPassword1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- hobi --}}
            <div class="card shadow mb-4">
                <div class="container" id="dynamic_field">
                    <h4 class="border-bottom border-1 border-dark pb-1  mb-2 mb-md-4">Hobi</h4>
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-2">
                                <label for="exampleInputPassword1" class="form-label">Aktivitas sehari - hari <i
                                        class="fw-light">( Olahraga / Bermain Musik )</i> </label>
                                <input type="text" name="hobi" class="form-control">
                            </div>
                            {{-- <button class="btn btn-success " type="button" id="addpengalaman"><i
                                    class="far fa-plus me-1"></i> Tambah
                                Data</button> --}}
                        </div>
                        <!-- <a href="" class="addpengalaman mb-2 " style="text-decoration: none; color: black; font-size:12px; font-weight:bold;"><i class="far fa-plus me-1"></i> Tambah Data</a> -->
                    </div>


                </div>
            </div>

            {{-- Skill --}}
            <div class="card shadow mb-4">
                <div class="container">
                    <h4 class="border-bottom border-1 border-dark pb-1  mb-2 mb-md-4">Skill</h4>
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-2">
                                <label for="exampleInputPassword1" class="form-label">Keahlian Khusus <i class="fw-light">(
                                        Menggambar / Adobe Primer )</i> </label>
                                <input type="text" name="skill" class="form-control" id="exampleInputPassword1">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-2">
                                <label for="exampleInputPassword1" class="form-label"> Keahlian <i class="fw-light">(
                                        Menggambar / Adobe Primer )</i> </label>
                                <input type="range" name="skill_persen" value="0" class="form-range"
                                    id="exampleInputPassword1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- organisasi -->
            {{-- <div class="card shadow mb-4">
                <div class="container">
                        <h4 class="border-bottom border-1 border-dark pb-1  mb-2 mb-md-4">Pengalaman Organisasi</h4>
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-2">
                                    <label for="exampleInputPassword1" class="form-label">Nama Organisasi <i
                                            class="fw-light">( Tulis: Nama, Jabatan )</i></label>
                                    <input type="text" name="nama_org" class="form-control" id="exampleInputPassword1">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-2">
                                    <label for="exampleInputPassword1" class="form-label">Mulai</label>
                                    <input type="date" name="mulai_org" class="form-control" id="exampleInputPassword1">
                                </div>
                            </div>
                            <div class="col-6">

                                <div class="mb-2 ">
                                    <label for="exampleInputPassword1" class="form-label">Selesai</label>
                                    <input type="date" name="selesai_org" class="form-control" id="exampleInputPassword1">
                                </div>
                            </div>
                        </div>
                </div>
            </div> --}}
            <!-- prestasi -->
            {{-- <div class="card shadow mb-4">
                <div class="container">
                        <h4 class="border-bottom border-1 border-dark pb-1  mb-2 mb-md-4">Prestasi</h4>
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-2">
                                    <label for="exampleInputPassword1" class="form-label">Nama Prestasi</label>
                                    <input type="text" name="prestasi" class="form-control" id="exampleInputPassword1">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-2">
                                    <label for="exampleInputPassword1" class="form-label">Bulan & Tahun</label>
                                    <input type="date" name="bulantahun" class="form-control" id="exampleInputPassword1">
                                </div>
                            </div>
                        </div>
                </div>
            </div> --}}
            <!-- pengalaman kerja -->
            <div class="card shadow mb-4">
                <div class="container">
                    <h4 class="border-bottom border-1 border-dark pb-1  mb-2 mb-md-4">Pengalaman Kerja</h4>
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-2">
                                <label for="exampleInputPassword1" class="form-label">Jabatan</label>
                                <input type="text" name="jabatan" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-2">
                                <label for="exampleInputPassword1" class="form-label">Mulai</label>
                                <input type="date" name="mulai_kerja" class="form-control" id="exampleInputPassword1">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-2">
                                <label for="exampleInputPassword1" class="form-label">Perusahaan <i class="fw-light">(
                                        Tulis: Nama, Kota )</i></label>
                                <input type="text" name="perusahaan" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-2 ">
                                <label for="exampleInputPassword1" class="form-label">Selesai</label>
                                <input type="date" name="selesai_kerja" class="form-control" id="exampleInputPassword1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- button -->
            <div class="jarak d-grid gap-2 d-md-flex justify-content-md-end ">
                <a class="btn btn-merah pe-5 ps-5  " href="{{ route('datadiri') }}"
                    onclick="return confirm('Anda yakin keluar dari form?')">
                    kembali
                </a>
                <button type="submit" class="btn btn-create pe-5 ps-5 ">
                    Lanjut
                </button>
            </div>
            </form>
        </div>
    </section>

@endsection



@section('active')
    <li class="nav-item">
        <a class="nav-link me-5" aria-current="page" href="{{ route('home') }}">Home</a>
    </li>
@endsection

@push('script')

    {{-- <script>
        $(document).ready(function() {
            var i = 1;
            $('#addpengalaman').click(function(e) {
                e.preventDefault();
                i++;
                $('#dynamic_field').append('<div class="row" id="row' + i + '">' +
                    '<div class="col-12">' +
                    '<div class="mb-2">' +
                    '<label for="exampleInputPassword1" class="form-label">Aktivitas sehari - hari <i class="fw-light">( Olahraga / Bermain Musik )</i> </label>' +
                    '<input type="text" name="hobi[]" class="form-control">' +
                    '</div>' +
                    '</div>' +
                    '<button class="btn btn-danger btn_remove " type="button" id=' + i +
                    '><i class="far fa-plus me-1"></i> Remove Data</button>' +
                    '</div>'
                );
            });$(document).on('click', '.btn_remove', function() {
                var button_id = $(this).attr("id");
                $('#row' + button_id + '').remove();
            });});
    </script> --}}
@endpush


