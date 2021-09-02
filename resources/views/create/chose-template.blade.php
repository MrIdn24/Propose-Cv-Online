@extends('master')
@section('title')
    <title>Pilih</title>
@endsection
@section('content')
    <!-- template -->
    <section id="template-choose">
        <div class="breadcrumb container w-75 justify-content-evenly">
            <div class="row">
                <div class="col-md-3 bulet1 me-4" style="opacity: 50%;">
                    <i class="fas fa-user text-white text-center"></i>
                </div>
                <div class="col-md-3 bulet2 me-4" style="opacity: 50%;"><i
                        class="fas fa-file-alt text-white text-center"></i>
                </div>
                <div class="col-md-3 bulet3 me-4"><i class="fas fa-pen   text-white text-center"></i>
                </div>
                <div class="col-md-3 bulet3 me-4 " style="opacity: 50%;"><i
                        class="fas fa-check   text-white text-center"></i>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="text text-center">
                <h1>Pilihan Template CV</h1>
                <p>CV Keren Buat Kamu Lebih Cepat Dapat Kerja</p>
            </div>
            <div class="row mt-5">
                <!-- <h3 class="text-center mb-5">Flat Template</h3> -->
                <div class="col-md-6 col-lg-3">
                    <div class="card shadow">
                        <img src="{{ asset('/images/template/DSTC3.svg') }}" alt="" class="mb-4 mt-4">
                        <button class="btn btn-pilih">Pilih</button>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card shadow">
                        <img src="{{ asset('/images/template/DSTC2.png') }}" alt="" class="mb-4 mt-4">
                        <button class="btn btn-pilih">Pilih</button>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card shadow">
                        <img src="{{ asset('/images/template/DSTC1.svg') }}" alt="" class="mb-4 mt-4">
                        <button class="btn btn-pilih">Pilih</button>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card shadow">
                        <img src="{{ asset('/images/template/DSTC4.svg') }}" alt="" class="mb-4 mt-4">
                        <button class="btn btn-pilih">Pilih</button>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card shadow">
                        <img src="{{ asset('/images/template/DSTC5.svg') }}" alt="" class="mb-4 mt-4">
                        <button class="btn btn-pilih">Pilih</button>
                    </div>
                </div>
                <form action="{{ route('choose-tmp.store') }}" method="post" class="mt-5">
                @csrf
                    <input type="text" name="nama_template" id="tmp" class="d-none">
                    <div class="jarak d-grid gap-2 d-md-flex justify-content-md-end ">
                        <button type="submit" class="btn btn-create pe-5 ps-5 ">Checkout</button>
                    </div>
                </form>


            </div>
        </div>
    </section>
    <!-- tutup template -->
@endsection



@section('active')
    <li class="nav-item">
        <a class="nav-link me-5" aria-current="page" href="{{ route('home') }}">Home</a>
    </li>
@endsection

@section('about')
    <li class="nav-item">
        <a class="nav-link " aria-current="page" href="{{ route('about') }}">Tentang Kami</a>
    </li>
@endsection
