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
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet"> --}}
    <title>Template 4</title>
    <style>
        .side {
            background-color: #2980b9;
            float: left;
            width: 350px;
            height: 1300px;
            color: white;
            position: relative;
            left: -8px;
            top: -9px;
            bottom: -100px;
            background-position-y: 100px;
            padding: 20px;
        }

        .side .foto {
            margin-top: 30px;
        }

        .side img {
            /* position: absolute; */
            /* margin-left: 80px; */
            align-items: center;
            /* width: 170px; */
            height: 170px;
            display: block;
            margin-right: auto;
            margin-left: auto;
            /* border-radius: 50%; */
        }

        .side .side-content {
            width: 90%;
            margin: auto;
            padding-top: 30px;
        }

        .side .side-content .data {
            font-size: 25px;
            font-weight: bold;
            font-family: 'Roboto', sans-serif;
            text-transform: uppercase;
        }

        .side .profilediri {
            margin-top: -30px;
            font-size: 24px;
            font-weight: bold;
            text-transform: uppercase;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;

        }


        .side .profilediri .pd {
            text-transform: none;
            font-size: 16px;
            max-width: 310px;
            padding-top: 30px;
            text-align: justify;
            font-weight: normal;
        }

        .side .profilediri .pd p {
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;

            /* border: 1px solid; */
            background-color: #2980b9;
            color: white;
            padding: 5px 5px 5px 5px;
            font-size: 15px;
            margin-right: 5px;
            text-transform: capitalize;

        }

        .side .profilediri .pd .isi {
            font-size: 16px;
            /* text-transform: lowercase; */
        }

        .side .profilediri .pd .isi-1 {
            font-size: 15px;
            text-transform: capitalize;
        }

        .side .profile {
            margin-top: 60px;
            font-size: 24px;
            font-weight: bold;
            text-transform: uppercase;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        .side .profile .sp {
            border: 5px solid;
            background-color: #2980b9;
            color: white;
            padding: 5px 53px;
        }

        .side .profile .isi-tentang {
            text-transform: uppercase;
            font-size: 15px;
            max-width: 310px;
            padding-top: 30px;
            text-align: justify;
            font-weight: normal;
        }

        .side .contact {
            margin-top: 50px;
            font-size: 24px;
            font-weight: bold;
            text-transform: uppercase;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        .side .contact .sp {
            border: 5px solid;
            background-color: #2980b9;
            color: white;
            padding: 5px 95px;
        }

        .side .contact .number-contact {
            text-transform: none;
            font-size: 12px;
            max-width: 310px;
            padding-top: 30px;
            text-align: justify;
            font-weight: normal;
        }

        .side .contact .number-contact .a {
            /* border: 1px solid; */
            background-color: #2980b9;
            color: white;
            padding: 5px 5px 5px 5px;
            font-size: 20px;
            margin-right: 5px;

        }


        .side .contact .number-contact .isi {
            font-size: 15px;
            text-transform: lowercase;
        }

        .side .contact .number-contact .isi-1 {
            font-size: 15px;
            text-transform: capitalize;
        }

        /* batas */


        .content {
            position: absolute;
            left: 300px;
            width: 710px;
            z-index: 999;
            top: 5px;
            /* margin-top: 30px; */
        }


        .content .tentang-saya {
            margin-top: 40px;
            margin-left: 150px;
            font-size: 24px;
            font-weight: bold;

            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        .content .tentang-saya .sp {
            border: 5px solid;
            background-color: white;
            color: black;
            padding: 5px 28px;
        }

        .content .tentang-saya .isi-tentang {
            margin-left: 50px;
            font-size: 17px;
            padding-top: 30px;
            text-align: justify;
            font-weight: normal;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            /* font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; */
            text-transform: capitalize;
        }


        .content .pengalaman {
            margin-top: 50px;
            margin-left: 150px;
            font-size: 24px;
            font-weight: bold;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }


        .content .pengalaman .sp {
            border: 5px solid;
            background-color: white;
            color: black;
            padding: 5px 35px;
        }

        .content .pengalaman .isi-pengalaman {
            text-transform: capitalize;
            margin-left: 50px;
            font-size: 17px;
            padding-top: 30px;
            font-weight: normal;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            /* font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; */
        }

        .box1 {
            margin-top: 15px;
        }

        .content .pengalaman .isi-pengalaman .perusahaan {
            margin-top: 2px;
            margin-left: 20px;
        }

        .content .pengalaman .isi-pengalaman .about-perusahaan {
            margin-top: -7px;
            margin-left: 20px;
            max-width: 400px;
            font-size: 10px;
            font-family: 'Roboto', sans-serif;
        }


        .content .skill {
            margin-top: 50px;
            margin-left: 150px;
            font-size: 24px;
            font-weight: bold;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }


        .content .skill .sp {
            border: 5px solid;
            background-color: white;
            color: black;
            padding: 5px 86px;
        }

        .content .skill .isi-skill {
            margin-left: 50px;
            font-size: 17px;
            padding-top: 30px;
            font-weight: normal;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            /* font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; */
            text-transform: capitalize;
        }

        /* bar skil 1 */

        .content .skill .isi-skill .skil1 {
            margin-left: 20px;
        }

        .content .skill .isi-skill p {
            margin: 0;
        }

        .content .skill .isi-skill .satu {
            margin-top: 5px;
            width: 300px;
            background-color: #000000;
            height: 20px;
        }

        .content .skill .isi-skill .dua {
            /* width: 80%; */
            background-color: #515151;
            height: 20px;
        }

        .content .skill .isi-skill .about-perusahaan {
            margin-top: -7px;
            margin-left: 20px;
            max-width: 400px;
            font-size: 10px;
            font-family: 'Roboto', sans-serif;
        }

        .content .hobi {
            margin-top: 40px;
            margin-left: 150px;
            font-size: 24px;
            font-weight: bold;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }


        .content .hobi .hb {
            border: 5px solid;
            background-color: white;
            color: black;
            padding: 5px 136px;
        }

        .content .hobi .hobii {
            margin-left: 50px;
            font-size: 17px;
            padding-top: 30px;
            font-weight: normal;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            /* font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; */
            text-transform: capitalize;
        }

    </style>
</head>

<body>
    <div class="side">
        <div class="foto">
            <img src="{{ asset('imgup/' . $dat->foto) }}">
        </div>
        <div class="side-content">
            <div class="data">
                <div style="text-align: center;">{{ $dat->nama_depan . ' ' . $dat->nama_belakang }}</div>

                <div class="profilediri">

                    <div class="pd">


                        <h4 class="isi">Tempat/Tanggal Lahir</h4>
                        <p>{{ $dat->tempat_lahir . ', ' . Carbon\Carbon::parse($dat->tanggal_lahir)->isoFormat("D MMMM Y") }}</p>

                        <h4 class="isi">Jenis Kelamin</h4>
                        <p>{{ $dat->jenis_kelamin}}</p>


                        <h4 class="isi">Status Perkawinan</h4>
                        <p>{{ $dat->status_perkawinan}}</p>

                    </div>
                </div>

                <div class="profile">
                    <span class="sp">TENTANG SAYA</span>
                    <div class="isi-tentang">
                        {{ $dats->deksripsi }}
                    </div>
                </div>

                <div class="contact">
                    <span class="sp">KONTAK</span>
                    <div class="number-contact">
                        <i class="fas fa-envelope a"></i>
                        <span class="isi">{{ $dat->email}}</span>
                        <hr>
                        <i class="fas fa-phone a"></i>
                        <span class="isi">+{{ $dat->no_telp}}</span>
                        <hr>
                        <i class="fas fa-map-marker-alt a"></i>
                        <span class="isi-1">{{ $dat->alamat}}</span>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content">

        <div class="tentang-saya">
            <span class="sp">RIWAYAT PENDIDIKAN</span>
            <div class="isi-tentang">
                <div class="box1">
                    <i class="fas fa-stop"></i>
                    <span><b> {{ date('Y', strtotime($dats->mulai_belajar)) . ' - ' . date('Y', strtotime($dats->selesai_belajar)) . ' | ' . $dats->nama_instansi . ' | ' . $dats->kota_instansi}}</b></span>
                </div>
                @if ($dats->nama_instansi2 == Null)
                    
                @else
                    <div class="box1">
                        <i class="fas fa-stop"></i>
                        <span><b> {{ date('Y', strtotime($dats->mulai_belajar2)) . ' - ' . date('Y', strtotime($dats->selesai_belajar2)) . ' | ' . $dats->nama_instansi2 . ' | ' . $dats->kota_instansi2}}</b></span>
                    </div>
                @endif
                @if ($dats->nama_instansi3 == Null)
                    
                @else
                    <div class="box1">
                        <i class="fas fa-stop"></i>
                        <span><b> {{ date('Y', strtotime($dats->mulai_belajar3)) . ' - ' . date('Y', strtotime($dats->selesai_belajar3)) . ' | ' . $dats->nama_instansi3 . ' | ' . $dats->kota_instansi3}}</b></span>
                    </div>
                @endif
                {{-- <div class="box1">
                    <i class="fas fa-stop"></i>
                    <span><b> 2010 - 2016 | SDN CISALAK 4 | Jl Raya Bogor</b></span>
                </div> --}}
            </div>
        </div>

        <div class="pengalaman">
            <span class="sp">RIWAYAT PEKERJAAN</span>
            <div class="isi-pengalaman">
                <div class="box1">
                    <i class="fas fa-stop"></i>
                    <span><b> {{ date('Y', strtotime($dats->mulai_kerja)) . ' - ' . date('Y', strtotime($dats->selesai_kerja)) . ' | ' . $dats->jabatan . ' | ' . $dats->perusahaan}}</b></span>
                </div>
                @if ($dats->perusahaan2 == Null)
                    
                @else
                    <div class="box1">
                        <i class="fas fa-stop"></i>
                        <span><b> {{ date('Y', strtotime($dats->mulai_kerja2)) . ' - ' . date('Y', strtotime($dats->selesai_kerja2)) . ' | ' . $dats->jabatan2 . ' | ' . $dats->perusahaan2}}</b></span>
                    </div>
                @endif
                @if ($dats->perusahaan3 == Null)
                    
                @else
                    <div class="box1">
                        <i class="fas fa-stop"></i>
                        <span><b> {{ date('Y', strtotime($dats->mulai_kerja3)) . ' - ' . date('Y', strtotime($dats->selesai_kerja3)) . ' | ' . $dats->jabatan3 . ' | ' . $dats->perusahaan3}}</b></span>
                    </div>
                @endif
                {{-- <div class="box1">
                    <i class="fas fa-stop"></i>
                    <span><b> 2010 - 2016 | Depok</b></span>
                </div> --}}


            </div>
        </div>

        <div class="skill">
            <span class="sp">KEMAMPUAN</span>
            <div class="isi-skill">
                <!-- <i class="fas fa-stop box1"></i> -->
                <div class="box1">
                    <p>{{ $dats->skill }}</p>
                    <div class="satu">
                        <div class="dua" style="width: {{ $dats->skill_persen }}%;"></div>
                    </div>
                </div>
                @if ($dats->skill2 == Null)

                @else
                <div class="box1">
                    <p>{{ $dats->skill2 }}</p>
                    <div class="satu">
                        <div class="dua" style="width: {{ $dats->skill_persen2 }}%;"></div>
                    </div>
                </div>
                @endif
                @if ($dats->skill3 == Null)

                @else
                <div class="box1">
                    <p>{{ $dats->skill3 }}</p>
                    <div class="satu">
                        <div class="dua" style="width: {{ $dats->skill_persen3 }}%;"></div>
                    </div>
                </div>
                @endif
            </div>
        </div>

        <div class="hobi">
            <span class="hb">HOBI</span>
            <div class="hobii">
                <div class="box1">
                    <div>
                        <i class="fas fa-stop"></i>
                        <span><b> {{ $dats->hobi }}</b></span>
                    </div>
                </div>
                @if ($dats->hobi2 == Null)

                @else
                <div class="box1">
                    <div>
                        <i class="fas fa-stop"></i>
                        <span><b> {{ $dats->hobi2 }}</b></span>
                    </div>
                </div>
                @endif
                @if ($dats->hobi3 == Null)

                @else
                <div class="box1">
                    <div>
                        <i class="fas fa-stop"></i>
                        <span><b> {{ $dats->hobi3 }}</b></span>
                    </div>
                </div>
                @endif
                @if ($dats->hobi4 == Null)

                @else
                <div class="box1">
                    <div>
                        <i class="fas fa-stop"></i>
                        <span><b> {{ $dats->hobi4 }}</b></span>
                    </div>
                </div>
                @endif
            </div>
        </div>


    </div>
</body>

</html>
