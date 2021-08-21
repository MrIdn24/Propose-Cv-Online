@extends('master')
@section('title')
    <title>Template</title>
@endsection
@section('content')
    <section id="input-one">
        <div class="breadcrumb container w-75 justify-content-evenly">
            <div class="row">
                <div class="col-md-3 bulet1 me-4" style="opacity: 50%;">
                    <i class="fas fa-user text-white text-center"></i>
                </div>
                <div class="col-md-3 bulet2 me-4" style="opacity: 50%;"><i
                        class="fas fa-file-alt text-white text-center"></i>
                </div>
                <div class="col-md-3 bulet3 me-4"><i
                        class="fas fa-pen   text-white text-center"></i>
                </div>
                <div class="col-md-3 bulet3 me-4 " style="opacity: 50%;"><i
                        class="fas fa-check   text-white text-center"></i>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-5 justify-content-md-center pt-5">
                <div class="col-md-4">
                    <img class="template" id="mtp1" src="{{ asset('/images/template/DSTC3.svg') }}" width="200px" onclick="pilih(1)">
                </div>
                <div class="col-md-4">
                    <img class="template" id="mtp2" src="{{ asset('/images/template/DSTC2.png') }}" width="200px" onclick="pilih(2)">
                </div>
            </div>
            <form action="{{ route('choose-tmp.store') }}" method="post" class="mt-5">
                @csrf
                <input type="text" name="nama_template" id="tmp" class="d-none">
                <div class="jarak d-grid gap-2 d-md-flex justify-content-md-end ">
                    <button type="submit" class="btn btn-create pe-5 ps-5 ">Lanjut</button>
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
    <script>
        function pilih(a) {
            if (a == 1) {
                document.getElementById('tmp').value = 'template-baru';
            }else{
                document.getElementById('tmp').value = 'template-flat';
            }
            if (a == 1) {
                document.getElementById('mtp1').style.border = '3px solid rgb(112, 112, 112)';
                document.getElementById('mtp2').style.border = 'none';
            }else{
                document.getElementById('mtp2').style.border = '3px solid rgb(112, 112, 112)';
                document.getElementById('mtp1').style.border = 'none';
            }
            
        }
    </script>
@endpush