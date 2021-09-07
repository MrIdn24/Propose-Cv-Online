@extends('master')
@section('title')
    <title>Checkout</title>
@endsection
@section('content')
    @foreach ($data1 as $dat)
    @endforeach
    @foreach ($data2 as $dats)
    @endforeach
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
        <div class="container mt-5">
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
                                <li>Free (Syarat & Ketentuan Berlaku)</li>
                                <li>Dapat diubah kapanpun & dimanapun</li>
                                <li>Simple dan Praktis</li>
                                <li>Murah</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-7 ps-5 pe-5 pt-4 pb-4 text-center">
                        @if ($dat->nama_template == 'template-3')
                            <img src="{{ asset('/images/template/DSTC1.svg') }}" class="shadow" alt="">
                        @endif
                        @if ($dat->nama_template == 'template-baru')
                            <img src="{{ asset('/images/template/DSTC3.svg') }}" class="shadow" alt="">
                        @endif
                        @if ($dat->nama_template == 'template-flat')
                            <img src="{{ asset('/images/template/DSTC2.png') }}" class="shadow" alt="">
                        @endif
                        @if ($dat->nama_template == 'template-4')
                            <img src="{{ asset('/images/template/DSTC5.svg') }}" class="shadow" alt="">
                        @endif
                        @if ($dat->nama_template == 'template-5')
                            <img src="{{ asset('/images/template/DSTC4.svg') }}" class="shadow" alt="">
                        @endif
                    </div>
                </div>
            </div>
            <div class="jarak d-grid gap-2 d-md-flex justify-content-md-end">
                <form action="{{ route('create.storecheck') }}" method="post">
                    @csrf
                    <input type="text" name="nama_user" id="nama_user" class="d-none" value="{{ $dats->nama_depan ." ".$dats->nama_belakang }}">
                    <button type="submit" class="btn btn-create p-2 ps-4 pe-4 mt-5" id="print"><i class="fas fa-download" id="icon"></i> Download PDF</button>
                </form>
                <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
                <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header">
                    <img src="{{ asset('images/cvp .02.png') }}" height="40px" width="35px" class="rounded me-2" alt="...">
                    <strong class="me-auto">Cv Propose</strong>
                    <small>Now</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                        Cv-mu Sedang Diproses.
                    </div>
                </div>
                </div>
                <button class="btn btn-create pe-5 ps-5 mt-5 d-none" id="load" type="button" disabled>
                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                Loading...
                </button>
                <a href="{{ route('home') }}" class="btn btn-create pe-5 ps-5 mt-5 d-none" id="selesai">Selesai</a>
            </div>
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
    <a class="nav-link" aria-current="page" href="{{route('about')}}">Tentang Kami</a>
</li>
@endsection
@push('script')
    <script>
        $(document).ready(function () {
            $('#print').click(function () {
                $('#print').addClass('d-none');
                $('#icon').addClass('d-none');
                $('#load').removeClass('d-none');
                setTimeout(function(){
                    $('#load').addClass('d-none');
                }, 5000);
                setTimeout(function () {
                    $('#selesai').removeClass('d-none'); 
                }, 5000);
            });
        });
    </script>
    <script>
        var toastTrigger = document.getElementById('print')
        var toastLiveExample = document.getElementById('liveToast')
        if (toastTrigger) {
        toastTrigger.addEventListener('click', function () {
            var toast = new bootstrap.Toast(toastLiveExample)

            toast.show()
        })
        }
    </script>
@endpush