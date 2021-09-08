<style>* {
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

/* desktop versi */
@media (min-width: 992px) {

    #about .card p {
        color: #848484;
        font-size: 18px;
    }
}

/* #about .card:first-child:hover{
    background-color: #5A61D7;
} */

/* aboutMe */
#aboutme {
    margin-top: 100px;
    background-color: #F9F9F9;
    padding: 50px 0;
}

#aboutme .images {
    max-width: 250px;
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

    #aboutme .images {
        max-width: 350px;
    }

    #aboutme h1 {
        font-size: 40px;
        font-weight: 500;
        letter-spacing: 0.035em;
    }

    #aboutme h3 {
        font-size: 24px;
    }

    #aboutme p {
        font-size: 18px;
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
    font-size: 16px;
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
    #howto .card p {
        color: #848484;
        font-size: 18px;
    }
}

/* template */
#template {
    margin-top: 70px;
    /* margin-bottom: 100px; */
}

#template .text h1 {
    font-size: 25px;
}
#template .text p{
    font-size: 16px;
    font-weight: 300;
    color: #ADADAD;
    /* margin-bottom: 50px; */
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
    background-color: #5A61D7;
}


footer h5 {
    font-weight: 500;
    font-size: 18px;
    color: #ffffff;
}

footer a {
    text-decoration: none;
    color: #ffffff;
    font-size: 14px;
    font-weight: 300;
}

@media (min-width: 992px) {
    footer h5 {
        font-weight: 500;
        font-size: 22px;
        color: #ffffff;
    }

    footer a {
        text-decoration: none;
        color: #ffffff;
        font-size: 16px;
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

/* breadcrumb */
.breadcrumb .bulet1 {
    background-color: #5A61D7;
    border-radius: 50%;
    height: 50px;
    width: 50px;
}

.breadcrumb .bulet1 i {
    padding: 15px 6px;
}

.breadcrumb .bulet2 {
    background-color: #5A61D7;
    border-radius: 50%;
    height: 50px;
    width: 50px;
}

.breadcrumb .bulet2 i {
    padding: 15px 7px;
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

.container-frame {
    position: relative;
    overflow: hidden;
    padding-top: 56.25%;
}

.rs-frame {
    position: absolute;
    top: 0;
    left: 0;
    width: 50%;
    height: 50%;
    border: 0;
}

.template:hover {
    border: 3px solid rgb(112, 112, 112);
}

/* template-choose */
#template-choose {
    margin-top: 100px;
    /* margin-bottom: 100px; */
}

#template-choose h1 {
    font-size: 25px;
}

#template-choose .card {
    margin-bottom: 30px;
    border: none;
    background-color: #ffffff;
    /* padding-bottom: 20px; */
}

#template-choose .card img {
    height: 200px;
    /* width: 150px; */
    box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.25);
    margin: auto;
    /* padding-top: 30px; */

}
.btn-pilih {
    background-color: #5A61D7;
    color: #ffffff;
    font-size: 16px;
    /* height: 30px; */
    font-weight: bold;
    border-radius: 0 0 5px 5px;
}

.btn-pilih:hover {
    background-color: rgba(126, 132, 252, 0.863);
    color: #ffffff;
}
@media (min-width: 992px) {
    #template-choose .text h1 {
        font-size: 40px;
    }

    #template-choose .text p {
        font-size: 22px;
        font-weight: 300;
        color: #ADADAD;
    }
}
/* checkout */
#checkout {
    margin-top: 100px;
    /* margin-bottom: 100px; */
}

#checkout h1 {
    font-size: 25px;
}

#checkout .text p {
    font-size: 18px;
    font-weight: 300;
    color: #ADADAD;
}

#checkout .foto {
    width: 100%;
    border-radius: 10px;
}

#checkout .foto img {
    max-height: 300px;
}

#checkout .foto li {
    font-size: 18px;
    /* font-weight: 5   00; */
}

@media (min-width: 992px) {
    #checkout .text h1 {
        font-size: 40px;
    }

    #checkout .text p {
        font-size: 22px;
        font-weight: 300;
        color: #ADADAD;
    }

    #checkout .foto {
        width: 65%;
    }
}

/* bagian homepage.about */
/* home */
#home{
    padding-top: 300px;
    background-image: url('images/about/bg.jpg');
    background-size: cover;
    height: 650px;
}

/* tentang kami */
#tentang-kami{
    margin-top: 100px;
    /* box-sizing: border-box; */
}
#tentang-kami .card{
    /* border-radius: 30px; */
    /* padding: 30px 20px ; */
    border: none;
}

#tentang-kami .card h2{
    /* font-family: 'Times New Roman',
    Times,
    serif; */
    font-weight: bold;
}
#tentang-kami .card p{
    font-size: 16px;
    font-weight: 300;
    color: #848484;
     text-align: justify;
     text-indent: 50px;
}
@media (min-width: 992px) {
    #tentang-kami .card {
        width: 75%;
    }
}

/* keterangan-kami */
#keterangan-kami{
    margin-top: 100px;
}
#keterangan-kami h4 {
    letter-spacing:0.15em ;
}
#keterangan-kami p {
    font-size: 16px;
    font-weight: 300;
    color: #848484;
}

/* team */
#team{
    margin-top: 70px;
}
#team .card{
    margin-top: 50px;
    padding: 10px 0;
    border-radius: 20px;
    /* border: 1px solid; */
}
#team .card img{
    height: 200px;
    display: block;
    margin-left: auto;
    margin-right: auto;
    /* width: 50%; */
    margin-bottom: 10px;
}
#team .card p {
    font-size: 14px;
    font-weight: 300;
    color: #848484;
}
#team .card p span {
    font-size: 14px;
    font-weight: 300;
    color: #414141;
}
input:active{
    /* outline: none !important;
    border: grey !important; */
    border-color: grey;
    outline-color: grey;
    box-shadow: none !important;
}
input:focus{
    /* outline: none !important;
    border: grey !important; */
    border-color: grey;
    outline-color: grey;
    box-shadow: none !important;
}
select:active{
    /* outline: none !important;
    border: grey !important; */
    box-shadow: none !important;
}
select:focus{
    /* outline: none !important;
    border: grey !important; */
    box-shadow: none !important;
}
textarea:active{
    /* outline: none !important;
    border: grey !important; */
    box-shadow: none !important;
}
textarea:focus{
    /* outline: none !important;
    border: grey !important; */
    box-shadow: none !important;
}
</style>
