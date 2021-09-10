@extends('master')
@section('title')
    <title>Propose Cv solusi cepat atasi masalah anda dala membuat Cv | 2021 Copyright ProposeCV | All right reserved | Made in Depok</title>
@endsection
@section('content')
<!-- header -->
<header>
    <div class="container ">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="text-md-start text-center">
                    <h1 class="text-white" data-aos="fade-right" data-aos-duration="1500">Bingung mau <br>
                        bikin CV Online
                    </h1>
                    <p class="text-white" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="500">Bikin aja
                        di Propose</p>
                    <a href="{{route('datadiri')}}"class="btn btn-mulai pe-5 ps-5 pt-2 pb-2 " data-aos="fade-up" data-aos-duration="1500"
                    data-aos-delay="1000">Mulai buat CV</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="images text-center">
                    <img src="{{asset('images/logo.png')}}" alt="" data-aos="fade-left" data-aos-duration="1500" data-aos-delay="1500">
                </div>
            </div>
        </div>
    </div>

</header>
<?xml version="1.0" standalone="no"?><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#5A61D7" fill-opacity="1"
        d="M0,224L21.8,218.7C43.6,213,87,203,131,176C174.5,149,218,107,262,101.3C305.5,96,349,128,393,144C436.4,160,480,160,524,149.3C567.3,139,611,117,655,122.7C698.2,128,742,160,785,160C829.1,160,873,128,916,122.7C960,117,1004,139,1047,170.7C1090.9,203,1135,245,1178,272C1221.8,299,1265,309,1309,298.7C1352.7,288,1396,256,1418,240L1440,224L1440,0L1418.2,0C1396.4,0,1353,0,1309,0C1265.5,0,1222,0,1178,0C1134.5,0,1091,0,1047,0C1003.6,0,960,0,916,0C872.7,0,829,0,785,0C741.8,0,698,0,655,0C610.9,0,567,0,524,0C480,0,436,0,393,0C349.1,0,305,0,262,0C218.2,0,175,0,131,0C87.3,0,44,0,22,0L0,0Z">
    </path>
</svg>
<!-- tutup header -->
<section id="about">
    <div class="container">
        <div class="row justify-content-center">
            <div class=" col-md-6 col-lg-4">
                <div class="card text-center " data-aos="zoom-in">
                    <div class="container">
                        <img src="{{asset('images/fast-time.svg')}}" alt="" class="gambar1  mb-4">
                        <h3>Cepat & Praktis</h3>
                        <p class="mt-2 mb-4">Propose Cv memudahkan anda jika
                            ingin membuat Cv Secara Online
                            dan mempcepat waktu anda dalam membuat Cv secara Online melalui Propose Cv
                        </p>
                    </div>
                </div>
            </div>
            <div class=" col-md-6 col-lg-4">
                <div class="card text-center" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="500">
                    <div class="container">
                        <img src="{{asset('images/collage.svg')}}" alt="" class="gambar2 mb-4">
                        <h3>Banyak Pilihan Template</h3>
                        <p class="mt-2 mb-4">Propose Cv menyediakan pilihan template dengan berbagai design
                            dan warna yang akan membuat Cv
                            anda jadi lebih keren
                        </p>
                    </div>
                </div>
            </div>
            <div class=" col-md-6 col-lg-4">
                <div class="card text-center" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="1000">
                    <div class="container">
                        <img src="{{asset('images/settings.svg')}}" alt="" class="gambar3  mb-4">
                        <h3>Customize</h3>
                        <p class="mt-2 mb-4">Anda bisa mengubah data dan design pada cv anda dengan mudah dan sesuai
                            dengan
                            keinginan anda
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- tutup about -->

<!-- about me -->
<section id="aboutme">
    <div class="container">
        <div class="row aboutme-content pt-5 pb-5 ">
            <div class="col-md-6 mb-3 mb-md-0 text-center">
                <img src="{{asset('images/alekss.png')}}" alt="" class="images">
            </div>
            <div class="col-md-6">
                <h1>Apa Itu ProposeCV</h1>
                <h3>CV (Curriculum Vitae) </h3>
                <p>Merupakan kebutuhan yang sangat penting bagi para pencari kerja. Apalagi saat ini CV tidak hanya
                    dilihat
                    dari isinya saja, namun nilai estetika yang ada didalamnya juga menjadi perhatian perusahaan.
                    Biasanya
                    semakin menarik sebuah CV akan semakin besar peluang pencari kerja untuk direkrut perusahaan.</p>
                <h3>Propose CV</h3>
                <p>Hadir sebagai salah satu platform Pembuatan CV secara online yang tentunya cepat, murah dan praktis.
                    Hanya dengan beberapa langkah, pengunjung sudah dapat mengunduh CV yang baru saja dibuat. Pengunjung
                    juga
                    bisa merubah data jika terdapat kesalahan pada CV dengan login ke halaman Dashboard.</p>
            </div>
        </div>
    </div>
