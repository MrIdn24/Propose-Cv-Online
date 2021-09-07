{{-- {{ dd($data2) }} --}}
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    {{-- <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@300;400;500;600;700&display=swap"
        rel="stylesheet"> --}}

    <!-- css -->
    <!-- <link rel="stylesheet" href="template-3-style.css"> -->
    <style>
        * {
            font-family: 'Assistant',
                sans-serif;
            color: #343A40;
            /* font-weight: 400; */
        }

        /* LEFT */
        .left {
            /* background-color: #999999; */
            float: left;
            width: 440px;
            height: 1300px;
            position: relative;
            left: -8px;
            top: -9px;
            bottom: -100px;
            background-position-y: 100px;
            padding: 30px;
        }

        /* foto */
        .left .foto img {
            /* width: 300px; */
            height: 200px;
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-top: 50px;
            border: 20px solid #FAEBE0;
            /* border-radius: 50%; */
        }

        /* tentang saya */
        .left .tentang-saya {
            margin-top: 35px;
        }

        .left .tentang-saya h2 {
            border-bottom: 2px solid #343A40;
            font-size: 26px;
            padding-bottom: 5px;
            margin: 0;
        }

        .left .tentang-saya p {
            font-size: 20px;
            /* font-size: normal; */
            margin-top: 15px;
            text-align: justify;
            text-indent: 50px;
        }

        /* kemampuan */
        .left .kemampuan {
            margin-top: 45px;
        }

        .left .kemampuan h2 {
            background-color: #FAEBE0;
            box-shadow: -8px -8px 0px #343A40;
            width: 200px;
            padding-left: 5px;
            padding-bottom: 6px;
            margin-left: 8px;
            margin-bottom: 15px;
        }

        .left .kemampuan p {
            font-size: 20px;
            margin-bottom: 5px;
            margin-top: 5px;
            text-transform: uppercase;
        }

        .left .kemampuan .kemampuan-persen {
            width: 100%;
            height: 30px;
            background-color: #FAEBE0;
        }

        .left .kemampuan .kemampuan-persentase {
            width: 100%;
            height: 30px;
            background-color: #343A40;
        }

        /* hobi */
        .left .hobi {
            margin-top: 45px;
        }

        .left .hobi h2 {
            background-color: #FAEBE0;
            box-shadow: -8px -8px 0px #343A40;
            width: 200px;
            padding-left: 5px;
            padding-bottom: 6px;
            margin-left: 8px;
            /* margin-bottom: 15px; */
        }

        .left .hobi .bulet {
            padding: 5px 15px;
            /* width: 50px;
        height: 50px; */
            border-radius: 50%;
            background-color: #FAEBE0;
            /* margin-bottom: 100px; */
        }

        .left .hobi .text {
            font-size: 20px;
            position: relative;
            /* top: 8px; */
            left: 20px;
            text-transform: capitalize;
        }




        /* RIGHT */
        .right {
            position: absolute;
            /* background-color: rgba(2, 0, 0, 0.11); */
            left: 500px;
            width: 440px;
            /* height: 1380px; */
            z-index: 999;
            top: 0px;
            /* font-family: Arial,
        Helvetica,
        sans-serif; */
            padding: 30px;
        }

        .right h1 {
            text-align: right;
            font-size: 50px;
            margin-top: 120px;
            line-height: 39px;
            text-transform: uppercase;
        }

        /* identitas */
        .right .identitas {
            margin-top: 100px;
        }

        .right .identitas h2 {
            background-color: #FAEBE0;
            box-shadow: -8px -8px 0px #343A40;
            width: 200px;
            padding-left: 5px;
            padding-bottom: 6px;
            margin-left: 8px;
            margin-bottom: 15px;

        }

        .right .identitas .text {
            font-weight: 600;
            margin-top: 5px;
            font-size: 20px;
            text-transform: capitalize;
        }

        .right .identitas p {
            display: inline;
            font-weight: normal;
            font-size: 20px;
            margin: 0px;
            padding-left: 10px;
        }

        /* hobi */
        .right .pendidikan {
            margin-top: 45px;
        }

        .right .pendidikan h2 {
            background-color: #FAEBE0;
            box-shadow: -8px -8px 0px #343A40;
            width: 250px;
            padding-left: 5px;
            padding-bottom: 6px;
            margin-left: 8px;
            /* margin-bottom: 15px; */
        }

        .right .pendidikan .bulet {
            padding: 5px 15px;
            /* width: 50px;
        height: 50px; */
            border-radius: 50%;
            background-color: #FAEBE0;
            /* margin-bottom: 100px; */
        }

        .right .pendidikan .text {
            font-size: 20px;
            position: relative;
            /* top: 8px; */
            left: 20px;
            text-transform: uppercase;
        }

        /* pekerjaan */
        .right .pekerjaan {
            margin-top: 45px;
        }

        .right .pekerjaan h2 {
            background-color: #FAEBE0;
            box-shadow: -8px -8px 0px #343A40;
            width: 250px;
            padding-left: 5px;
            padding-bottom: 6px;
            margin-left: 8px;
            /* margin-bottom: 15px; */
        }

        .right .pekerjaan .bulet {
            padding: 5px 15px;
            /* width: 50px;
        height: 50px; */
            border-radius: 50%;
            background-color: #FAEBE0;
            /* margin-bottom: 100px; */
        }

        .right .pekerjaan .text {
            font-size: 20px;
            position: relative;
            /* top: 8px; */
            left: 20px;
            text-transform: uppercase;
        }

        footer {
            width: 1000px;
            height: 30px;
            background-color: #faebe0;
            clear: left;
            /* position: absolute;
        left: 0px;
        top: 1300px; */
        }

    </style>
    <title>Template 3</title>
