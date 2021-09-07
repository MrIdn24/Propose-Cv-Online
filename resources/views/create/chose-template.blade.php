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
                    <div class="card shadow" id="mtp1">
                        <img src="{{ asset('/images/template/DSTC3.svg') }}" alt="" class="mb-2 mt-4 d-none">
                        <div class="gambar placeholder mb-2 mt-4 m-auto" style="width: 150px; height: 200px"></div>
                        <span class="text-center fs-6 pb-2">Night Candy</span>
                        <button class="btn btn-pilih" onclick="pilih(1)">Pilih</button>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card shadow" id="mtp2">
                        <img src="{{ asset('/images/template/DSTC2.png') }}" alt="" class="mb-2 mt-4 d-none">
                        <div class="gambar placeholder mb-2 mt-4 m-auto" style="width: 150px; height: 200px"></div>
                        <span class="text-center fs-6 pb-2">Blue Origin</span>
                        <button class="btn btn-pilih" onclick="pilih(2)">Pilih</button>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card shadow" id="mtp3">
                        <img src="{{ asset('/images/template/DSTC1.svg') }}" alt="" class="mb-2 mt-4 d-none">
                        <div class="gambar placeholder mb-2 mt-4 m-auto" style="width: 150px; height: 200px"></div>
                        <span class="text-center fs-6 pb-2">White Rice</span>
                        <button class="btn btn-pilih" onclick="pilih(3)">Pilih</button>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card shadow" id="mtp4">
                        <img src="{{ asset('/images/template/DSTC4.svg') }}" alt="" class="mb-2 mt-4 d-none">
                        <div class="gambar placeholder mb-2 mt-4 m-auto" style="width: 150px; height: 200px"></div>
                        <span class="text-center fs-6 pb-2">Tiger Brave</span>
                        <button class="btn btn-pilih" onclick="pilih(4)">Pilih</button>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card shadow" id="mtp5">
                        <img src="{{ asset('/images/template/DSTC5.svg') }}" alt="" class="mb-2 mt-4 d-none">
                        <div class="gambar placeholder mb-2 mt-4 m-auto" style="width: 150px; height: 200px"></div>
                        <span class="text-center fs-6 pb-2">Cerulean</span>
                        <button class="btn btn-pilih" onclick="pilih(5)">Pilih</button>
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
@push('script')
    <script>
        function pilih(a) {
            if (a == 1) {
                document.getElementById('tmp').value = 'template-baru';
            } else if (a == 2) {
                document.getElementById('tmp').value = 'template-flat';
            } else if(a == 3) {
                document.getElementById('tmp').value = 'template-3';
            }else if(a == 4){
                document.getElementById('tmp').value = 'template-5';
            }else if(a == 5){
                document.getElementById('tmp').value = 'template-4';
            }


            if (a == 1) {
                document.getElementById('mtp1').style.border = '3px solid rgba(126, 132, 252, 0.966)';
                document.getElementById('mtp2').style.border = 'none';
                document.getElementById('mtp3').style.border = 'none';
                document.getElementById('mtp4').style.border = 'none';
                document.getElementById('mtp5').style.border = 'none';
            } else if (a == 2) {
                document.getElementById('mtp2').style.border = '3px solid rgba(126, 132, 252, 0.966)';
                document.getElementById('mtp1').style.border = 'none';
                document.getElementById('mtp3').style.border = 'none';
                document.getElementById('mtp4').style.border = 'none';
                document.getElementById('mtp5').style.border = 'none';
            } else if(a == 3) {
                document.getElementById('mtp3').style.border = '3px solid rgba(126, 132, 252, 0.966)';
                document.getElementById('mtp2').style.border = 'none';
                document.getElementById('mtp1').style.border = 'none';
                document.getElementById('mtp4').style.border = 'none';
                document.getElementById('mtp5').style.border = 'none';
            } else if(a == 4){
                document.getElementById('mtp4').style.border = '3px solid rgba(126, 132, 252, 0.966)';
                document.getElementById('mtp2').style.border = 'none';
                document.getElementById('mtp1').style.border = 'none';
                document.getElementById('mtp3').style.border = 'none';
                document.getElementById('mtp5').style.border = 'none';
            } else if(a == 5){
                document.getElementById('mtp5').style.border = '3px solid rgba(126, 132, 252, 0.966)';
                document.getElementById('mtp2').style.border = 'none';
                document.getElementById('mtp1').style.border = 'none';
                document.getElementById('mtp3').style.border = 'none';
                document.getElementById('mtp4').style.border = 'none';
            }

        }
    </script>
    <script>
        $(document).ready(function () {
            setTimeout(function () {
                $('.gambar').addClass('d-none');
                $('img').removeClass('d-none');
            }, 2000);
        });
    </script>
@endpush