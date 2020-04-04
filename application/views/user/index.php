<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url("assets/css/style2.css") ?>">
  </head>
  <body>
    <section class="banner-one">
        <div class="px-lg-5 px-sm-4 px-3 mb-4">
            <nav class="navbar navbar-expand-lg navbar-dark mr-auto px-0 pt-5">
                <h3 class="text-light">Rival Price</h3>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav ml-auto mt-2 px-0 ">
                        <li class="nav-item mx-3 active">
                            <a class="nav-link" href="#">Beranda <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item mx-3 text-white">
                            <a class="nav-link" href="#">Produk Lelang</a>
                        </li>
                        <li class="nav-item mx-3 text-white">
                            <a class="nav-link" href="#">Pemenang Lelang</a>
                        </li>
                        <li class="nav-item mx-3 text-white">
                            <a class="nav-link" href="#"> <i class="fa fa-sign-in mr-1"></i> Masuk</a>
                        </li>
                        <li class="nav-item ml-3 text-white">
                            <a class="nav-link" href="#"> <i class="fa fa-edit mr-1"></i> Daftar</a>
                        </li>
                        <li class="nav-item ml-3 text-white">
                            <i class="nav-link mt-1 fa fa-search"></i>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>


        <div class="row">
            <!-- Untuk Tampilan Lg -->
            <div class="col-lg-5 d-none d-lg-block">
                <img src="<?= base_url('assets/') ?>img/image-4.png" class="animasi-img-1 position-absolute" alt="">
                <div class="banner-content ml-5 position-absolute">
                    <h1 >Selamat datang di Rival Price</h1>
                    <p class="mt-4">Dapatkan barang berkualitas dengan harga terjangaku dengan mempersaingkan harga secara adil.</p>
                    <button class="btn btn-lg text-white px-5 mt-5 rounded-pill" style="background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);">
                        SKUY <i class="pl-1 fa fa-arrow-right"></i>
                    </button>
                </div>
            </div>
            <div class="col-lg-7 col-md-9 ml-auto col-sm-12" style="overflow-x: hidden;">
                <img src="<?= base_url('assets/') ?>img/image-3-mod.png" class="animasi-img-2 w-100" alt="">
            </div>
            <!-- Untuk Tampilan selain lg -->
            <div class="col-sm-12 col-md-8 d-block d-lg-none">
                <img src="<?= base_url('assets/') ?>img/image-4.png" class="animasi-img-1 position-absolute" alt="">
                <div class="banner-content mx-4 my-5">
                    <h1 >Selamat datang di Rival Price</h1>
                    <p class="mt-4" style="font-size:1rem">Dapatkan barang berkualitas dengan harga terjangaku dengan mempersaingkan harga secara adil.</p>
                    <button class="btn btn-lg text-white px-5 mt-3 rounded-pill" style="background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);">
                        SKUY <i class="pl-1 fa fa-arrow-right"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="container mb-5 mt-5">
            
            <h3 class="pb-5" style="text-shadow: 3px 3px gray;color: #F3F4FA;font-weight:700;font-size:2.5rem;">Lelang Segera Berakhir : </h3>
            <div class="row">
                <div id="ProdukCarouselUp" class="carousel slide w-100" data-ride="carousel">
                    <div class="carousel-inner w-100" role="listbox" id='segera_berakhir'>
                        
                    </div>
                    <a style='z-index:150' class="carousel-control-prev w-auto" href="#ProdukCarouselUp" role="button" data-slide="prev">
                        <i class="fa fa-2x fa-chevron-left py-2 px-3 rounded-circle" style='background-image: linear-gradient(315deg, #2a2a72 0%, #009ffd 74%);'></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a style='z-index:150' class="carousel-control-next w-auto" href="#ProdukCarouselUp" role="button" data-slide="next">
                        <i class="fa fa-2x fa-chevron-right py-2 px-3 rounded-circle" style='background-image: linear-gradient(315deg, #2a2a72 0%, #009ffd 74%);'></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

        </div>
        <div class="">
            <h2 class="text-center py-5" style="font-weight:700;font-size:40px;">
                Barang yang mungkin <br> anda sukai
            </h2>
            <!--  -->

            <!--  -->

            <!--  -->

            <!-- class="btn btn-lg btn-primary mt-1 mx-1 px-1" -->
            <!-- class="text-white btn btn-lg mt-1 mx-1 px-1" -->

            <!-- <div class="d-flex justify-content-center pb-5" id="myTab" role="tablist">
                <button id="rekomendasi-tab" data-toggle="tab" href="#rekomendasi" role="tab" aria-controls="rekomendasi" aria-selected="true"  style="width:160px;font-size:18px;border-radius: 20px;font-weight:600;background-image: linear-gradient(315deg, #17009F 0%, #078BE6 95%)">Rekomendasi</button>
                <button id="populer-tab" data-toggle="tab" href="#populer" role="tab" aria-controls="populer" aria-selected="false" style="width:160px;font-size:18px;border-radius: 20px;font-weight:600;background-color: #049BE1;">Populer</button>
                <button id="terbaru-tab" data-toggle="tab" href="#terbaru" role="tab" aria-controls="terbaru" aria-selected="false" style="width:160px;font-size:18px;border-radius: 20px;font-weight:600;background-color: #049BE1;">Terbaru</button>
            </div> -->
            <nav>
                <div class="nav nav-tabs d-flex justify-content-center pb-5" id="myTab" role="tablist">
                    <a onclick="$('#populer-tab').removeClass('btn-aktif');$('#populer-tab').addClass('btn-default');$('#terbaru-tab').removeClass('btn-aktif');$('#terbaru-tab').addClass('btn-default');$(this).addClass('btn-aktif');" class="my-2 nav-item nav-link text-white btn btn-lg mt-1 mx-1 px-1 btn-aktif" id="rekomendasi-tab" data-toggle="tab" href="#rekomendasi" role="tab" style="border-radius: 20px;" aria-controls="rekomendasi" aria-selected="true" >Rekomendasi</a>
                    <a onclick="$('#rekomendasi-tab').removeClass('btn-aktif');$('#rekomendasi-tab').addClass('btn-default');$('#terbaru-tab').removeClass('btn-aktif');$('#terbaru-tab').addClass('btn-default');$(this).addClass('btn-aktif');" class="my-2 nav-item nav-link text-white btn btn-lg mt-1 mx-1 px-1 btn-default" id="populer-tab" data-toggle="tab" href="#populer" role="tab" style="border-radius: 20px;" aria-controls="populer" aria-selected="false">Populer</a>
                    <a onclick="$('#rekomendasi-tab').removeClass('btn-aktif');$('#rekomendasi-tab').addClass('btn-default');$('#populer-tab').removeClass('btn-aktif');$('#populer-tab').addClass('btn-default');$(this).addClass('btn-aktif');" class="my-2 nav-item nav-link text-white btn btn-lg mt-1 mx-1 px-1 btn-default" id="terbaru-tab" data-toggle="tab" href="#terbaru" role="tab" style="border-radius: 20px;" aria-controls="terbaru" aria-selected="false">Terbaru</a>
                </div>
            </nav>
            <!-- CEPAT  -->
            <div class="py-5" style="background-image: linear-gradient(315deg, #17009F 0%, #078BE6 95%);border-top:5px solid #FA8C42">
            <div class="tab-content container" id="myTabContent">
                <div class="tab-pane fade show active" id="rekomendasi" role="tabpanel" aria-labelledby="rekomendasi-tab">
                    <h3 class="pb-5 text-center" style="text-shadow: 3px 3px gray;color: #F3F4FA;font-weight:700;font-size:2.5rem;">Rekomendasi </h3>
                    <div class="row">
                            <div id="carouselRekomendasi" class="carousel slide w-100" data-ride="carousel">
                                <div class="carousel-inner w-100" role="listbox" id="rekomendasi-html">
                                    <div class="carousel-item active">
                                        <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7 col-10 d-flex align-items-stretch">
                                            <div class="card w-100 produk h-100" style="border-radius: 25px;background-image: linear-gradient(315deg, #2a2a72 0%, #009ffd 74%);">
                                                <img class="card-image-top w-100" src="<?= base_url('assets/') ?>img/tv.jpg" alt="" style="border-top-left-radius: 25px;border-top-right-radius: 25px;border-bottom:5px solid #FA8C42">
                                                <div class="card-body text-white">
                                                    <h6 class="card-title">Post navigation Redragon M601 CENTROPHORUS-2000 DPI Gaming Mouse for PC</h6>
                                                                <p class="card-text d-flex justify-content-between mt-4">
                                                                <span class="text-left" style="font-size: 12px;">
                                                                    0 Pelelang
                                                                </span>
                                                                <span class="ml-auto">
                                                                    Rp 5.000.000
                                                                </span>
                                                                </p>
                                                </div>
                                                <div class="card-footer text-white">
                                                            <div class="d-flex text-center mt-auto">
                                                                <div style="width: 50px;font-size:10px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);" class="p-2 rounded-circle mx-1" id="hari">
                                                                    2
                                                                    <br>
                                                                    Hari
                                                                </div>
                                                                <div style="width: 50px;font-size:10px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);" class="p-2 rounded-circle mx-1" id="jam">
                                                                    8 <br>
                                                                    jam
                                                                </div>
                                                                <div style="width: 50px;font-size:10px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);" class="p-2 rounded-circle mx-1" id="menit">
                                                                    6 <br>
                                                                    menit
                                                                </div>
                                                                <div style="width: 50px;font-size:10px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);" class="p-2 rounded-circle mx-1" id="detik">
                                                                    23 <br>
                                                                    detik
                                                                </div>
                                                            </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7 col-10 d-flex align-items-stretch">
                                            <div class="card w-100 produk h-100" style="border-radius: 25px;background-image: linear-gradient(315deg, #2a2a72 0%, #009ffd 74%);">
                                                <img class="card-image-top w-100" src="<?= base_url('assets/') ?>img/tv.jpg" alt="" style="border-top-left-radius: 25px;border-top-right-radius: 25px;border-bottom:5px solid #FA8C42">
                                                <div class="card-body text-white">
                                                    <h6 class="card-title">Post navigation Redragon M601 CENTROPHORUS-2000 DPI Gaming Mouse for PC</h6>
                                                                <p class="card-text d-flex justify-content-between mt-4">
                                                                <span class="text-left" style="font-size: 12px;">
                                                                    0 Pelelang
                                                                </span>
                                                                <span class="ml-auto">
                                                                    Rp 5.000.000
                                                                </span>
                                                                </p>
                                                </div>
                                                <div class="card-footer text-white">
                                                            <div class="d-flex text-center mt-auto">
                                                                <div style="width: 50px;font-size:10px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);" class="p-2 rounded-circle mx-1" id="hari">
                                                                    2
                                                                    <br>
                                                                    Hari
                                                                </div>
                                                                <div style="width: 50px;font-size:10px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);" class="p-2 rounded-circle mx-1" id="jam">
                                                                    8 <br>
                                                                    jam
                                                                </div>
                                                                <div style="width: 50px;font-size:10px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);" class="p-2 rounded-circle mx-1" id="menit">
                                                                    6 <br>
                                                                    menit
                                                                </div>
                                                                <div style="width: 50px;font-size:10px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);" class="p-2 rounded-circle mx-1" id="detik">
                                                                    23 <br>
                                                                    detik
                                                                </div>
                                                            </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7 col-10 d-flex align-items-stretch">
                                            <div class="card w-100 produk h-100" style="border-radius: 25px;background-image: linear-gradient(315deg, #2a2a72 0%, #009ffd 74%);">
                                                <img class="card-image-top w-100" src="<?= base_url('assets/') ?>img/tv.jpg" alt="" style="border-top-left-radius: 25px;border-top-right-radius: 25px;border-bottom:5px solid #FA8C42">
                                                <div class="card-body text-white">
                                                    <h6 class="card-title">Post navigation Redragon M601 CENTROPHORUS-2000 DPI Gaming Mouse for PC</h6>
                                                                <p class="card-text d-flex justify-content-between mt-4">
                                                                <span class="text-left" style="font-size: 12px;">
                                                                    0 Pelelang
                                                                </span>
                                                                <span class="ml-auto">
                                                                    Rp 5.000.000
                                                                </span>
                                                                </p>
                                                </div>
                                                <div class="card-footer text-white">
                                                            <div class="d-flex text-center mt-auto">
                                                                <div style="width: 50px;font-size:10px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);" class="p-2 rounded-circle mx-1" id="hari">
                                                                    2
                                                                    <br>
                                                                    Hari
                                                                </div>
                                                                <div style="width: 50px;font-size:10px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);" class="p-2 rounded-circle mx-1" id="jam">
                                                                    8 <br>
                                                                    jam
                                                                </div>
                                                                <div style="width: 50px;font-size:10px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);" class="p-2 rounded-circle mx-1" id="menit">
                                                                    6 <br>
                                                                    menit
                                                                </div>
                                                                <div style="width: 50px;font-size:10px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);" class="p-2 rounded-circle mx-1" id="detik">
                                                                    23 <br>
                                                                    detik
                                                                </div>
                                                            </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7 col-10 d-flex align-items-stretch">
                                            <div class="card w-100 produk h-100" style="border-radius: 25px;background-image: linear-gradient(315deg, #2a2a72 0%, #009ffd 74%);">
                                                <img class="card-image-top w-100" src="<?= base_url('assets/') ?>img/tv.jpg" alt="" style="border-top-left-radius: 25px;border-top-right-radius: 25px;border-bottom:5px solid #FA8C42">
                                                <div class="card-body text-white">
                                                    <h6 class="card-title">Post navigation Redragon M601 CENTROPHORUS-2000 DPI Gaming Mouse for PC</h6>
                                                                <p class="card-text d-flex justify-content-between mt-4">
                                                                <span class="text-left" style="font-size: 12px;">
                                                                    0 Pelelang
                                                                </span>
                                                                <span class="ml-auto">
                                                                    Rp 5.000.000
                                                                </span>
                                                                </p>
                                                </div>
                                                <div class="card-footer text-white">
                                                            <div class="d-flex text-center mt-auto">
                                                                <div style="width: 50px;font-size:10px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);" class="p-2 rounded-circle mx-1" id="hari">
                                                                    2
                                                                    <br>
                                                                    Hari
                                                                </div>
                                                                <div style="width: 50px;font-size:10px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);" class="p-2 rounded-circle mx-1" id="jam">
                                                                    8 <br>
                                                                    jam
                                                                </div>
                                                                <div style="width: 50px;font-size:10px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);" class="p-2 rounded-circle mx-1" id="menit">
                                                                    6 <br>
                                                                    menit
                                                                </div>
                                                                <div style="width: 50px;font-size:10px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);" class="p-2 rounded-circle mx-1" id="detik">
                                                                    23 <br>
                                                                    detik
                                                                </div>
                                                            </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7 col-10 d-flex align-items-stretch">
                                            <div class="card w-100 produk h-100" style="border-radius: 25px;background-image: linear-gradient(315deg, #2a2a72 0%, #009ffd 74%);">
                                                <img class="card-image-top w-100" src="<?= base_url('assets/') ?>img/tv.jpg" alt="" style="border-top-left-radius: 25px;border-top-right-radius: 25px;border-bottom:5px solid #FA8C42">
                                                <div class="card-body text-white">
                                                    <h6 class="card-title">Post navigation Redragon M601 CENTROPHORUS-2000 DPI Gaming Mouse for PC</h6>
                                                                <p class="card-text d-flex justify-content-between mt-4">
                                                                <span class="text-left" style="font-size: 12px;">
                                                                    0 Pelelang
                                                                </span>
                                                                <span class="ml-auto">
                                                                    Rp 5.000.000
                                                                </span>
                                                                </p>
                                                </div>
                                                <div class="card-footer text-white">
                                                            <div class="d-flex text-center mt-auto">
                                                                <div style="width: 50px;font-size:10px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);" class="p-2 rounded-circle mx-1" id="hari">
                                                                    2
                                                                    <br>
                                                                    Hari
                                                                </div>
                                                                <div style="width: 50px;font-size:10px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);" class="p-2 rounded-circle mx-1" id="jam">
                                                                    8 <br>
                                                                    jam
                                                                </div>
                                                                <div style="width: 50px;font-size:10px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);" class="p-2 rounded-circle mx-1" id="menit">
                                                                    6 <br>
                                                                    menit
                                                                </div>
                                                                <div style="width: 50px;font-size:10px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);" class="p-2 rounded-circle mx-1" id="detik">
                                                                    23 <br>
                                                                    detik
                                                                </div>
                                                            </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7 col-10 d-flex align-items-stretch">
                                            <div class="card w-100 produk h-100" style="border-radius: 25px;background-image: linear-gradient(315deg, #2a2a72 0%, #009ffd 74%);">
                                                <img class="card-image-top w-100" src="<?= base_url('assets/') ?>img/tv.jpg" alt="" style="border-top-left-radius: 25px;border-top-right-radius: 25px;border-bottom:5px solid #FA8C42">
                                                <div class="card-body text-white">
                                                    <h6 class="card-title">Post navigation Redragon M601 CENTROPHORUS-2000 DPI Gaming Mouse for PC</h6>
                                                                <p class="card-text d-flex justify-content-between mt-4">
                                                                <span class="text-left" style="font-size: 12px;">
                                                                    0 Pelelang
                                                                </span>
                                                                <span class="ml-auto">
                                                                    Rp 5.000.000
                                                                </span>
                                                                </p>
                                                </div>
                                                <div class="card-footer text-white">
                                                            <div class="d-flex text-center mt-auto">
                                                                <div style="width: 50px;font-size:10px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);" class="p-2 rounded-circle mx-1" id="hari">
                                                                    2
                                                                    <br>
                                                                    Hari
                                                                </div>
                                                                <div style="width: 50px;font-size:10px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);" class="p-2 rounded-circle mx-1" id="jam">
                                                                    8 <br>
                                                                    jam
                                                                </div>
                                                                <div style="width: 50px;font-size:10px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);" class="p-2 rounded-circle mx-1" id="menit">
                                                                    6 <br>
                                                                    menit
                                                                </div>
                                                                <div style="width: 50px;font-size:10px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);" class="p-2 rounded-circle mx-1" id="detik">
                                                                    23 <br>
                                                                    detik
                                                                </div>
                                                            </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev w-auto" href="#carouselRekomendasi" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next w-auto" href="#carouselRekomendasi" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                <div class="tab-pane fade" id="populer" role="tabpanel" aria-labelledby="populer-tab">
                <h3 class="pb-5 text-center" style="text-shadow: 3px 3px gray;color: #F3F4FA;font-weight:700;font-size:2.5rem;">Populer </h3>
                <div class="row">
                        <div id="carouselPopuler" class="carousel slide w-100" data-ride="carousel">
                            <div class="carousel-inner w-100" role="listbox">
                                <div class="carousel-item active">
                                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7 col-10 d-flex align-items-stretch">
                                        <div class="card w-100 produk h-100" style="border-radius: 25px;background-image: linear-gradient(315deg, #2a2a72 0%, #009ffd 74%);">
                                            <img class="card-image-top w-100" src="<?= base_url('assets/') ?>img/tv.jpg" alt="" style="border-top-left-radius: 25px;border-top-right-radius: 25px;border-bottom:5px solid #FA8C42">
                                            <div class="card-body text-white">
                                                <h6 class="card-title">Post navigation Redragon M601 CENTROPHORUS-2000 DPI Gaming Mouse for PC</h6>
                                                            <p class="card-text d-flex justify-content-between mt-4">
                                                            <span class="text-left" style="font-size: 12px;">
                                                                0 Pelelang
                                                            </span>
                                                            <span class="ml-auto">
                                                                Rp 5.000.000
                                                            </span>
                                                            </p>
                                            </div>
                                            <div class="card-footer text-white">
                                                        <div class="d-flex text-center mt-auto">
                                                            <div style="width: 50px;font-size:10px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);" class="p-2 rounded-circle mx-1" id="hari">
                                                                2
                                                                <br>
                                                                Hari
                                                            </div>
                                                            <div style="width: 50px;font-size:10px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);" class="p-2 rounded-circle mx-1" id="jam">
                                                                8 <br>
                                                                jam
                                                            </div>
                                                            <div style="width: 50px;font-size:10px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);" class="p-2 rounded-circle mx-1" id="menit">
                                                                6 <br>
                                                                menit
                                                            </div>
                                                            <div style="width: 50px;font-size:10px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);" class="p-2 rounded-circle mx-1" id="detik">
                                                                23 <br>
                                                                detik
                                                            </div>
                                                        </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7 col-10 d-flex align-items-stretch">
                                        <div class="card w-100 produk h-100" style="border-radius: 25px;background-image: linear-gradient(315deg, #2a2a72 0%, #009ffd 74%);">
                                            <img class="card-image-top w-100" src="<?= base_url('assets/') ?>img/tv.jpg" alt="" style="border-top-left-radius: 25px;border-top-right-radius: 25px;border-bottom:5px solid #FA8C42">
                                            <div class="card-body text-white">
                                                <h6 class="card-title">Post navigation Redragon M601 CENTROPHORUS-2000 DPI Gaming Mouse for PC</h6>
                                                            <p class="card-text d-flex justify-content-between mt-4">
                                                            <span class="text-left" style="font-size: 12px;">
                                                                0 Pelelang
                                                            </span>
                                                            <span class="ml-auto">
                                                                Rp 5.000.000
                                                            </span>
                                                            </p>
                                            </div>
                                            <div class="card-footer text-white">
                                                        <div class="d-flex text-center mt-auto">
                                                            <div style="width: 50px;font-size:10px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);" class="p-2 rounded-circle mx-1" id="hari">
                                                                2
                                                                <br>
                                                                Hari
                                                            </div>
                                                            <div style="width: 50px;font-size:10px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);" class="p-2 rounded-circle mx-1" id="jam">
                                                                8 <br>
                                                                jam
                                                            </div>
                                                            <div style="width: 50px;font-size:10px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);" class="p-2 rounded-circle mx-1" id="menit">
                                                                6 <br>
                                                                menit
                                                            </div>
                                                            <div style="width: 50px;font-size:10px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);" class="p-2 rounded-circle mx-1" id="detik">
                                                                23 <br>
                                                                detik
                                                            </div>
                                                        </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7 col-10 d-flex align-items-stretch">
                                        <div class="card w-100 produk h-100" style="border-radius: 25px;background-image: linear-gradient(315deg, #2a2a72 0%, #009ffd 74%);">
                                            <img class="card-image-top w-100" src="<?= base_url('assets/') ?>img/tv.jpg" alt="" style="border-top-left-radius: 25px;border-top-right-radius: 25px;border-bottom:5px solid #FA8C42">
                                            <div class="card-body text-white">
                                                <h6 class="card-title">Post navigation Redragon M601 CENTROPHORUS-2000 DPI Gaming Mouse for PC</h6>
                                                            <p class="card-text d-flex justify-content-between mt-4">
                                                            <span class="text-left" style="font-size: 12px;">
                                                                0 Pelelang
                                                            </span>
                                                            <span class="ml-auto">
                                                                Rp 5.000.000
                                                            </span>
                                                            </p>
                                            </div>
                                            <div class="card-footer text-white">
                                                        <div class="d-flex text-center mt-auto">
                                                            <div style="width: 50px;font-size:10px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);" class="p-2 rounded-circle mx-1" id="hari">
                                                                2
                                                                <br>
                                                                Hari
                                                            </div>
                                                            <div style="width: 50px;font-size:10px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);" class="p-2 rounded-circle mx-1" id="jam">
                                                                8 <br>
                                                                jam
                                                            </div>
                                                            <div style="width: 50px;font-size:10px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);" class="p-2 rounded-circle mx-1" id="menit">
                                                                6 <br>
                                                                menit
                                                            </div>
                                                            <div style="width: 50px;font-size:10px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);" class="p-2 rounded-circle mx-1" id="detik">
                                                                23 <br>
                                                                detik
                                                            </div>
                                                        </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7 col-10 d-flex align-items-stretch">
                                        <div class="card w-100 produk h-100" style="border-radius: 25px;background-image: linear-gradient(315deg, #2a2a72 0%, #009ffd 74%);">
                                            <img class="card-image-top w-100" src="<?= base_url('assets/') ?>img/tv.jpg" alt="" style="border-top-left-radius: 25px;border-top-right-radius: 25px;border-bottom:5px solid #FA8C42">
                                            <div class="card-body text-white">
                                                <h6 class="card-title">Post navigation Redragon M601 CENTROPHORUS-2000 DPI Gaming Mouse for PC</h6>
                                                            <p class="card-text d-flex justify-content-between mt-4">
                                                            <span class="text-left" style="font-size: 12px;">
                                                                0 Pelelang
                                                            </span>
                                                            <span class="ml-auto">
                                                                Rp 5.000.000
                                                            </span>
                                                            </p>
                                            </div>
                                            <div class="card-footer text-white">
                                                        <div class="d-flex text-center mt-auto">
                                                            <div style="width: 50px;font-size:10px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);" class="p-2 rounded-circle mx-1" id="hari">
                                                                2
                                                                <br>
                                                                Hari
                                                            </div>
                                                            <div style="width: 50px;font-size:10px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);" class="p-2 rounded-circle mx-1" id="jam">
                                                                8 <br>
                                                                jam
                                                            </div>
                                                            <div style="width: 50px;font-size:10px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);" class="p-2 rounded-circle mx-1" id="menit">
                                                                6 <br>
                                                                menit
                                                            </div>
                                                            <div style="width: 50px;font-size:10px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);" class="p-2 rounded-circle mx-1" id="detik">
                                                                23 <br>
                                                                detik
                                                            </div>
                                                        </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7 col-10 d-flex align-items-stretch">
                                        <div class="card w-100 produk h-100" style="border-radius: 25px;background-image: linear-gradient(315deg, #2a2a72 0%, #009ffd 74%);">
                                            <img class="card-image-top w-100" src="<?= base_url('assets/') ?>img/tv.jpg" alt="" style="border-top-left-radius: 25px;border-top-right-radius: 25px;border-bottom:5px solid #FA8C42">
                                            <div class="card-body text-white">
                                                <h6 class="card-title">Post navigation Redragon M601 CENTROPHORUS-2000 DPI Gaming Mouse for PC</h6>
                                                            <p class="card-text d-flex justify-content-between mt-4">
                                                            <span class="text-left" style="font-size: 12px;">
                                                                0 Pelelang
                                                            </span>
                                                            <span class="ml-auto">
                                                                Rp 5.000.000
                                                            </span>
                                                            </p>
                                            </div>
                                            <div class="card-footer text-white">
                                                        <div class="d-flex text-center mt-auto">
                                                            <div style="width: 50px;font-size:10px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);" class="p-2 rounded-circle mx-1" id="hari">
                                                                2
                                                                <br>
                                                                Hari
                                                            </div>
                                                            <div style="width: 50px;font-size:10px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);" class="p-2 rounded-circle mx-1" id="jam">
                                                                8 <br>
                                                                jam
                                                            </div>
                                                            <div style="width: 50px;font-size:10px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);" class="p-2 rounded-circle mx-1" id="menit">
                                                                6 <br>
                                                                menit
                                                            </div>
                                                            <div style="width: 50px;font-size:10px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);" class="p-2 rounded-circle mx-1" id="detik">
                                                                23 <br>
                                                                detik
                                                            </div>
                                                        </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7 col-10 d-flex align-items-stretch">
                                        <div class="card w-100 produk h-100" style="border-radius: 25px;background-image: linear-gradient(315deg, #2a2a72 0%, #009ffd 74%);">
                                            <img class="card-image-top w-100" src="<?= base_url('assets/') ?>img/tv.jpg" alt="" style="border-top-left-radius: 25px;border-top-right-radius: 25px;border-bottom:5px solid #FA8C42">
                                            <div class="card-body text-white">
                                                <h6 class="card-title">Post navigation Redragon M601 CENTROPHORUS-2000 DPI Gaming Mouse for PC</h6>
                                                            <p class="card-text d-flex justify-content-between mt-4">
                                                            <span class="text-left" style="font-size: 12px;">
                                                                0 Pelelang
                                                            </span>
                                                            <span class="ml-auto">
                                                                Rp 5.000.000
                                                            </span>
                                                            </p>
                                            </div>
                                            <div class="card-footer text-white">
                                                        <div class="d-flex text-center mt-auto">
                                                            <div style="width: 50px;font-size:10px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);" class="p-2 rounded-circle mx-1" id="hari">
                                                                2
                                                                <br>
                                                                Hari
                                                            </div>
                                                            <div style="width: 50px;font-size:10px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);" class="p-2 rounded-circle mx-1" id="jam">
                                                                8 <br>
                                                                jam
                                                            </div>
                                                            <div style="width: 50px;font-size:10px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);" class="p-2 rounded-circle mx-1" id="menit">
                                                                6 <br>
                                                                menit
                                                            </div>
                                                            <div style="width: 50px;font-size:10px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);" class="p-2 rounded-circle mx-1" id="detik">
                                                                23 <br>
                                                                detik
                                                            </div>
                                                        </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev w-auto" href="#carouselPopuler" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next w-auto" href="#carouselPopuler" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="terbaru" role="tabpanel" aria-labelledby="terbaru-tab">
                <h3 class="pb-5 text-center" style="text-shadow: 3px 3px gray;color: #F3F4FA;font-weight:700;font-size:2.5rem;">Terbaru </h3>
                <div class="row">
                        <div id="carouselTerbaru" class="carousel slide w-100" data-ride="carousel">
                            <div class="carousel-inner w-100" role="listbox">
                                <div class="carousel-item active">
                                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7 col-10 d-flex align-items-stretch">
                                        <div class="card w-100 produk h-100" style="border-radius: 25px;background-image: linear-gradient(315deg, #2a2a72 0%, #009ffd 74%);">
                                            <img class="card-image-top w-100" src="<?= base_url('assets/') ?>img/tv.jpg" alt="" style="border-top-left-radius: 25px;border-top-right-radius: 25px;border-bottom:5px solid #FA8C42">
                                            <div class="card-body text-white">
                                                <h6 class="card-title">Post navigation Redragon M601 CENTROPHORUS-2000 DPI Gaming Mouse for PC</h6>
                                                            <p class="card-text d-flex justify-content-between mt-4">
                                                            <span class="text-left" style="font-size: 12px;">
                                                                0 Pelelang
                                                            </span>
                                                            <span class="ml-auto">
                                                                Rp 5.000.000
                                                            </span>
                                                            </p>
                                            </div>
                                            <div class="card-footer text-white">
                                                        <div class="d-flex text-center mt-auto">
                                                            <div style="width: 50px;font-size:10px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);" class="p-2 rounded-circle mx-1" id="hari">
                                                                2
                                                                <br>
                                                                Hari
                                                            </div>
                                                            <div style="width: 50px;font-size:10px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);" class="p-2 rounded-circle mx-1" id="jam">
                                                                8 <br>
                                                                jam
                                                            </div>
                                                            <div style="width: 50px;font-size:10px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);" class="p-2 rounded-circle mx-1" id="menit">
                                                                6 <br>
                                                                menit
                                                            </div>
                                                            <div style="width: 50px;font-size:10px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);" class="p-2 rounded-circle mx-1" id="detik">
                                                                23 <br>
                                                                detik
                                                            </div>
                                                        </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7 col-10 d-flex align-items-stretch">
                                        <div class="card w-100 produk h-100" style="border-radius: 25px;background-image: linear-gradient(315deg, #2a2a72 0%, #009ffd 74%);">
                                            <img class="card-image-top w-100" src="<?= base_url('assets/') ?>img/tv.jpg" alt="" style="border-top-left-radius: 25px;border-top-right-radius: 25px;border-bottom:5px solid #FA8C42">
                                            <div class="card-body text-white">
                                                <h6 class="card-title">Post navigation Redragon M601 CENTROPHORUS-2000 DPI Gaming Mouse for PC</h6>
                                                            <p class="card-text d-flex justify-content-between mt-4">
                                                            <span class="text-left" style="font-size: 12px;">
                                                                0 Pelelang
                                                            </span>
                                                            <span class="ml-auto">
                                                                Rp 5.000.000
                                                            </span>
                                                            </p>
                                            </div>
                                            <div class="card-footer text-white">
                                                        <div class="d-flex text-center mt-auto">
                                                            <div style="width: 50px;font-size:10px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);" class="p-2 rounded-circle mx-1" id="hari">
                                                                2
                                                                <br>
                                                                Hari
                                                            </div>
                                                            <div style="width: 50px;font-size:10px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);" class="p-2 rounded-circle mx-1" id="jam">
                                                                8 <br>
                                                                jam
                                                            </div>
                                                            <div style="width: 50px;font-size:10px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);" class="p-2 rounded-circle mx-1" id="menit">
                                                                6 <br>
                                                                menit
                                                            </div>
                                                            <div style="width: 50px;font-size:10px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);" class="p-2 rounded-circle mx-1" id="detik">
                                                                23 <br>
                                                                detik
                                                            </div>
                                                        </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7 col-10 d-flex align-items-stretch">
                                        <div class="card w-100 produk h-100" style="border-radius: 25px;background-image: linear-gradient(315deg, #2a2a72 0%, #009ffd 74%);">
                                            <img class="card-image-top w-100" src="<?= base_url('assets/') ?>img/tv.jpg" alt="" style="border-top-left-radius: 25px;border-top-right-radius: 25px;border-bottom:5px solid #FA8C42">
                                            <div class="card-body text-white">
                                                <h6 class="card-title">Post navigation Redragon M601 CENTROPHORUS-2000 DPI Gaming Mouse for PC</h6>
                                                            <p class="card-text d-flex justify-content-between mt-4">
                                                            <span class="text-left" style="font-size: 12px;">
                                                                0 Pelelang
                                                            </span>
                                                            <span class="ml-auto">
                                                                Rp 5.000.000
                                                            </span>
                                                            </p>
                                            </div>
                                            <div class="card-footer text-white">
                                                        <div class="d-flex text-center mt-auto">
                                                            <div style="width: 50px;font-size:10px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);" class="p-2 rounded-circle mx-1" id="hari">
                                                                2
                                                                <br>
                                                                Hari
                                                            </div>
                                                            <div style="width: 50px;font-size:10px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);" class="p-2 rounded-circle mx-1" id="jam">
                                                                8 <br>
                                                                jam
                                                            </div>
                                                            <div style="width: 50px;font-size:10px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);" class="p-2 rounded-circle mx-1" id="menit">
                                                                6 <br>
                                                                menit
                                                            </div>
                                                            <div style="width: 50px;font-size:10px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);" class="p-2 rounded-circle mx-1" id="detik">
                                                                23 <br>
                                                                detik
                                                            </div>
                                                        </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7 col-10 d-flex align-items-stretch">
                                        <div class="card w-100 produk h-100" style="border-radius: 25px;background-image: linear-gradient(315deg, #2a2a72 0%, #009ffd 74%);">
                                            <img class="card-image-top w-100" src="<?= base_url('assets/') ?>img/tv.jpg" alt="" style="border-top-left-radius: 25px;border-top-right-radius: 25px;border-bottom:5px solid #FA8C42">
                                            <div class="card-body text-white">
                                                <h6 class="card-title">Post navigation Redragon M601 CENTROPHORUS-2000 DPI Gaming Mouse for PC</h6>
                                                            <p class="card-text d-flex justify-content-between mt-4">
                                                            <span class="text-left" style="font-size: 12px;">
                                                                0 Pelelang
                                                            </span>
                                                            <span class="ml-auto">
                                                                Rp 5.000.000
                                                            </span>
                                                            </p>
                                            </div>
                                            <div class="card-footer text-white">
                                                        <div class="d-flex text-center mt-auto">
                                                            <div style="width: 50px;font-size:10px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);" class="p-2 rounded-circle mx-1" id="hari">
                                                                2
                                                                <br>
                                                                Hari
                                                            </div>
                                                            <div style="width: 50px;font-size:10px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);" class="p-2 rounded-circle mx-1" id="jam">
                                                                8 <br>
                                                                jam
                                                            </div>
                                                            <div style="width: 50px;font-size:10px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);" class="p-2 rounded-circle mx-1" id="menit">
                                                                6 <br>
                                                                menit
                                                            </div>
                                                            <div style="width: 50px;font-size:10px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);" class="p-2 rounded-circle mx-1" id="detik">
                                                                23 <br>
                                                                detik
                                                            </div>
                                                        </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7 col-10 d-flex align-items-stretch">
                                        <div class="card w-100 produk h-100" style="border-radius: 25px;background-image: linear-gradient(315deg, #2a2a72 0%, #009ffd 74%);">
                                            <img class="card-image-top w-100" src="<?= base_url('assets/') ?>img/tv.jpg" alt="" style="border-top-left-radius: 25px;border-top-right-radius: 25px;border-bottom:5px solid #FA8C42">
                                            <div class="card-body text-white">
                                                <h6 class="card-title">Post navigation Redragon M601 CENTROPHORUS-2000 DPI Gaming Mouse for PC</h6>
                                                            <p class="card-text d-flex justify-content-between mt-4">
                                                            <span class="text-left" style="font-size: 12px;">
                                                                0 Pelelang
                                                            </span>
                                                            <span class="ml-auto">
                                                                Rp 5.000.000
                                                            </span>
                                                            </p>
                                            </div>
                                            <div class="card-footer text-white">
                                                        <div class="d-flex text-center mt-auto">
                                                            <div style="width: 50px;font-size:10px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);" class="p-2 rounded-circle mx-1" id="hari">
                                                                2
                                                                <br>
                                                                Hari
                                                            </div>
                                                            <div style="width: 50px;font-size:10px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);" class="p-2 rounded-circle mx-1" id="jam">
                                                                8 <br>
                                                                jam
                                                            </div>
                                                            <div style="width: 50px;font-size:10px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);" class="p-2 rounded-circle mx-1" id="menit">
                                                                6 <br>
                                                                menit
                                                            </div>
                                                            <div style="width: 50px;font-size:10px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);" class="p-2 rounded-circle mx-1" id="detik">
                                                                23 <br>
                                                                detik
                                                            </div>
                                                        </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7 col-10 d-flex align-items-stretch">
                                        <div class="card w-100 produk h-100" style="border-radius: 25px;background-image: linear-gradient(315deg, #2a2a72 0%, #009ffd 74%);">
                                            <img class="card-image-top w-100" src="<?= base_url('assets/') ?>img/tv.jpg" alt="" style="border-top-left-radius: 25px;border-top-right-radius: 25px;border-bottom:5px solid #FA8C42">
                                            <div class="card-body text-white">
                                                <h6 class="card-title">Post navigation Redragon M601 CENTROPHORUS-2000 DPI Gaming Mouse for PC</h6>
                                                            <p class="card-text d-flex justify-content-between mt-4">
                                                            <span class="text-left" style="font-size: 12px;">
                                                                0 Pelelang
                                                            </span>
                                                            <span class="ml-auto">
                                                                Rp 5.000.000
                                                            </span>
                                                            </p>
                                            </div>
                                            <div class="card-footer text-white">
                                                        <div class="d-flex text-center mt-auto">
                                                            <div style="width: 50px;font-size:10px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);" class="p-2 rounded-circle mx-1" id="hari">
                                                                2
                                                                <br>
                                                                Hari
                                                            </div>
                                                            <div style="width: 50px;font-size:10px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);" class="p-2 rounded-circle mx-1" id="jam">
                                                                8 <br>
                                                                jam
                                                            </div>
                                                            <div style="width: 50px;font-size:10px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);" class="p-2 rounded-circle mx-1" id="menit">
                                                                6 <br>
                                                                menit
                                                            </div>
                                                            <div style="width: 50px;font-size:10px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);" class="p-2 rounded-circle mx-1" id="detik">
                                                                23 <br>
                                                                detik
                                                            </div>
                                                        </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev w-auto" href="#carouselTerbaru" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next w-auto" href="#carouselTerbaru" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="footer text-center text-white py-3 shadow-lg" style="background-color: #1700A0;font-size: 12px;">
            2020 &copy; Copyright All rights reserved by Dimas Anton
        </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        // cepat
        let arrTgl=[];
        let arrHari=[];
        let arrJam=[];
        let arrMenit=[];
        let arrDetik=[];

        function getData(){
            function countDown(tgl,hari,jam,menit,detik){
                // Update the count down every 1 second
                for (let i = 0; i < tgl.length; i++) {
                    var x = setInterval(function() {
                        var countDownDate = new Date(tgl[i]).getTime();
                        // Get today's date and time
                        var now = new Date().getTime();
                        // Find the distance between now and the count down date
                        var distance = countDownDate - now;
                        // Time calculations for days, hours, minutes and seconds
                        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                        // If the count down is over, write some text 
                        // if (distance <= 1) {
                        //     $(id[i]).remove();
                        // }
                        
                        $(hari[i]).html(days);
                        $(jam[i]).html(hours);
                        $(menit[i]).html(minutes);
                        $(detik[i]).html(seconds);
                        // $(id[i]).html(" : "+days + "d " + hours + "h "
                        // + minutes + "m " + seconds+"s");
                    }, 1000);   
                }
            } 
            let carousel = "";
            let cetak="";
            let html = "";
            $.ajax({
                type: "GET",
                url: "<?= base_url('HomeControllerUser/getData') ?>",
                data: "",
                dataType: "JSON",
                success: function (response) {
                    
                    
                    for (i = 0; i < response.segera_berakhir.length; i++) {
                        if (i == 0) {
                            carousel = "<div class='carousel-item active'>";        
                        }else{
                             carousel = "<div class='carousel-item'>";        
                        }
                        let idProdukh = ".sgbrkh"+response.segera_berakhir[i].id_barang+$.now();
                        let idProdukj = ".sgbrkj"+response.segera_berakhir[i].id_barang+$.now();
                        let idProdukm = ".sgbrkm"+response.segera_berakhir[i].id_barang+$.now();
                        let idProdukd = ".sgbrkd"+response.segera_berakhir[i].id_barang+$.now();
                        let tgl = response.segera_berakhir[i].tgl_ditutup;

                        arrTgl.push(tgl);
                        arrHari.push(idProdukh);
                        arrJam.push(idProdukj);
                        arrMenit.push(idProdukm);
                        arrDetik.push(idProdukd);

                        html += carousel+
                                    "<div class='col-xl-3 col-lg-4 col-md-5 col-sm-7 col-10 d-flex align-items-stretch'>"+
                                        "<a href='<?= base_url() ?>detail'>"+
                                            "<div class='img-hover-zoom card w-100 produk h-100' style='border-radius: 25px;background-image: linear-gradient(315deg, #2a2a72 0%, #009ffd 74%);' onmouseover='$( this ).children( `.hover` ).width($( this ).width());$( this ).children( `.hover` ).height($( this ).children( `img` ).height());$( this ).children( `.hover` ).css( `visibility`, `visible` );' onmouseout='$( this ).children( `.hover` ).css( `visibility`, `hidden` )'>"+
                                                "<div class='hover position-absolute d-flex align-items-end' style='border-top-left-radius: 25px;border-top-right-radius: 25px;font-size:20px;color : gray;z-index:100;background: rgba(2, 1, 2, 0.4);visibility: hidden;'>"+
                                                    "<div class='h-100 w-100 align-middle'>"+
                                                        "<div class='text-center text-light py-2 w-100 rounded'>"+
                                                            "<div class='px-3 py-3 btn text-light d-flex justify-content-around' style='font-weight:bold'>"+
                                                                "<span> <span class='"+idProdukh.substring(1)+"' ></span> Hari </span> <span> <span class='"+idProdukj.substring(1)+"' ></span> Jam </span> <span> <span class='"+idProdukm.substring(1)+"' ></span> Menit </span> <span> <span class='"+idProdukd.substring(1)+"' ></span> Detik </span>"+
                                                                "<br>"+
                                                            "</div>"+
                                                            "<div class='btn btn-outline-light'>Ikuti Lelang</div>"+
                                                        "</div>"+
                                                    "</div>"+
                                                "</div>"+

                                                "<img class=' card-image-top w-100' src='<?= base_url() ?>assets/img/produk/"+response.segera_berakhir[i].foto+"' alt='"+response.segera_berakhir[i].foto+"' style='z-index:98;border-top-left-radius: 25px;border-top-right-radius: 25px;'>"+
                                                
                                                "<div class='h-50 card-body text-white' style='background-image: linear-gradient(315deg, #2a2a72 0%, #009ffd 99%);border-top: 5px solid #FA8C42;z-index:99;'>"+
                                                    "<h6 class='card-title'>"+response.segera_berakhir[i].nama_barang+" </h6>"+
                                                    "<h6 class='card-title' style='font-size:0.8rem'> Kategori : "+response.segera_berakhir[i].nama_kategori+"<br> Lokasi : "+response.segera_berakhir[i].type+" "+response.segera_berakhir[i].nama_kota+" </h6>"+
                                                    // "<p style='font-size: 12px;' class='text-right'> <i class='fa fa-map-marker'></i> "+response.segera_berakhir[i].nama_kategori+"</p>"+

                                                    "<p class='card-text d-flex justify-content-between mt-4'>"+
                                                        "<span class='text-left' style='font-size: 12px;'>"+
                                                            "0 Pelelang"+
                                                        "</span>"+
                                                        "<span class='ml-auto'>"+
                                                            formatRupiah(response.segera_berakhir[i].harga_awal,'Rp ')+
                                                        "</span>"+
                                                    "</p>"+
                                                "</div>"+
                                                
                                                "<div class='card-footer text-white'>"+
                                                    "<div class='d-flex text-center mt-auto'>"+
                                                        "<div style='width: 51px;font-size:12px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);' class='p-2 rounded-circle mx-1 ' id=''>"+
                                                            "<span class='"+idProdukh.substring(1)+"'></span> <br>"+
                                                            "Hari"+
                                                        "</div>"+
                                                        "<div style='width: 51px;font-size:12px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);' class='p-2 rounded-circle mx-1 ' id=''>"+
                                                            "<span class='"+idProdukj.substring(1)+"'></span> <br>"+
                                                            "Jam"+
                                                        "</div>"+
                                                        "<div style='width: 51px;font-size:12px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);' class='p-2 rounded-circle mx-1 ' id=''>"+
                                                            "<span class='"+idProdukm.substring(1)+"'></span> <br>"+
                                                            "Menit"+
                                                        "</div>"+
                                                        "<div style='width: 51px;font-size:12px;background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);' class='p-2 rounded-circle mx-1 ' id=''>"+
                                                            "<span class='"+idProdukd.substring(1)+"'></span> <br>"+
                                                            "Detik"+
                                                        "</div>"+
                                                    "</div>"+
                                                "</div>"+
                                            "</div>"+
                                        "</a>"+
                                    "</div>"+
                                "</div>";
                        
                    }
                    $("#segera_berakhir").html(html);
                    // $("#segera_berakhir").html($("#rekomendasi-html").html());
                    // console.log(html);
                    settingCarousel();   
                    countDown(arrTgl,arrHari,arrJam,arrMenit,arrDetik);
                }
            });
        }

        function settingCarousel(){
            $('#ProdukCarouselUp').carousel({
                    interval: 5000
            })
            $('#carouselRekomendasi').carousel({
                    interval: 6000
            })
            $('#carouselPopuler').carousel({
                    interval: 6000
            })
            $('#carouselTerbaru').carousel({
                    interval: 6000
            })
            $('.carousel .carousel-item').each(function() {
                var minPerSlide = 5;
                var next = $(this).next();
                if (!next.length) {
                    next = $(this).siblings(':first');
                }
                next.children(':first-child').clone().appendTo($(this));

                for (var i = 0; i < minPerSlide; i++) {
                    next = next.next();
                    if (!next.length) {
                        next = $(this).siblings(':first');
                    }

                    next.children(':first-child').clone().appendTo($(this));
                }
            });
        }

        getData();
        settingCarousel();

        // Rupiah Function
        function formatRupiah(angka, prefix){
			var number_string = angka.replace(/[^,\d]/g, '').toString(),
			split   		= number_string.split(','),
			sisa     		= split[0].length % 3,
			rupiah     		= split[0].substr(0, sisa),
			ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);
 
			// tambahkan titik jika yang di input sudah menjadi angka ribuan
			if(ribuan){
				separator = sisa ? '.' : '';
				rupiah += separator + ribuan.join('.');
			}
 
			rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
			return prefix == undefined ? rupiah : (rupiah ? prefix + rupiah : '');
		}

        // MAKE REALTIME DATA
        let width = ($("body").width()-15);
        function realTime(){
            // $("body").css({"max-width":(width)});
            // console.log($("html").width());
            $("html").scrollLeft(0);
        }
        let interval = setInterval(realTime,500);

    </script>
  </body>
</html>