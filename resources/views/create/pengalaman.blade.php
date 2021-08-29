@extends('master')
@section('title')
    <title>Pengalaman</title>
@endsection
@section('content')
    <section id="input-one">
        {{-- breadcrumb --}}
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
                            placeholder="max 300" maxlength="300"></textarea>
                </div>
            </div>
            <!-- riwayat pendidikan -->
            <div class="card shadow mb-4 ">
                <div class="container">
                    <h4 class="border-bottom border-1 border-dark pb-1  mb-2 mb-md-4">Riwayat Pendidikan</h4>
                    <div class="row mb-4">
                        <div class="col-6 mb-3">
                            <div class="mb-2">
                                <label for="exampleInputPassword1" class="form-label">Nama Instansi</label>
                                <input type="text" name="nama_instansi" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-2">
                                <label for="exampleInputPassword1" class="form-label">Mulai</label>
                                <input type="date" name="mulai_belajar" class="form-control" id="exampleInputPassword1">
                            </div>
                        </div>
                        <div class="col-6 mb-3">
                            <div class="mb-2">
                                <label for="exampleInputPassword1" class="form-label">Kota <i class="fw-light">( Tulis:
                                        Kota, Negara )</i></label>
                                <input type="text" name="kota_instansi" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-2">
                                <label for="exampleInputPassword1" class="form-label">Selesai</label>
                                <input type="date" name="selesai_belajar" class="form-control" id="exampleInputPassword1">
                            </div>
                        </div>
                        {{-- <hr> --}}
                        {{-- <div class="col-6 mt-3 mb-4">
                            <div class="mb-2">
                                <label for="exampleInputPassword1" class="form-label">SMP</label>
                                <input type="text" name="nama_instansi" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-2">
                                <label for="exampleInputPassword1" class="form-label">Mulai</label>
                                <input type="date" name="mulai_belajar" class="form-control" id="exampleInputPassword1">
                            </div>
                        </div>
                        <div class="col-6 mt-3 mb-4">
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
                        <hr>
                        <div class="col-6 mt-3">
                            <div class="mb-2">
                                <label for="exampleInputPassword1" class="form-label">SMK</label>
                                <input type="text" name="nama_instansi" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-2">
                                <label for="exampleInputPassword1" class="form-label">Mulai</label>
                                <input type="date" name="mulai_belajar" class="form-control" id="exampleInputPassword1">
                            </div>
                        </div>
                        <div class="col-6 mt-3">
                            <div class="mb-2">
                                <label for="exampleInputPassword1" class="form-label">Kota <i class="fw-light">( Tulis:
                                        Kota, Negara )</i></label>
                                <input type="text" name="kota_instansi" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-2 ">
                                <label for="exampleInputPassword1" class="form-label">Selesai</label>
                                <input type="date" name="selesai_belajar" class="form-control" id="exampleInputPassword1">
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
            {{-- hobi --}}
            <div class="card shadow mb-4">
                <div class="container" id="dynamic_field">
                    <h4 class="border-bottom border-1 border-dark pb-1  mb-2 mb-md-4">Hobi</h4>
                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                        <strong>Tips! </strong>Maksimal hobi 4 untuk tampilan Cv lebih bagus
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-2">
                                <label for="exampleInputPassword1" class="form-label">Aktivitas sehari - hari <i
                                        class="fw-light">( Olahraga / Bermain Musik )</i> </label>
                                <input type="text" name="hobi" class="form-control mb-4" id="hobi">
                                <div class="row">
                                    <div class="col-md-11">
                                        <input type="text" name="hobi2" class="form-control mb-4 d-none" id="hobi2">
                                    </div>
                                    <div class="col-md-1">
                                        <i id="tambah1" class="fa fa-plus fs-6 text-right btn-primary p-1 mt-2 me-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Tambah Hobi"></i>
                                        <i id="hapus1" class="fa fa-minus fs-6 text-right btn-danger p-1 mt-2 me-3 d-none"></i>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-11">
                                        <input type="text" name="hobi3" class="form-control mb-4 d-none" id="hobi3">
                                    </div>
                                    <div class="col-md-1">
                                        <i id="tambah2" class="fa fa-plus d-none fs-6 text-right btn-primary p-1 mt-2 me-3"data-bs-toggle="tooltip" data-bs-placement="top" title="Tambah Hobi"></i>
                                        <i id="hapus2" class="fa fa-minus fs-6 text-right btn-danger p-1 mt-2 me-3 d-none"></i>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-11">
                                        <input type="text" name="hobi4" class="form-control mb-4 d-none" id="hobi4">
                                    </div>
                                    <div class="col-md-1">
                                        <i id="tambah3" class="fa fa-plus d-none fs-6 text-right btn-primary p-1 mt-2 me-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Tambah Hobi"></i>
                                        <i id="hapus3" class="fa fa-minus fs-6 text-right btn-danger p-1 mt-2 me-3 d-none"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Skill --}}
            <div class="card shadow mb-4">
                <div class="container">
                    <h4 class="border-bottom border-1 border-dark pb-1  mb-2 mb-md-4">Skill</h4>
                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                        <strong>Tips! </strong>Maksimal skill 3 untuk tampilan Cv lebih bagus
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-4">
                                <label for="exampleInputPassword1" class="form-label">Keahlian Khusus <i class="fw-light">(
                                        Menggambar / Adobe Primer )</i> </label>
                                <input type="text" name="skill" class="form-control" id="exampleInputPassword1">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <output id="volume" class="pl-5 volume" style="position: relative; top: 15px; left: 50%;"></output>
                                <input type="range" name="skill_persen" value="0" class="form-range mt-3"
                                    id="exampleInputPassword1" oninput="nilai(value)">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-1">
                                <div class="row">
                                    <div class="col-md-1 pt-1">
                                        <i id="tbhs1" class="fas fa-plus btn-primary p-2"></i>
                                        <i id="hps1" class="fas fa-minus btn-danger d-none p-2"></i>
                                    </div>
                                    <div class="col-md-11">
                                        <input type="text" name="skill2" class="form-control d-none" id="skill2">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-1">
                                <output id="volume2" class="pl-5 volume" style="position: relative; top: -10px; left: 50%;"></output>
                                <input type="range" name="skill_persen2" value="0" class="form-range pb-5 d-none"
                                    id="skillps2" oninput="nilai2(value)">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-1">
                                <div class="row">
                                    <div class="col-md-1 pt-1">
                                        <i id="tbhs2" class="fas fa-plus btn-primary p-2 d-none"></i>
                                        <i id="hps2" class="fas fa-minus btn-danger d-none p-2"></i>
                                    </div>
                                    <div class="col-md-11">
                                        <input type="text" name="skill3" class="form-control d-none" id="skill3">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-1">
                                <output id="volume3" class="pl-5 volume" style="position: relative; top: 10px; left: 50%;"></output>
                                <input type="range" name="skill_persen3" value="0" class="form-range pb-5 d-none"
                                    id="skillps3" oninput="nilai3(value)">
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
            </div>
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

