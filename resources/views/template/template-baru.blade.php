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
    <title>Design Template 2</title>

    <!-- cdn font Awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- <link rel="stylesheet" href="template-2-style.css"> -->
    <style>
        /* foto */
        .left {
            background-color: #072037;
            float: left;
            width: 450px;
            height: 1500px;
            color: white;
            font-family: Arial,
                Helvetica,
                sans-serif;
            position: relative;
            left: -8px;
            top: -9px;
            bottom: -100px;
            background-position-y: 100px;
            padding: 20px;
        }

        /* foto */
        .left .foto img {
            height: 200px;
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-top: 50px;
        }

        /* contact */
        .left .contact {
            margin-top: 50px;
        }

        .left .contact h1 {
            font-size: 30px;
            font-weight: normal;
            text-align: center;
            padding: 15px;
            background-color: #F1393D;
            border-radius: 10px;
        }

        .left .contact .bulet {
            padding: 5px 15px;
            /* width: 50px;
        height: 50px; */
            border-radius: 50%;
            background-color: #fff;
            /* margin-bottom: 100px; */
        }

        .left .contact .text {
            font-size: 22px;
            position: relative;
            top: 3px;
            left: 20px;
            
        }

        /* skill */
        .left .skill {
            margin-top: 50px;
        }

        .left .skill h1 {
            font-size: 30px;
            font-weight: normal;
            text-align: center;
            padding: 15px;
            background-color: #F1393D;
            border-radius: 10px;
        }

        .left .skill h2 {
            /* font-size: 16px; */
            font-size: 22px;
            font-weight: 300;
            text-transform: uppercase;
        }

        .left .skill .skill-persen {
            width: 100%;
            height: 35px;
            background-color: #fff;
            border-radius: 20px;
        }

        .left .skill .skill-persentase-1 {
            height: 35px;
            background-color: rgb(230, 53, 53);
            border-radius: 20px;
        }

        .left .skill .skill-persentase-2 {
            width: 400px;
            height: 35px;
            background-color: rgb(230, 53, 53);
            border-radius: 20px;
        }

        /* hobi */
        .left .hobi {
            margin-top: 50px;
        }

        .left .hobi h1 {
            font-size: 30px;
            font-weight: normal;
            text-align: center;
            padding: 15px;
            background-color: #F1393D;
            border-radius: 10px;
        }

        .left .hobi .bulet {
            padding: 10px 20px;
            /* width: 50px;
        height: 50px; */
            border-radius: 50%;
            background-color: #fff;
            /* margin-bottom: 100px; */
        }

        .left .hobi .text {
            font-size: 22px;
            position: relative;
            top: 8px;
            left: 30px;
            text-transform: capitalize;
        }

        /* tutup left*/

        /* right */
        .right {
            position: absolute;
            left: 490px;
            width: 600px;
            z-index: 999;
            top: 0px;
            font-family: Arial,
                Helvetica,
                sans-serif;
        }

        .right .head {
            /* height: 300px; */
            padding: 90px 0;
            background-color: #F1393D;
        }

        .right .head h1 {
            margin: 0px;
            font-size: 22px;
            text-transform: uppercase;
            text-align: center;
            color: #fff;

            font-weight: bold;
        }

        .right .content {
            margin-top: 30px;
            padding: 20px;
        }

        /* profile */
        .right .content .profile h1 {
            font-size: 30px;
            margin: 0;
            color: #F1393D;
        }

        .right .content .profile p {
            font-size: 22px;
            /* font-size: normal; */
            margin-top: 20px;
            text-align: justify;
            text-indent: 50px;
        }

        /* education */
        .right .content .education {
            margin-top: 40px;
        }

        .right .content .education h1 {
            font-size: 30px;
            margin: 0;
            color: #F1393D;
        }

        .right .content .education p {
            font-size: 22px;
            text-transform: uppercase;
            margin: 0 0 10px 0;

        }

    </style>
</head>

