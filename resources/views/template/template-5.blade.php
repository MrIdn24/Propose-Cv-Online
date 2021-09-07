@foreach ($data1 as $dat)
@endforeach
@foreach ($data2 as $dats)
@endforeach
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font assistant -->
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com"> --}}
    {{-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> --}}
    {{-- <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@300;400;500;600;700&display=swap"
        rel="stylesheet"> --}}

    <!-- css -->
    <!-- <link rel="stylesheet" href="template-4.css"> -->
    <style>
        * {
            font-family: 'Assistant',
                sans-serif;

            /* font-weight: 400; */
        }

        /* left */
        .left {
            background-color: #F3F1F5;
            float: left;
            width: 400px;
            height: 250px;
            position: relative;
            left: -8px;
            top: -8px;
            bottom: -100px;
            background-position-y: 100px;
            /* padding: 30px; */
        }

        .left .gambar {
            /* width: 65%; */

            display: block;
            margin-left: auto;
            height: 250px;
            /* margin-right: auto; */


        }

        .left .gambar img {
            height: 180px;
            background-color: #FF4C29;
            /* border-radius: 50%; */
            display: block;
            padding-top: 70px;
            margin-left: auto;
            padding-left: 50px;
            /* clip-path: inset(0 30px); */
            /* margin-right: auto; */

        }

        /* right */
        .right {
            position: absolute;
            background-color: #F3F1F5;
            width: 480px;
            height: 250px;
            left: 400px;
            z-index: 999;
            top: 0;
            /* font-family: Arial,
        Helvetica,
        sans-serif; */
            /* padding: 30px; */
        }

        /* profile */
        .right .profile {
            padding: 20px;
        }

        .right .profile h1 {
            font-weight: 500;
            text-transform: capitalize;
            margin: 0;
            font-size: 28px;
            margin-top: 10px;
            margin-bottom: 10px;
            line-height: 30px;
            color: #222831;
        }

        .right .profile h3 {
            font-size: 20px;
            margin: 0;
            color: #222831;
        }

        .right .profile p {
            margin: 0;
            font-size: 14px;
            font-weight: 300;
            color: #222831;
        }

        .garis {
            width: 40px;
            border-bottom: 3px solid #FF4C29;
            margin-top: 10px;
            margin-bottom: 15px;
        }



        /* content */
        .content {
            clear: left;
            background-color: #222831;
            width: 880px;
            height: 1000px;
            position: relative;
            left: -8px;
            top: -8px;
            color: #fff;
        }

        /* content-left */
        .content-kiri {
            /* background-color: #F3F1F5; */
            float: left;
            width: 400px;
            /* height: 250px; */
            position: relative;
            left: -8px;
            top: -8px;
            bottom: -100px;
            background-position-y: 100px;
        }

        .content-left {
            padding: 40px;
        }

        /* content-left/pendidikan */
        .content-left .pendidikan {
            margin-top: 30px;
        }

        .content-left .pendidikan h3 {

            margin: 0;
            font-size: 20px;
            /* margin-bottom: 10px; */
        }

        .content-left .pendidikan .text {
            margin-top: 10px;
        }

        .content-left .pendidikan .text h4 {
            margin: 0;
            font-size: 28px;
            font-weight: 400;
        }

        .content-left .pendidikan .text p {
            margin: 0;
            /* margin-top: 5px; */
            font-size: 16px;
            font-weight: 400;
            text-transform: capitalize;
        }

        /* content-left/skill */
        .content-left .skill {
            margin-top: 30px;
        }

        .content-left .skill h3 {
            margin: 0;
            font-size: 20px;
        }

        .content-left .skill .text {
            margin-top: 10px;
        }

        .content-left .skill .text p {
            margin: 0;

            font-size: 16px;
            font-weight: 400;
            text-transform: capitalize;
        }

        .content-left .skill .text .skill-persen {
            width: 100%;
            height: 15px;
            background-color: #5C5C5C;
            margin-top: 5px;
        }

        .content-left .skill .text .skill-persentase {
            /* width: 50%; */
            height: 15px;
            background-color: #FF4C29;
            margin-top: 5px;
        }






        /* Content-right */
        .content-kanan {
            /* padding: 30px; */
            position: absolute;
            /* background-color: #F3F1F5; */
            width: 480px;
            /* height: 250px; */
            left: 400px;
            z-index: 999;
            top: 0;
        }

        .content-right {
            padding: 40px;
        }

        /* content-right/identitas */
        .content-right .identitas {
            margin-top: 20px;
        }

        .content-right .identitas h3 {
            margin: 0;
            font-size: 20px;
        }

        .content-right .identitas h4 {
            margin: 0;
            font-size: 28px;
            font-weight: 400;
            text-transform: capitalize;
        }

        .content-right .identitas p {
            margin: 0;
            margin-top: 5px;
            font-size: 16px;
            font-weight: 400;
            text-transform: capitalize;
        }

        /* kontak */
        .content-right .kontak {
            margin-top: 30px;
        }

        .content-right .kontak h3 {
            margin: 0;
            font-size: 20px;
        }

        .content-right .kontak p {
            margin: 0;
            margin-top: 5px;
            font-size: 16px;
            font-weight: 400;
        }

        /* hobi */
        .content-right .hobi {
            margin-top: 30px;
        }

        .content-right .hobi h3 {
            margin: 0;
            font-size: 20px;
        }

        .content-right .hobi p {
            margin: 0;
            margin-top: 5px;
            font-size: 16px;
            font-weight: 400;
        }
    </style>
    <title>Template - 5</title>
