@extends('master')
@section('title')
    <title>Propose Cv solusi cepat atasi masalah anda dala membuat Cv | 2021 Copyright ProposeCV | All right reserved | Made in Depok</title>
@endsection
@section('content')
<!-- content -->
    <section id="home">
        <div class="container">
            <div class="row">
                <!-- coloumn text -->
                <div class="col-lg-6 text-center text-md-start text-white ">
                    <h2 class="fw-bold fs-1" data-aos="fade-right" data-aos-duration="1500">Terkadang hal yang paling biasa bisa menjadi luar biasa, hanya
                        dengan
                        melakukannya bersama orang yang tepat.</h2>
                </div>
            </div>
        </div>
    </section>

    <section id="tentang-kami">
        <div class="container">
            <div class="card m-auto">
                <div class="container">
                    <h2 class="text-center" data-aos="slide-down" data-aos-duration="1500">Tentang Kami</h2>
                    <p data-aos="zoom-in-up" data-aos-duration="2000">CV atau curriculum vitae adalah dokumen yang memberikan gambaran tentang pengalaman seseorang dan
                        kualifikasi lainnya. Pada akhir Juli tim kami sepakat untuk membangun web seperti CV (Curriculum
                        Vitae), dalam desain membangun web kami sangat konsisten dalam membuat dan menangani semua
                        masalah. Oleh karena itu, Curriculum Vitae atau CV adalah dokumen yang berisi informasi tentang
                        pengalaman akademik dan non-akademik dan juga berisi biodata pribadi Anda seperti nama, alamat,
                        nomor kontak dan hal-hal pribadi lainnya untuk keperluan kelengkapan data. Maka dari CV
                        sangatlah penting selain data riwayat hidup juga untuk mempermudah diterimanya suatu pekerjaan.
                    </p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- keterangan kami -->
    <section id="keterangan-kami">
        <div class="container">
            <div class="row">
                <div class="col-lg-4" data-aos="flip-right">
                    <h4>Kami gesit</h4>
                    <p>Membangun aplikasi yang baik adalah tugas yang menantang. Hal ini membutuhkan
                        kemampuan teknis dan keterampilan manajemen yang luar biasa. Salah satu sifat pengembangan
                        perangkat lunak adalah melibatkan ketidakpastian. Kita mungkin dihadapkan pada situasi yang
                        tidak terduga. Namun, itu adalah sesuatu yang tidak bisa kita hindari.</p>
                </div>
                <div class="col-lg-4" data-aos="flip-right" data-aos-delay="500">
                    <h4>Kami terus belajar</h4>
                    <p>Kami percaya bahwa kantor adalah tempat bagi tim kami untuk mengembangkan
                        kemampuan pribadi mereka. Kami selalu mendukung setiap orang untuk mempelajari hal-hal baru di
                        tempat kerja dan di luar pekerjaan. Setiap orang didorong untuk mengerjakan sesuatu yang mereka
                        minati.</p>
                </div>
                <div class="col-lg-4" data-aos="flip-right" data-aos-delay="1000">
                    <h4>Kami suka bersenang-senang</h4>
                    <p>Suasana kerja yang baik menimbulkan motivasi kerja yang tinggi. Kami mencoba
                        membangun lingkungan kerja yang santai dan menyenangkan. Bisa dimaklumi bahwa kita mungkin
                        menemukan kesulitan di tempat kerja, di situlah biasanya kita beristirahat sambil menikmati
                        secangkir kopi. Setelah seharian bekerja, terkadang kami bermain game konsol untuk
                        bersenang-senang.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- team -->
    <section id="team">
        <div class="container">
            <h2 class="text-center mb-4">Anggota</h2>
            <hr>
            <div class="row justify-content-lg-center">
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="card" data-aos="fade-down" data-aos-duration="1000">
                        <div class="container">
                            <img src="{{asset('images/about/alek2.png')}}" alt="" class="">
                            <p class="pt-2">
                                <span class="fw-bold">Alek Sanusi</span> di Lampung Barat pada 26 Juni 2002 yang dikenal
                                sebagai Alek. Pada tahun ini terbentuklah suatu
                                kelompok untuk merancang web CV PROPOSE dengan Alek sebagai ketua dari content creator.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="card" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="500">
                        <div class="container ">
                            <img src="{{asset('images/about/andhika2.png')}}" alt="" class="">
                            <p class="pt-2">
                                <span class="fw-bold">Andhika Gusti Putra Cahyadi</span> lahir di Depok pada 15 Agustus 2004
                                yang dikenal sebagai Andhika. Untuk merancang
                                web CV PROPOSE dengan Andhika sebagai ketua serta penanggung jawab atas design mockup.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="card" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="1000">
                        <div class="container ">
                            <img src="{{asset('images/about/falih2.png')}}" alt="" class="">
                            <p class="pt-2">
                               <span class="fw-bold">Falih Aufar Wijaya Kusuma</span> lahir di Malang, Jawa Timur pada 27 Mei
                                2003 yang dikenal sebagai Falih. Merancang web CV PROPOSE dengan Falih sebagai anggota serta termasuk dalam bagian design grafis dan marketing.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="card" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="1500">
                        <div class="container ">
                            <img src="{{asset('images/about/adil2.png')}}" alt="" class="">
                            <p class="pt-2">
                                <span class="fw-bold">Muhammad Adil Farizki</span> lahir di Bogor pada 17 November 2004 yang dikenal sebagai Adil. Merancang web CV PROPOSE dengan Adil sebagai anggota serta penanggung jawab dalam ForntEnd dan Database.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="card" data-aos="fade-down">
                        <div class="container ">
                            <img src="{{asset('images/about/bariq2.png')}}" alt="" class="">
                            <p class="pt-2">
                               <span class="fw-bold">Muhammad Tarmidzi Bariq</span> lahir di Depok pada 30 juli 2004 yang
                                dikenal sebagai Bariq. Yang 2021 kini menginjak usia 17 tahun, pada tahun ini
                                terbentuklah suatu kelompok untuk merancang web CV PROPOSE yang diketuai oleh Bariq.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="card" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="500">
                        <div class="container ">
                            <img src="{{asset('images/about/saifudin2.png')}}" alt="" class="">
                            <p class="pt-2">
                              <span class="fw-bold">Saifudin Ilham lahir</span> di Cilacap pada 24 Oktober 2003 yang dikenal
                               sebagai Udin. Yang 2021 kini menginjak usia 18 tahun, untuk merancang web CV PROPOSE
                               dengan Udin sebagai penanggung jawab dalam CRUD Laravel.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="card" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="1000">
                        <div class="container ">
                            <img src="{{asset('images/about/satria2.png')}}" alt="" class="">
                            <p class="pt-2">
                               <span class="fw-bold">Satria Dwi Putra</span> lahir di Jakarta pada 27 Agustus 2004 yang
                               dikenal sebagai Satria. Merancang web CV PROPOSE dengan Satria sebagai anggota
                               serta termasuk dalam bagian design grafis dan marketing.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="card" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="1500">
                        <div class="container ">
                            <img src="{{asset('images/about/rifki2.png')}}" alt="" class="">
                            <p class="pt-2">
                               <span class="fw-bold">Rifki Ahmad Zaidan</span> lahir di Jakarta pada 27 Agustus 2004 yang
                               dikenal sebagai Satria. Merancang web CV PROPOSE dengan Satria sebagai anggota
                               serta termasuk dalam bagian design grafis dan marketing.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="card" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="500">
                        <div class="container ">
                            <img src="{{asset('images/about/sheva2.png')}}" alt="" class="">
                            <p class="pt-2">
                               <span class="fw-bold">Sheva Putra Sinatrya</span> lahir di Depok pada 16 Februari 2004 yang
                               dikenal sebagai Sheva. Yang 2021 kini menginjak usia 17 tahun, untuk merancang web CV
                               PROPOSE dengan Sheva sebagai penanggung jawab SRS dan analysist.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="card" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="1000">
                        <div class="container ">
                            <img src="{{asset('images/about/kelvyn2.png')}}" alt="" class="">
                            <p class="pt-2">
                               <span class="fw-bold">Kelvyn Nathanael Maulana</span> lahir di Palangkaraya pada 15 September 2004 yang
                               dikenal sebagai Kelvyn.Merancang web CV
                               PROPOSE dengan Kelvyn sebagai anggota serta termasuk dalam bagian analysist dan content
                               creator.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('active')
<li class="nav-item">
    <a class="nav-link  me-5" aria-current="page" href="{{route('home')}}">Home</a>
</li>
@endsection
@section('about')
<li class="nav-item">
    <a class="nav-link active" aria-current="page" href="{{route('about')}}">Tentang Kami</a>
</li>
@section('create')
    <a class="btn btn-create pe-5 ps-5" href="{{route('datadiri')}}">Create</a>
@endsection
@endsection