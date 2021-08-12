@extends('master')
@section('content')
    <section id="input-one">
        <div class="breadcrumb container w-75 justify-content-evenly">
            <div class="row">
                <div class="col-md-4 bulet1 me-5" style="opacity: 50%;"><i class="fas fa-user text-white text-center"></i></div>
                <div class="col-md-4 bulet2 me-5" style="opacity: 50%;"><i
                        class="fas fa-file-alt text-white text-center"></i>
                </div>
                <div class="col-md-4 bulet3 me-5"><i
                        class="fas fa-check   text-white text-center"></i>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-4">
                    <iframe src="/template-flat" frameborder="0" allowfullscreen></iframe>
                </div>
                {{-- <div class="col-md-4">
                    <iframe src="/template-flat" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="col-md-4">
                    <iframe src="/template-flat" frameborder="0" allowfullscreen></iframe>
                </div> --}}
            </div>
        </div>
    </section>
@endsection
@section('active')
    <li class="nav-item">
        <a class="nav-link me-5" aria-current="page" href="{{ route('home') }}">Home</a>
    </li>
@endsection
