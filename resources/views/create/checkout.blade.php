@extends('master')
@section('title')
    <title>Data diri</title>
@endsection
@section('content')

    <section id="checkout">
        <div class="breadcrumb container w-75 justify-content-evenly">
            <div class="row">
                <div class="col-md-3 bulet1 me-4 " style="opacity: 50%;"><i class="fas fa-user text-white text-center"></i></div>
                <div class="col-md-3 bulet2 me-4" style="opacity: 50%;"><i
                        class="fas fa-file-alt text-white text-center"></i>
                </div>
                <div class="col-md-3 bulet3 me-4" style="opacity: 50%;"><i
                        class="fas fa-pen   text-white text-center"></i>
                </div>
                <div class="col-md-3 bulet3 me-4 "><i
                        class="fas fa-check   text-white text-center"></i>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="text text-center">
                <h1>CV Anda sudah siap!</h1>
                <p>Silahkan lihat dan donwload secara gratis</p>
            </div>
            <div class="container foto shadow">
                <div class="row justify-content-center ">
                    <div class="col-md-5 ps-5 pe-5 pt-4 pb-4 text-white"
                        style="background-color:#7176d6; border-radius: 10px 0px 0px 10px; ">
                        <div class="text">
                            <h3>Keuntungan</h3>
                            <ul>
                                <li>Free</li>
                                <li>Dapat diubah kapanpun & dimanapun</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-7 ps-5 pe-5 pt-4 pb-4 text-center">
                        <img src="../images/Group 20.svg" class="shadow" alt="">
                    </div>
                </div>
            </div>
            <div class="jarak d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="submit" class="btn btn-create pe-5 ps-5 mt-3 "><i class="fa fa-file-pdf"></i> Print PDF</button>
            </div>
        </div>


    </section>
    
@endsection
@section('active')
    <li class="nav-item">
        <a class="nav-link me-5" aria-current="page" href="{{ route('home') }}">Home</a>
    </li>
@endsection