@section('about')
<li class="nav-item">
    <a class="nav-link " aria-current="page" href="{{route('about')}}">Tentang Kami</a>
</li>
@endsection

@push('script')

    <script>
        function nilai(vol) {
            document.querySelector('#volume').value = vol + '%';
        }
        function nilai2(vol) {
            document.querySelector('#volume2').value = vol + '%';
        }
        function nila3(vol) {
            document.querySelector('#volume3').value = vol + '%';
        }
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            // Bagian Hobi
            function tambah1() {
                
                $('#hobi2').removeClass('d-none');
                $('#tambah1').addClass('d-none');
                $('#hapus1').removeClass('d-none');
                $('#tambah2').removeClass('d-none');
            }
            function hapus1() {
                
                $('#hobi2').addClass('d-none');
                $('#tambah1').removeClass('d-none');
                $('#hapus1').addClass('d-none');
                $('#tambah2').addClass('d-none');
            }

            function tambah2() {
                
                $('#hobi3').removeClass('d-none');
                $('#tambah2').addClass('d-none');
                $('#hapus2').removeClass('d-none');
                $('#tambah3').removeClass('d-none');
                $('#hapus1').addClass('d-none');
            }
            function hapus2() {
                $('#hobi3').addClass('d-none');
                $('#tambah2').removeClass('d-none');
                $('#hapus2').addClass('d-none');
                $('#tambah3').addClass('d-none');
                $('#hapus1').removeClass('d-none');
            }

            function tambah3() {
                
                $('#hobi4').removeClass('d-none');
                $('#tambah3').addClass('d-none');
                $('#hapus3').removeClass('d-none');
                $('#hapus2').addClass('d-none');
            }
            function hapus3() {
                $('#hobi4').addClass('d-none');
                $('#tambah3').removeClass('d-none');
                $('#hapus3').addClass('d-none');
                $('#hapus2').removeClass('d-none');
            }


            $('#tambah1').click(function () {
                tambah1();
            });
            $('#hapus1').click(function () {
                hapus1();
            });

            $('#tambah2').click(function () {
                tambah2();
            });
            $('#hapus2').click(function () {
                hapus2();
            });

            $('#tambah3').click(function () {
                tambah3();
            });
            $('#hapus3').click(function () {
                hapus3();
            });

            // Akhir Hobi

            // Awal Skill

            function tambahs1() {
                $('#tbhs1').addClass('d-none');
                $('#hps1').removeClass('d-none');
                $('#skill2').removeClass('d-none');
                $('#skillps2').removeClass('d-none');
                $('#tbhs2').removeClass('d-none');
            }
            function hapusS1() {
                $('#tbhs1').removeClass('d-none');
                $('#hps1').addClass('d-none');
                $('#skill2').addClass('d-none');
                $('#skillps2').addClass('d-none');
                $('#tbhs2').addClass('d-none');
            }

            function tambahs2() {
                $('#tbhs2').addClass('d-none');
                $('#hps2').removeClass('d-none');
                $('#skill3').removeClass('d-none');
                $('#skillps3').removeClass('d-none');
                $('#hps1').addClass('d-none');

            }
            function hapusS2() {
                $('#tbhs2').removeClass('d-none');
                $('#hps2').addClass('d-none');
                $('#skill3').addClass('d-none');
                $('#skillps3').addClass('d-none');
                $('#hps1').removeClass('d-none');
            }

            $('#tbhs1').click(function () {
                tambahs1();
            });

            $('#hps1').click(function () {
                hapusS1();
            });

            $('#tbhs2').click(function () {
                tambahs2();
            });

            $('#hps2').click(function () {
                hapusS2();
            });

            // AKhir Skill
            
        })
    </script>

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