</section>
<!-- tutup about me -->

<!-- how to make -->
<section id="howto">
    <div class="container">
        <div class="text text-center">
            <h1>Bagaimana Cara Kerja ProposeCV ?</h1>
            <p>Berikut 3 Langkah Mudah Buat CV Online</p>
        </div>
        <div class="row justify-content-center">
            <div class=" col-md-6 col-lg-4">
                <div class="card text-center" data-aos="fade-right">
                    <div class="container">
                        <img src="{{asset('images/howto0.svg')}}" alt="" class="gambar1  mb-4">
                        <h3>Isi Data</h3>
                        <p class="mt-2 mb-4">Lengkapi form Daftar Riwayat Hidup dan semua hal yang ingin kamu tampilkan.
                        </p>
                    </div>
                </div>
            </div>
            <div class=" col-md-6 col-lg-4">
                <div class="card text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                    <div class="container">
                        <img src="{{asset('images/howto1.svg')}}" alt="" class="gambar2 mb-4">
                        <h3>Pilih Design</h3>
                        <p class="mt-2 mb-4">Template CV keren bisa kamu pilih dengan berbagai pilihan warna.
                        </p>
                    </div>
                </div>
            </div>
            <div class=" col-md-6 col-lg-4">
                <div class="card text-center" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="1000">
                    <div class="container">
                        <img src="{{asset('images/howto2.svg')}}" alt="" class="gambar3  mb-4">
                        <h3>Donwload CV</h3>
                        <p class="mt-2 mb-4">Setelah semua tahap selesai, kamu bisa download CV kamu melalui Dashboard.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- tutup how to make -->

<!-- template -->
<section id="template">
    <div class="container">
        <div class="text text-center">
            <h1>Pilihan Template CV</h1>
            <p>CV Keren Buat Kamu Lebih Cepat Dapat Kerja</p>
        </div>
        <div class="row mt-5">
            <div class="col-md-6 col-lg-4">
                <div class="card bg-white">
                    <img src="{{asset('images/template/DSTC1.svg')}}" alt="" class="gambar1  mb-4">
                    <h5>{{ $db2->where('nama_template', 'template-3')->get()->count() }} Sudah Menggunakan</h5>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card bg-white">
                    <img src="{{asset('images/template/DSTC3.svg')}}" alt="" class="gambar1  mb-4">
                    <h5>{{ $db2->where('nama_template', 'template-baru')->get()->count() }} Sudah Menggunakan</h5>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card bg-white">
                    <img src="{{asset('images/template/DSTC4.svg')}}" alt="" class="gambar1  mb-4">
                    <h5>{{ $db2->where('nama_template', 'template-5')->get()->count() }} Sudah Menggunakan</h5>
                </div>
            </div>



        </div>
    </div>
</section>
<!-- tutup template -->

<!-- penutup -->
<section id="penutup">
    <div class="text text-center text-white pt-5 pb-5">
        <div class="container">
            <h1>Sudah lebih dari {{ $db1 }} orang menggunakan Propose CV</h1>
            <p>Propose CV solusi dalam membuat CV</p>
            <a href="{{route('datadiri')}}" class="btn btn-mulai pe-5 ps-5 pt-2 pb-2">Buat CV</a>
        </div>
    </div>
</section>
<!-- tutup penutup -->

@endsection
@section('active')
<li class="nav-item">
    <a class="nav-link active me-5" aria-current="page" href="{{route('home')}}">Home</a>
</li>
@endsection
@section('about')
<li class="nav-item">
    <a class="nav-link " aria-current="page" href="{{route('about')}}">Tentang Kami</a>
</li>
@endsection
@section('create')
    <a class="btn btn-create pe-5 ps-5" href="{{route('datadiri')}}">Create</a>
@endsection