<body>
    <section id="template-2" >
        <div class="left">
            <div class="foto">
                <img src="{{ asset('imgup/' . $dat->foto) }}" alt="">
            </div>

            <div class="contact">
                <h1>Data pribadi</h1>
                
                <p style="padding-bottom: 10px; text-transform: capitalize;"><span class="bulet"></span> <span
                        class="text">{{ $dat->tempat_lahir . ', ' . Carbon\Carbon::parse($dat->tanggal_lahir)->isoFormat("D MMMM Y") }}</span>
                </p>
                <p style="padding-bottom: 10px; text-transform: capitalize;"><span class="bulet"></span><span
                        class="text">{{ $dat->jenis_kelamin }}</span>
                </p>
                <p style="padding-bottom: 10px; text-transform: capitalize;"><span class="bulet"></span><span
                        class="text">{{ $dat->status_perkawinan }}</span>
                </p>
                <p style="padding-bottom: 10px;"><span class="bulet"></span> <span
                        class="text">+{{ $dat->no_telp }}</span> </p>
                <p style="padding-bottom: 10px;"><span class="bulet"></span> <span
                        class="text">{{ $dat->email }}</span></p>
                <p style="padding-bottom: 10px; text-transform: capitalize;"><span class="bulet"></span><span
                        class="text">{{ $dat->alamat }}</span>
                </p>
            </div>
            <div class="skill">
                <h1>Skill</h1>
                <h2>{{ $dats->skill }}</h2>
                <div class="skill-persen">
                    <div class="skill-persentase-1" style="width: {{ $dats->skill_persen }}%;"></div>
                </div>
                @if ($dats->skill2 == Null)

                @else
                    <h2>{{ $dats->skill2 }}</h2>
                    <div class="skill-persen">
                        <div class="skill-persentase-1" style="width: {{ $dats->skill_persen2 }}%;"></div>
                    </div>
                @endif
                @if ($dats->skill3 == Null)

                @else
                     <h2>{{ $dats->skill3 }}</h2>
                    <div class="skill-persen">
                        <div class="skill-persentase-1" style="width: {{ $dats->skill_persen3 }}%;"></div>
                    </div>
                @endif
            </div>
            <div class="hobi">
                <h1>Hobi</h1>
                <p style="padding-bottom: 20px;">
                    <span class="bulet"></span>
                    <span class="text">{{ $dats->hobi }}</span>
                </p>
                @if ($dats->hobi2 == Null)
                
                @else
                    <p style="padding-bottom: 20px;">
                        <span class="bulet"></span>
                        <span class="text">{{ $dats->hobi2 }}</span>
                    </p>
                @endif
                @if ($dats->hobi3 == Null)
                
                @else
                    <p style="padding-bottom: 20px;">
                        <span class="bulet"></span>
                        <span class="text">{{ $dats->hobi3 }}</span>
                    </p>
                @endif
                @if ($dats->hobi4 == Null)
                
                @else
                    <p style="padding-bottom: 20px;">
                        <span class="bulet"></span>
                        <span class="text">{{ $dats->hobi4 }}</span>
                    </p>
                @endif
            </div>
        </div>
        <div class="right">
            <div class="head">
                <h1>{{ $dat->nama_depan . ' ' . $dat->nama_belakang }}</h1>
            </div>
            <div class="content">
                <div class="profile">
                    <h1>
                        Tentang Saya
                    </h1>
                    <p>{{ $dats->deksripsi }}</p>
                </div>
                <div class="education">
                    <h1>
                        Riwayat Pendidikan
                    </h1>
                    <div style="margin-top: 20px;">
                        <p><i class="fas fa-caret-right"
                                style="margin-right: 15px; "></i>{{ date('Y', strtotime($dats->mulai_belajar)) . ' - ' . date('Y', strtotime($dats->selesai_belajar)) }}
                            <span class="me-2">{{ $dats->nama_instansi . ', ' . $dats->kota_instansi }}</span>
                        </p>
                        @if ($dats->nama_instansi2 == Null)
                            
                        @else
                            <p><i class="fas fa-caret-right"
                                style="margin-right: 15px; "></i>{{ date('Y', strtotime($dats->mulai_belajar2)) . ' - ' . date('Y', strtotime($dats->selesai_belajar2)) }}
                                <span class="me-2">{{ $dats->nama_instansi2 . ', ' . $dats->kota_instansi2 }}</span>
                            </p>
                        @endif
                        @if ($dats->nama_instansi3 == Null)
                            
                        @else
                            <p><i class="fas fa-caret-right"
                                style="margin-right: 15px; "></i>{{ date('Y', strtotime($dats->mulai_belajar3)) . ' - ' . date('Y', strtotime($dats->selesai_belajar3)) }}
                                <span class="me-2">{{ $dats->nama_instansi3 . ', ' . $dats->kota_instansi3 }}</span>
                            </p>
                        @endif
                        {{-- <p><i class="fas fa-caret-right" style="margin-right: 15px;"></i>2017 - 2020 University Name</p>
                        <p><i class="fas fa-caret-right" style="margin-right: 15px;"></i>2017 - 2020 University Name</p> --}}
                    </div>
                </div>
                <div class="education">
                    <h1>
                        Pengalaman Kerja
                    </h1>
                    <div style="margin-top: 20px;">
                        <p><i class="fas fa-caret-right"
                                style="margin-right: 15px; "></i>{{ date('Y', strtotime($dats->mulai_kerja)) . ' - ' . date('Y', strtotime($dats->selesai_kerja)) }}
                            <span class="me-2">{{ $dats->jabatan . ', ' . $dats->perusahaan }}</span>
                        </p>
                        @if ($dats->perusahaan2 == Null)
                            
                        @else
                            <p><i class="fas fa-caret-right"
                                style="margin-right: 15px; "></i>{{ date('Y', strtotime($dats->mulai_kerja2)) . ' - ' . date('Y', strtotime($dats->selesai_kerja2)) }}
                            <span class="me-2">{{ $dats->jabatan2 . ', ' . $dats->perusahaan2 }}</span>
                        </p>
                        @endif
                        @if ($dats->perusahaan3 == Null)
                            
                        @else
                            <p><i class="fas fa-caret-right"
                                style="margin-right: 15px; "></i>{{ date('Y', strtotime($dats->mulai_kerja3)) . ' - ' . date('Y', strtotime($dats->selesai_kerja3)) }}
                            <span class="me-2">{{ $dats->jabatan3 . ', ' . $dats->perusahaan3 }}</span>
                        </p>
                        @endif
                        {{-- <p><i class="fas fa-caret-right" style="margin-right: 15px;"></i>2017 - 2020 University Name</p>
                        <p><i class="fas fa-caret-right" style="margin-right: 15px;"></i>2017 - 2020 University Name</p> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
