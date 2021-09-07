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
    <title>Template Flat 0.1</title>
    <style>
        /* side */
        .side {
            background-color: #154df0;
            float: left;
            /* width: 400px; */
            width: 500px;
            height: 1700px;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
            position: relative;
            left: -8px;
            top: -9px;
            bottom: -100px;
            background-position-y: 100px;
            padding: 20px;
        }

        .side .foto {
            /* background-color: grey; */
            /* height: 350px;
            width: 350px; */
            margin: 50px auto;
        }

        .side img {
            border-radius: 50%;
            height: 200px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .side .side-content {
            width: 90%;
            margin: auto;
            padding-top: 20px;
        }

        .side .side-content .data {
            font-size: 45px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            text-transform: uppercase;
        }

        .side .side-content .data hr {
            height: 5px;
            background-color: white;
            position: relative;
            top: -25px;
        }

        .side .side-content .data .isi-nama {
            font-size: 24px;
            font-family: sans-serif;
            font-weight: bold;
            text-transform: none;
        }

        .side .side-content .data .isi-nama ul li {
            padding-bottom: 20px;
            list-style: none;
            margin-left: -40px;
        }

        .side .side-content .data .isi-skill {
            font-size: 24px;
            font-family: sans-serif;
            font-weight: bold;
            text-transform: none;
        }

        .side .side-content .data .isi-skill ul li {
            padding-bottom: 20px;
            list-style: none;
            margin-left: -40px;
        }

        .side .side-content .data .isi-skill ul li .bar-skill {
            height: 15px;
            background-color: white;
            display: inline-block;
            position: absolute;
            margin-left: 50px;
            margin-top: 5px;
        }

        .side .side-content .data .isi-skill ul li .a {
            /* width: 250px; */
            border-right: 50px solid grey;
        }

        .side .side-content .data .isi-skill ul li .b {
            margin-left: 25px;
            width: 150px;
            border-right: 150px solid grey;
        }

        .side .side-content .data .isi-skill ul li .c {
            margin-left: 49px;
            width: 180px;
            border-right: 120px solid grey;
        }

        .side .side-content .data .isi-skill ul li .d {
            margin-left: 22px;
            width: 5px;
            border-right: 295px solid grey;
        }

        .side .side-content .data .isi-hobi {
            font-size: 24px;
            font-family: sans-serif;
            font-weight: bold;
            text-transform: none;
        }

        .side .side-content .data .isi-hobi ul li {
            padding-bottom: 20px;
            list-style: none;
            margin-left: -40px;
        }

        .foot {
            position: relative;
            background-color: #154df0;
            height: 30px;
            width: 1350px;
            top: 1730px;
            left: -10px;
        }

        /* Akhir Side */

        /* Content */

        .content {
            position: absolute;
            /* left: 437px; */
            left: 537px;
            /* width: 660px; */
            width: 810px;
            z-index: 999;
            top: 0px;
        }

        .content .nama {
            padding: 100px;
            text-align: center;
            height: 70px;
            border: 5px solid #154df0;
            text-transform: uppercase;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-size: 20px;
        }

        .content .nama span {
            font-size: 50px;
            font-weight: bold;
        }

        .content .bulet {
            height: 30px;
            width: 30px;
            padding-left: 12px;
            padding-right: 12px;
            padding-bottom: 25px;
            border: 10px solid #154df0;
            border-radius: 100%;
            position: absolute;
            margin-top: 120px;
            margin-left: 40px;
        }

        .content .bulet span {
            font-size: 50px;
            color: #154df0;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }

        .content .bulet hr {
            background-color: #154df0;
            height: 215px;
            width: 10px;
            position: absolute;
            margin-top: -2px;
            margin-left: 8px;
            z-index: -999;
            border: 1px solid #154df0;
        }

        .content .tentang-saya {
            margin-top: 150px;
            margin-left: 150px;
            font-size: 24px;
            font-weight: bold;
            text-transform: uppercase;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        .content .tentang-saya span {
            background-color: #154df0;
            color: white;
            padding: 5px 400px 5px 10px;
        }

        .content .tentang-saya .isi-tentang {
            text-transform: none;
            font-size: 17px;
            max-width: 600px;
            padding-top: 20px;
            text-align: justify;
            font-weight: normal;
        }

        .content .pengalaman {
            margin-top: 100px;
            margin-left: 150px;
            font-size: 24px;
            font-weight: bold;
            text-transform: uppercase;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        .content .pengalaman span {
            background-color: #154df0;
            color: white;
            padding: 5px 340px 5px 10px;
        }

        .content .pengalaman .isi-pengalaman {
            font-size: 17px;
            max-width: 610px;
            padding-top: 20px;
            text-align: justify;
            font-weight: normal;
        }

        .content .pengalaman .isi-pengalaman tr {
            line-height: 40px;
        }

        .content .riwayat {
            margin-top: 100px;
            margin-left: 150px;
            font-size: 24px;
            font-weight: bold;
            text-transform: uppercase;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana,
                sans-serif;
        }

        .content .riwayat span {
            background-color: #154df0;
            color: white;
            padding: 5px 340px 5px 10px;
        }

        .content .riwayat .isi-riwayat {
            font-size: 17px;
            max-width: 610px;
            padding-top: 20px;
            text-align: justify;
            font-weight: normal;
        }

        .content .riwayat .isi-riwayat tr {
            line-height: 40px;
        }

        /* Akhir Content */
    </style>
</head>

<body>
    <section id="wraping">
        <div class="side">
            <div class="foto">
                <img src="{{ asset('imgup/' . $dat->foto) }}">
            </div>
            <div class="side-content">
                <div class="data">
                    Data Pribadi
                    <hr>
                    <div class="isi-nama">
                        <ul>
                            <li>
                                Nama : <br>
                                <span style="font-weight: normal;">{{ $dat->nama_depan . ' ' . $dat->nama_belakang}}</span>
                            </li>
                            <li>
                                Tempat/Tanggal Lahir : <br>
                                <span style="font-weight: normal;">{{ $dat->tempat_lahir . ', ' . date("d m Y", strtotime($dat->tanggal_lahir)) }}</span>
                            </li>
                            <li>
                                Jenis Kelamin : <br>
                                <span style="font-weight: normal;">{{ $dat->jenis_kelamin }}</span>
                            </li>
                            <li>
                                Status Perkawinan : <br>
                                <span style="font-weight: normal;">{{ $dat->status_perkawinan }}</span>
                            </li>
                            <li>
                                No Telp/Hp : <br>
                                <span style="font-weight: normal;">+{{ $dat->no_telp }}</span>
                            </li>
                            <li>
                                Email : <br>
                                <span style="font-weight: normal;">{{ $dat->email }}</span>
                            </li>
                            <li>
                                Alamat : <br>
                                <span style="font-weight: normal;">{{ $dat->alamat }}</span>
                            </li>
                        </ul>
                    </div>
                    Skill
                    <hr>
                    <div class="isi-skill">
                        <ul>
                            <li>
                                {{ $dats->skill }}
                                <span class="bar-skill a" style="width: {{ $dats->skill_persen }}%;"></span>
                            </li>
                            @if ($dats->skill2 == Null)
                                
                            @else
                                <li>
                                    {{ $dats->skill2 }}
                                    <span class="bar-skill a" style="width: {{ $dats->skill_persen2 }}%;"></span>
                                </li>
                            @endif
                            @if ($dats->skill3 == Null)
                                
                            @else
                                <li>
                                    {{ $dats->skill3 }}
                                    <span class="bar-skill a" style="width: {{ $dats->skill_persen3 }}%;"></span>
                                </li>
                            @endif
                        </ul>
                    </div>
                    Hobi
                    <hr>
                    <div class="isi-hobi">
                        <ul>
                            <li>
                                {{ $dats->hobi }}
                            </li>
                            @if ($dats->hobi2 == Null)
                
                            @else
                            <li>
                                {{ $dats->hobi2 }}
                            </li>
                            @endif
                            @if ($dats->hobi3 == Null)
                
                            @else
                            @endif
                             <li>
                                {{ $dats->hobi3 }}
                            </li>
                            @if ($dats->hobi4 == Null)
                
                            @else
                            <li>
                                {{ $dats->hobi4 }}
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="nama">
                Daftar Riwayat Hidup <br>
                <span>{{ $dat->nama_depan . ' ' . $dat->nama_belakang}}</span>
            </div>
            <div class="bulet" style="background-color: white; z-index: 9999;">
                <span>1</span>
                <hr>
            </div>
            <div class="tentang-saya">
                <span>tentang saya</span>
                <div class="isi-tentang">
                    {{ $dats->deksripsi }}
                </div>
            </div>
            <div class="bulet" style="margin-top: 75px; background-color: white; z-index: 9999;">
                <span>2</span>
                <hr>
            </div>
            <div class="pengalaman">
                <span>pengalaman kerja</span>
                <div class="isi-pengalaman">
                    <table>
                        <tr>
                            <th style="padding-right: 20px">{{ $dats->perusahaan}}</th>
                            <td > - {{ $dats->jabatan}}</td>
                            <td >: </td>
                            <td>{{ date('Y', strtotime($dats->mulai_kerja)) . ' - ' . date('Y', strtotime($dats->selesai_kerja)) }}</td>
                        </tr>
                        @if ($dats->perusahaan2 == Null)

                        @else
                            <tr>
                                <th style="padding-right: 20px">{{ $dats->perusahaan2}}</th>
                                <td > - {{ $dats->jabatan2}}</td>
                                <td >: </td>
                                <td>{{ date('Y', strtotime($dats->mulai_kerja2)) . ' - ' . date('Y', strtotime($dats->selesai_kerja2)) }}</td>
                            </tr>
                        @endif

                        @if ($dats->perusahaan3 == Null)
                            
                        @else
                            <tr>
                                <th style="padding-right: 20px">{{ $dats->perusahaan3}}</th>
                                <td > - {{ $dats->jabatan3}}</td>
                                <td >: </td>
                                <td>{{ date('Y', strtotime($dats->mulai_kerja3)) . ' - ' . date('Y', strtotime($dats->selesai_kerja3)) }}</td>
                            </tr>
                        @endif
                        {{-- <tr>
                            <th>Marketingasd</th>
                            <td> - CVPropose</td>
                            <td>: </td>
                            <td>2021 - 2022</td>
                        </tr>
                        <tr>
                            <th>Manager</th>
                            <td> - CVPropose</td>
                            <td>: </td>
                            <td>2022 - 2024</td>
                        </tr> --}}
                    </table>
                </div>
            </div>
            <div class="bulet" style="margin-top: 70px; background-color: white; z-index: 9999;">
                <span>3</span>
            </div>
            <div class="riwayat">
                <span>riwayat pendidikan</span>
                <div class="isi-riwayat">
                    <table>
                        <tr>
                            <th style="width: 420px;">{{ $dats->nama_instansi . ', ' . $dats->kota_instansi }}</th>
                            <td style="width: 70px;">: </td>
                            <td>{{ date('Y', strtotime($dats->mulai_belajar)) . ' - ' . date('Y', strtotime($dats->selesai_belajar)) }}</td>
                        </tr>

                        @if ($dats->nama_instansi2 == Null)
                            
                        @else
                            <tr>
                                <th style="width: 420px;">{{ $dats->nama_instansi2 . ', ' . $dats->kota_instansi2 }}</th>
                                <td style="width: 70px;">: </td>
                                <td>{{ date('Y', strtotime($dats->mulai_belajar2)) . ' - ' . date('Y', strtotime($dats->selesai_belajar2)) }}</td>
                            </tr>
                        @endif
                        @if ($dats->nama_instansi3 == Null)
                            
                        @else
                            <tr>
                                <th style="width: 420px;">{{ $dats->nama_instansi3 . ', ' . $dats->kota_instansi3 }}</th>
                                <td style="width: 70px;">: </td>
                                <td>{{ date('Y', strtotime($dats->mulai_belajar3)) . ' - ' . date('Y', strtotime($dats->selesai_belajar3)) }}</td>
                            </tr>
                        @endif
                    </table>

                </div>
            </div>
        </div>
    </section>
    <div class="foot"></div>
</body>

</html>