</head>

<body>
    <section id="template-3" onload="window.print();">
        <div class="left">
            <div class="foto">
                <img src="{{ asset('imgup/' . $dat->foto) }}" alt="">
            </div>
            <div class="tentang-saya">
                <h2>Tentang Saya</h2>
                <p>{{ $dats->deksripsi }}</p>
            </div>
            <div class="kemampuan">
                <h2>Kemampuan</h2>
                <p>{{ $dats->skill }}</p>
                <div class="kemampuan-persen">
                    <div class="kemampuan-persentase" style="width: {{ $dats->skill_persen }}%;">
                    </div>
                </div>
                @if ($dats->skill2 == Null)

                @else
                    <p>{{ $dats->skill2 }}</p>
                    <div class="kemampuan-persen">
                        <div class="kemampuan-persentase" style="width: {{ $dats->skill_persen2 }}%;">
                        </div>
                    </div>
                @endif
                @if ($dats->skill3 == Null)

                @else
                    <p>{{ $dats->skill3 }}</p>
                    <div class="kemampuan-persen">
                        <div class="kemampuan-persentase" style="width: {{ $dats->skill_persen3 }}%;">
                        </div>
                    </div>
                @endif
            </div>
            <div class="hobi">
                <h2>Hobi</h2>
                <p style="padding-bottom: 5px;">
                    <span class="bulet"></span>
                    <span class="text">{{ $dats->hobi }}</span>
                </p>
                @if ($dats->hobi2 == Null)

                @else
                    <p style="padding-bottom: 5px;">
                         <span class="bulet"></span>
                         <span class="text">{{ $dats->hobi2 }}</span>
                     </p>
                @endif
                @if ($dats->hobi3 == Null)
                
                @else
                    <p style="padding-bottom: 5px;">
                         <span class="bulet"></span>
                         <span class="text">{{ $dats->hobi3 }}</span>
                     </p>
                @endif
                @if ($dats->hobi4 == Null)
                
                @else
                    <p style="padding-bottom: 5px;">
                         <span class="bulet"></span>
                         <span class="text">{{ $dats->hobi4 }}</span>
                     </p>
                @endif
                {{-- <p style="padding-bottom: 5px;">
                    <span class="bulet"></span>
                    <span class="text">Mendengarkan musik</span>
                </p>
                <p style="padding-bottom: 5px;">
                    <span class="bulet"></span>
                    <span class="text">Berenang</span>
                </p> --}}
            </div>
        </div>
        <div class="right">
            <div class="bulet"></div>
            <h1>{{ $dat->nama_depan . ' ' . $dat->nama_belakang }}</h1>
            <div class="identitas">
                <h2>Identitas</h2>
                <div class="text">
                    Nama:<p>{{ $dat->nama_depan . ' ' . $dat->nama_belakang }}</p>
                </div>
                <div class="text">
                    Tanggal Lahir:<p>{{ $dat->tempat_lahir . ', ' . Carbon\Carbon::parse($dat->tanggal_lahir)->isoFormat("D MMMM Y") }}</p>
                </div>
                <div class="text">
                    Jenis Kelamin:<p>{{ $dat->jenis_kelamin}}</p>
                </div>
                <div class="text">
                    Staus Perkawinan:<p>{{ $dat->status_perkawinan}}</p>
                </div>
                <div class="text">
                    No telp:<p>+{{ $dat->no_telp}}</p>
                </div>
                <div class="text" style="text-transform: none">
                    Email:<p>{{ $dat->email}}</p>
                </div>
                <div class="text">
                    Alamat:<p>{{ $dat->alamat}} </p>
                </div>
            </div>
            <!-- Pendidikan -->
            <div class="pendidikan">
                <h2>Riwayat Pendidikan</h2>
                <div>
                    <p style="padding-bottom: 5px;">
                        <span class="bulet"></span>
                        <span class="text">{{ date('Y', strtotime($dats->mulai_belajar)) . ' - ' . date('Y', strtotime($dats->selesai_belajar)) }}
                            <span style="margin-left: 10px;">{{ $dats->nama_instansi . ', ' . $dats->kota_instansi }}
                            </span>
                        </span>
                    </p>
                </div>

                @if ($dats->nama_instansi2 == Null)
                    
                @else
                    <div>
                        <p style="padding-bottom: 5px;">
                            <span class="bulet"></span>
                            <span class="text">{{ date('Y', strtotime($dats->mulai_belajar2)) . ' - ' . date('Y', strtotime($dats->selesai_belajar2)) }}
                                <span style="margin-left: 10px;">{{ $dats->nama_instansi2 . ', ' . $dats->kota_instansi2 }}
                                </span>
                            </span>
                        </p>
                    </div>
                @endif
                @if ($dats->nama_instansi3 == Null)
                    
                @else
                    <div>
                        <p style="padding-bottom: 5px;">
                            <span class="bulet"></span>
                            <span class="text">{{ date('Y', strtotime($dats->mulai_belajar3)) . ' - ' . date('Y', strtotime($dats->selesai_belajar3)) }}
                                <span style="margin-left: 10px;">{{ $dats->nama_instansi3 . ', ' . $dats->kota_instansi3 }}
                                </span>
                            </span>
                        </p>
                    </div>
                @endif
                {{-- <p style="padding-bottom: 5px;">
                    <span class="bulet"></span>
                    <span class="text">2010 - 2016
                        <span style="margin-left: 10px;">Smpit arafah
                        </span>
                    </span>
                </p> --}}

            </div>
            <!-- pekerjaan -->
            <div class="pekerjaan">
                <h2>Riwayat Pekerjaan</h2>
                <div>
                    <p style="padding-bottom: 5px;">
                        <span class="bulet"></span>
                        <span class="text">{{ date('Y', strtotime($dats->mulai_kerja)) . ' - ' . date('Y', strtotime($dats->selesai_kerja)) }}
                            <span style="margin-left: 10px;">{{ $dats->jabatan . ', ' . $dats->perusahaan }}
                            </span>
                        </span>
                    </p>
                </div>
                @if ($dats->perusahaan2 == Null)
                    
                @else
                    <div>
                        <p style="padding-bottom: 5px;">
                            <span class="bulet"></span>
                            <span class="text">{{ date('Y', strtotime($dats->mulai_kerja2)) . ' - ' . date('Y', strtotime($dats->selesai_kerja2)) }}
                                <span style="margin-left: 10px;">{{ $dats->jabatan2 . ', ' . $dats->perusahaan2 }}
                                </span>
                            </span>
                        </p>
                    </div>
                @endif
                @if ($dats->perusahaan3 == Null)
                    
                @else
                    <div>
                        <p style="padding-bottom: 5px;">
                            <span class="bulet"></span>
                            <span class="text">{{ date('Y', strtotime($dats->mulai_kerja3)) . ' - ' . date('Y', strtotime($dats->selesai_kerja3)) }}
                                <span style="margin-left: 10px;">{{ $dats->jabatan3 . ', ' . $dats->perusahaan3 }}
                                </span>
                            </span>
                        </p>
                    </div>
                @endif
                {{-- <p style="padding-bottom: 5px;">
                    <span class="bulet"></span>
                    <span class="text">2010 - 2016
                        <span style="margin-left: 10px;">Smpit arafah
                        </span>
                    </span>
                </p> --}}
            </div>
        </div>
        <footer></footer>
    </section>
</body>

</html>
