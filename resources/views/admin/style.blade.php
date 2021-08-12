<style>
    * {
        font-family: 'Roboto', sans-serif;
    }

    /* navbar */
    nav .navbar-brand {
        font-weight: bold;
        font-size: 32px;

    }

    nav .navbar-nav {
        margin-right: 100px;
        font-size: 16px;
        color: #5A61D7;
    }

    .btn-create {
        background-color: #5A61D7;
        color: #ffffff;
        font-size: 16px;
        /* height: 30px; */
        font-weight: bold;
        border-radius: 10px;
    }

    .btn-create:hover {
        background-color: rgba(126, 132, 252, 0.966);
        color: #ffffff;
    }

    /* header */
    header {
        background-color: #5A61D7;
        background-size: cover;
        padding-bottom: 50px;
        padding-top: 200px;
    }

    header h1 {

        font-size: 52px;
        font-weight: 700;
        line-height: 70px;
    }

    header p {
        font-size: 25px;
        letter-spacing: 0.17em;
    }

    header .images img {
        max-width: 0px;
    }

    .btn-mulai {
        background-color: #ffffff;
        color: #5A61D7;
        font-size: 16px;
        /* height: 30px; */
        font-weight: bold;
        border-radius: 10px;

    }

    .btn-mulai:hover {
        background-color: #ffffff;
        color: rgba(126, 132, 252, 0.966);
        font-size: 16px;
        /* height: 30px; */
        font-weight: bold;
        border-radius: 10px;
    }

    @media (min-width: 992px) {
        header h1 {

            font-size: 62px;
            font-weight: 700;
            line-height: 70px;
        }

        header p {
            font-size: 30px;
            letter-spacing: 0.17em;
        }

        header .images img {
            max-width: 400px;
        }
    }

    /* main */
    /* about */
    #about {
        margin-top: 50px;
    }

    #about .card {
        margin-bottom: 30px;
        border: none;
        box-shadow: 2px 4px 20px rgba(0, 0, 0, 0.25);
        padding-top: 40px;
        height: 350px;

    }

    #about .card .gambar1 {
        max-width: 110px;
    }

    #about .card .gambar2 {
        max-width: 110px;
    }

    #about .card .gambar3 {
        max-width: 110px;
    }

    #about .card h3 {
        font-size: 22px;
    }

    #about .card p {
        color: #848484;
        font-size: 16px;
    }

    /* #about .card:first-child:hover{
    background-color: #5A61D7;
} */

    /* aboutMe */
    #aboutme {
        margin-top: 100px;
        background-color: #F9F9F9;
    }

    #aboutme .images {
        max-width: 360px;
    }

    #aboutme h1 {
        font-size: 25px;
        font-weight: 500;
        color: #0A1931;
    }

    #aboutme h3 {
        font-size: 18px;
        color: #0A1931;
    }

    #aboutme p {
        color: #888;
        font-weight: 300;
        font-size: 16px;
    }

    /* desktop versi */
    @media (min-width: 992px) {
        #aboutme h1 {
            font-size: 40px;
            font-weight: 500;
            letter-spacing: 0.035em;
        }

        #aboutme h3 {
            font-size: 28px;
        }

        #aboutme p {
            font-size: 20px;
        }
    }

    /* howto */
    #howto {
        margin-top: 100px;
    }

    #howto .text h1 {
        font-size: 25px;
    }

    #howto .text p {
        font-size: 16px;
        font-weight: 300;
        color: #ADADAD;
        margin-bottom: 50px;
    }

    #howto .card {

        margin-bottom: 30px;
        border: none;
        box-shadow: 2px 4px 20px rgba(0, 0, 0, 0.25);
        padding-top: 30px;
        /* height: 300px; */
        padding-bottom: 30px;
    }

    #howto .card .gambar1 {
        max-width: 130px;
    }

    #howto .card .gambar2 {
        max-width: 130px;
    }

    #howto .card .gambar3 {
        max-width: 130px;
    }

    #howto .card h3 {
        font-size: 25px;
    }

    #howto .card p {
        color: #848484;
        font-size: 18px;
    }

    @media (min-width: 992px) {
        #howto .text h1 {
            font-size: 40px;
        }

        #howto .text p {
            font-size: 22px;
            font-weight: 300;
            color: #ADADAD;
        }
    }

    /* template */
    #template {
        margin-top: 70px;
        /* margin-bottom: 100px; */
    }

    #template h1 {
        font-size: 25px;
    }

    #template .card {
        margin-bottom: 30px;
        border: none;
        background-color: #fff8f8;
    }

    #template .card img {
        height: 350px;
        padding-top: 30px;
    }

    @media (min-width: 992px) {
        #template .text h1 {
            font-size: 40px;
        }

        #template .text p {
            font-size: 22px;
            font-weight: 300;
            color: #ADADAD;
        }
    }

    /* penutup */
    #penutup {
        margin-top: 70px;
    }

    #penutup .text {
        background-color: #5A61D7;
    }

    #penutup .text h1 {
        font-size: 25px;
    }

    #penutup .text p {
        font-size: 16px;
        font-weight: 300;


    }

    @media (min-width: 992px) {
        #penutup .text h1 {
            font-size: 40px;
        }

        #penutup .text p {
            font-size: 22px;
            font-weight: 300;

        }
    }

    /* FOOTER */
    footer {
        margin-top: 100px;
        /* background-color: #F7F7F7; */
    }

    footer h5 {
        font-weight: 500;
        font-size: 22px;
        color: #5A61D7;
    }

    footer a {
        text-decoration: none;
        color: #5A61D7;
        font-size: 16px;
        font-weight: 300;
    }

    @media (min-width: 992px) {
        footer h5 {
            font-weight: 500;
            font-size: 28px;
            color: #5A61D7;
        }

        footer a {
            text-decoration: none;
            color: #5A61D7;
            font-size: 18px;
            font-weight: 300;
        }

        footer .text {
            padding-top: 35px;
        }
    }

    /* input form 1 */
    #input-one {
        margin-top: 100px;
    }

    #input-one .card {
        /* border: 1px solid black; */
        padding: 30px;
        width: 100%;
    }

    #input-one .card label {
        font-size: 16px;
    }

    #input-one .jarak {
        width: 100%;
    }

    .btn-merah {
        background-color: #FF2626;
        color: #ffffff;
        font-size: 16px;
        /* height: 30px; */
        font-weight: bold;
        border-radius: 10px;
    }

    .btn-merah:hover {
        background-color: #ff2626c5;
        color: #ffffff;
    }

    @media (min-width: 992px) {
        #input-one .card {
            width: 75%;
            margin: auto;
        }

        #input-one .jarak {
            width: 88%;
        }
    }

    .breadcrumb .bulet1 {
    background-color: #5A61D7;
    border-radius: 50%;
    height: 50px;
    width: 50px;
}

.breadcrumb .bulet1 i {
    padding: 15px 5px;
}

.breadcrumb .bulet2 {
    background-color: #5A61D7;
    border-radius: 50%;
    height: 50px;
    width: 50px;
}

.breadcrumb .bulet2 i {
    padding: 15px 6px;
}

.breadcrumb .bulet3 {
    background-color: #5A61D7;
    border-radius: 50%;
    height: 50px;
    width: 50px;
}

.breadcrumb .bulet3 i {
    padding: 16px 6px;
}

.container-frame{
    position:relative;
    overflow:hidden;
    padding-top:56.25%;
}
.rs-frame{
    position:absolute;
    top:0;
    left:0;
    width:50%;
    height:50%;
    border:0;
}

</style>