</head>

<body>
    <!-- left -->
    <div class="left">
        <div class="gambar">
            <img src="{{ asset('imgup/' . $dat->foto) }}" alt="">
        </div>
    </div>
    <!-- right -->
    <div class="right">
        <div class="profile">
            <h1>{{ $dat->nama_depan . ' ' . $dat->nama_belakang }}</h1>
            <h3>Tentang Saya</h3>
            <div class="garis"></div>
            <p>{{ $dats->deksripsi }}
            </p>
        </div>
    </div>
    <!-- content -->
    <div class="content">
        <!-- CONTENT LEFT -->
        <div class="content-kiri">
            <div class="content-left">
                <!-- pendidikan -->
                <div class="pendidikan">
                    <h3>Pendidikan</h3>
                    <div class="garis"></div>
                    <div class="text">
                        <h4>{{ date('Y', strtotime($dats->mulai_belajar)) . ' - ' . date('Y', strtotime($dats->selesai_belajar)) }}</h4>
                        <p>{{ $dats->nama_instansi . ', ' . $dats->kota_instansi }}</p>
                    </div>
                    @if ($dats->nama_instansi2 == Null)
                        
                    @else
                        <div class="text">
                            <h4>{{ date('Y', strtotime($dats->mulai_belajar2)) . ' - ' . date('Y', strtotime($dats->selesai_belajar2)) }}</h4>
                            <p>{{ $dats->nama_instansi2 . ', ' . $dats->kota_instansi2 }}</p>
                        </div>
                    @endif
                    @if ($dats->nama_instansi3 == Null)
                        
                    @else
                        <div class="text">
                            <h4>{{ date('Y', strtotime($dats->mulai_belajar3)) . ' - ' . date('Y', strtotime($dats->selesai_belajar3)) }}</h4>
                            <p>{{ $dats->nama_instansi3 . ', ' . $dats->kota_instansi3 }}</p>
                        </div>
                    @endif
                    {{-- <div class="text">
                        <h4>2016 - 2020</h4>
                        <p>smk taruna bhakti, Depok</p>
                    </div> --}}
                </div>

                <!-- skill -->
                <div class="skill">
                    <h3>Kemampuan</h3>
                    <div class="garis"></div>

                    <div class="text">
                        <p>{{ $dats->skill }}</p>
                        <div class="skill-persen">
                            <div class="skill-persentase" style="width: {{ $dats->skill_persen }}%;"></div>
                        </div>
                    </div>
                    @if ($dats->skill2 == Null)
                    
                    @else
                        <div class="text">
                            <p>{{ $dats->skill2 }}</p>
                            <div class="skill-persen">
                                <div class="skill-persentase" style="width: {{ $dats->skill_persen2 }}%;"></div>
                            </div>
                        </div>
                    @endif
                    @if ($dats->skill3 == Null)

                    @else
                        <div class="text">
                            <p>{{ $dats->skill3 }}</p>
                            <div class="skill-persen">
                                <div class="skill-persentase" style="width: {{ $dats->skill_persen3 }}%;"></div>
                            </div>
                        </div>
                    @endif
                    {{-- <div class="text">
                        <p>ms Excel</p>
                        <div class="skill-persen">
                            <div class="skill-persentase" style="width: 50%;"></div>
                        </div>
                    </div> --}}
                </div>

                <!-- pengalaman Kerja -->
                <div class="pendidikan">
                    <h3>Pengalaman Kerja</h3>
                    <div class="garis"></div>
                    <div class="text">
                        <h4>{{ date('Y', strtotime($dats->mulai_kerja)) . ' - ' . date('Y', strtotime($dats->selesai_kerja)) }}</h4>
                        <p>{{ $dats->jabatan . ', ' . $dats->perusahaan }}</p>
                    </div>
                    @if ($dats->perusahaan2 == Null)
                        
                    @else
                        <div class="text">
                            <h4>{{ date('Y', strtotime($dats->mulai_kerja2)) . ' - ' . date('Y', strtotime($dats->selesai_kerja2)) }}</h4>
                            <p>{{ $dats->jabatan2 . ', ' . $dats->perusahaan2 }}</p>
                        </div>
                    @endif
                    @if ($dats->perusahaan3 == Null)
                        
                    @else
                        <div class="text">
                            <h4>{{ date('Y', strtotime($dats->mulai_kerja3)) . ' - ' . date('Y', strtotime($dats->selesai_kerja3)) }}</h4>
                            <p>{{ $dats->jabatan3 . ', ' . $dats->perusahaan3 }}</p>
                        </div>
                    @endif
                    {{-- <div class="text">
                        <h4>2019 - 2021</h4>
                        <p>Errai pasific</p>
                    </div> --}}
                </div>
            </div>
        </div>

        <!-- CONTENT RIGHT -->
        <div class="content-kanan">
            <div class="content-right">
                <!-- identitas -->
                <div class="identitas">
                    <h3>Identitas</h3>
                    <div class="garis"></div>
                    <h4>{{ $dat->nama_depan . ' ' . $dat->nama_belakang }}</h4>
                    <p>{{ $dat->tempat_lahir . ', ' . Carbon\Carbon::parse($dat->tanggal_lahir)->isoFormat("D MMMM Y") }}</p>
                    <p>{{ $dat->jenis_kelamin}}</p>
                    <p>{{ $dat->status_perkawinan}}</p>
                    <p>{{ $dat->alamat}}</p>
                </div>

                <!-- kontak -->
                <div class="kontak">
                    <h3>Kontak</h3>
                    <div class="garis"></div>
                    <p>+{{ $dat->no_telp}}</p>
                    <p>{{ $dat->email}}</p>
                </div>

                <!-- hobi -->
                <div class="hobi">
                    <h3>Hobi</h3>
                    <div class="garis"></div>
                    <p>{{ $dats->hobi }}</p>
                    @if ($dats->hobi2 == Null)
                    
                    @else
                        <p>{{ $dats->hobi2 }}</p>
                    @endif
                    @if ($dats->hobi3 == Null)
                    
                    @else
                        <p>{{ $dats->hobi3 }}</p>
                    @endif
                    @if ($dats->hobi4 == Null)
                    
                    @else
                        <p>{{ $dats->hobi4 }}</p>
                    @endif
                    {{-- <p>Berenang</p> --}}
                </div>
            </div>
        </div>
    </div>
</body>

</html>