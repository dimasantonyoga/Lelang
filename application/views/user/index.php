<!doctype html>
<html lang="en">
  <?php $this->session->set_userdata("halaman","beranda") ?>
  <?php $this->load->view('user/_partials/head'); ?>
  <body>
    <section class="banner-one">
        <?php $this->load->view('user/_partials/navbar'); ?>
        <div class="row">
            <!-- Untuk Tampilan Lg -->
            <div class="col-lg-5 d-none d-lg-block">
                <img src="<?= base_url('assets/') ?>img/image-4.png" class="animasi-img-1 position-absolute" alt="">
                <div class="banner-content ml-5 position-absolute">
                    <h1 >Selamat datang di Rival Price</h1>
                    <p class="mt-4">Dapatkan barang berkualitas dengan harga terjangaku dengan mempersaingkan harga secara adil.</p>
                    <a href="<?= base_url('produk'); ?>" class="btn btn-lg text-white px-5 mt-5 rounded-pill" style="background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);">
                        SKUY <i class="pl-1 fa fa-arrow-right"></i>
                    </a>
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
                                    
                                </div>
                                <a style='z-index:150' class="carousel-control-prev w-auto" href="#carouselRekomendasi" role="button" data-slide="prev">
                                    <i class="fa fa-2x fa-chevron-left py-2 px-3 rounded-circle" style='background-image: linear-gradient(315deg, #2a2a72 0%, #009ffd 74%);'></i>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a style='z-index:150' class="carousel-control-next w-auto" href="#carouselRekomendasi" role="button" data-slide="next">
                                    <i class="fa fa-2x fa-chevron-right py-2 px-3 rounded-circle" style='background-image: linear-gradient(315deg, #2a2a72 0%, #009ffd 74%);'></i>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                <div class="tab-pane fade" id="populer" role="tabpanel" aria-labelledby="populer-tab">
                <h3 class="pb-5 text-center" style="text-shadow: 3px 3px gray;color: #F3F4FA;font-weight:700;font-size:2.5rem;">Populer </h3>
                <div class="row">
                        <div id="carouselPopuler" class="carousel slide w-100" data-ride="carousel">
                            <div class="carousel-inner w-100" role="listbox" id="populer-html">
                                
                            </div>
                            <a style='z-index:150' class="carousel-control-prev w-auto" href="#carouselPopuler" role="button" data-slide="prev">
                                <i class="fa fa-2x fa-chevron-left py-2 px-3 rounded-circle" style='background-image: linear-gradient(315deg, #2a2a72 0%, #009ffd 74%);'></i>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a style='z-index:150' class="carousel-control-next w-auto" href="#carouselPopuler" role="button" data-slide="next">
                                <i class="fa fa-2x fa-chevron-right py-2 px-3 rounded-circle" style='background-image: linear-gradient(315deg, #2a2a72 0%, #009ffd 74%);'></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="terbaru" role="tabpanel" aria-labelledby="terbaru-tab">
                <h3 class="pb-5 text-center" style="text-shadow: 3px 3px gray;color: #F3F4FA;font-weight:700;font-size:2.5rem;">Terbaru </h3>
                <div class="row">
                        <div id="carouselTerbaru" class="carousel slide w-100" data-ride="carousel">
                            <div class="carousel-inner w-100" role="listbox" id="terbaru-html">
                                
                            </div>
                            <a style='z-index:150' class="carousel-control-prev w-auto" href="#carouselTerbaru" role="button" data-slide="prev">
                                <i class="fa fa-2x fa-chevron-left py-2 px-3 rounded-circle" style='background-image: linear-gradient(315deg, #2a2a72 0%, #009ffd 74%);'></i>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a style='z-index:150' class="carousel-control-next w-auto" href="#carouselTerbaru" role="button" data-slide="next">
                                <i class="fa fa-2x fa-chevron-right py-2 px-3 rounded-circle" style='background-image: linear-gradient(315deg, #2a2a72 0%, #009ffd 74%);'></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <?php $this->load->view('user/_partials/footer'); ?>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php $this->load->view('user/_partials/js'); ?>
    <script>
        // DEKLARASI
        let count =0;
        let count2 =0;
        

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
                url: ci_base+"HomeControllerUser/getData",
                data: "",
                dataType: "JSON",
                success: function (response) {
                    
                    // Segera Berakhir
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
                        let idProdukP = ".sgbrkP"+response.segera_berakhir[i].id_barang+$.now();
                         
                        let tgl = response.segera_berakhir[i].tgl_ditutup;
                        
                        

                        arrTgl.push(tgl);
                        arrHari.push(idProdukh);
                        arrJam.push(idProdukj);
                        arrMenit.push(idProdukm);
                        arrDetik.push(idProdukd);

                        $.ajax({
                            type: "POST",
                            url: ci_base+"HomeControllerUser/getJumlahPelelang",
                            data: {
                                id:response.segera_berakhir[i].id_barang
                            },
                            dataType: "JSON",
                            success: function (response) {
                                $(idProdukP).html(response);
                            }
                        });

                        html += carousel+
                                    "<div class='col-xl-3 col-lg-4 col-md-5 col-sm-7 col-10 d-flex align-items-stretch'>"+
                                        "<a href='"+ci_base+"produk/detail?prdk="+response.segera_berakhir[i].id_barang+"&&nm="+url_set(response.segera_berakhir[i].nama_barang)+"'>"+
                                            "<div class='img-hover-zoom card w-100 produk h-100' style='border-radius: 25px;background-image: linear-gradient(315deg, #2a2a72 0%, #009ffd 74%);' onmouseover='$( this ).children( `.hover` ).width($( this ).width());$( this ).children( `.hover` ).height($( this ).children( `img` ).height());$( this ).children( `.hover` ).css( `visibility`, `visible` );' onmouseout='$( this ).children( `.hover` ).css( `visibility`, `hidden` )'>"+
                                                "<div class='hover position-absolute d-flex align-items-end' style='border-top-left-radius: 25px;border-top-right-radius: 25px;font-size:20px;color : gray;z-index:100;background: rgba(2, 1, 2, 0.4);visibility: hidden;'>"+
                                                    "<div class='h-100 w-100 d-flex align-items-center'>"+
                                                        "<div class='text-center text-light py-2 w-100 rounded'>"+
                                                            "<div class='px-3 py-3 btn text-light align-middle' style='font-weight:bold'>"+
                                                                "Berakhir Dalam : <br>"+
                                                                "<span> <span class='"+idProdukh.substring(1)+"' ></span> Hari </span> <span> <span class='"+idProdukj.substring(1)+"' ></span> Jam </span> <span> <span class='"+idProdukm.substring(1)+"' ></span> Menit </span> <span> <span class='"+idProdukd.substring(1)+"' ></span> Detik </span>"+
                                                                "<br>"+
                                                            "</div>"+
                                                            "<div class='btn btn-outline-light'>Ikuti Lelang</div>"+
                                                        "</div>"+
                                                    "</div>"+
                                                "</div>"+

                                                "<img class=' card-image-top w-100' src='"+ci_base+"assets/img/produk/"+response.segera_berakhir[i].foto+"' alt='"+response.segera_berakhir[i].foto+"' style='z-index:98;border-top-left-radius: 25px;border-top-right-radius: 25px;'>"+
                                                
                                                "<div class='h-50 card-body text-white' style='background-image: linear-gradient(315deg, #2a2a72 0%, #009ffd 99%);border-top: 5px solid #FA8C42;z-index:99;'>"+
                                                    "<h6 class='card-title'>"+response.segera_berakhir[i].nama_barang+" </h6>"+
                                                    "<h6 class='card-title' style='font-size:0.8rem'> Kategori : "+response.segera_berakhir[i].nama_kategori+"<br> Lokasi : "+response.segera_berakhir[i].type+" "+response.segera_berakhir[i].nama_kota+" </h6>"+
                                                    // "<p style='font-size: 12px;' class='text-right'> <i class='fa fa-map-marker'></i> "+response.segera_berakhir[i].nama_kategori+"</p>"+

                                                    "<p class='card-text d-flex justify-content-between mt-4'>"+
                                                        "<span class='text-left' style='font-size: 12px;'>"+
                                                            "<span class='"+idProdukP.substring(1)+"'></span> Pelelang"+
                                                        "</span>"+
                                                        "<span class='ml-auto'>"+
                                                            formatRupiah(response.segera_berakhir[i].harga_awal,'Rp ')+
                                                        "</span>"+
                                                    "</p>"+
                                                "</div>"+
                                                
                                                "<div class='card-footer text-white'>"+
                                                    "<div class='d-flex text-center justify-content-center mt-auto'>"+
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
                    html = "";
                    // Rekomendasi
                    for (i = 0; i < response.rekomendasi.length; i++) {
                        if (i == 0) {
                            carousel = "<div class='carousel-item active'>";        
                        }else{
                             carousel = "<div class='carousel-item'>";        
                        }
                        let idProdukh = ".rkmdsh"+response.rekomendasi[i].id_barang+$.now();
                        let idProdukj = ".rkmdsj"+response.rekomendasi[i].id_barang+$.now();
                        let idProdukm = ".rkmdsm"+response.rekomendasi[i].id_barang+$.now();
                        let idProdukd = ".rkmdsd"+response.rekomendasi[i].id_barang+$.now();
                        let idProdukP = ".rkmdsp"+response.rekomendasi[i].id_barang+$.now();
                        let tgl = response.rekomendasi[i].tgl_ditutup;
                        
                        $.ajax({
                            type: "POST",
                            url: ci_base+"HomeControllerUser/getJumlahPelelang",
                            data: {
                                id:response.rekomendasi[i].id_barang
                            },
                            dataType: "JSON",
                            success: function (response) {
                                $(idProdukP).html(response);
                            }
                        });

                        arrTgl.push(tgl);
                        arrHari.push(idProdukh);
                        arrJam.push(idProdukj);
                        arrMenit.push(idProdukm);
                        arrDetik.push(idProdukd);

                        html += carousel+
                                    "<div class='col-xl-3 col-lg-4 col-md-5 col-sm-7 col-10 d-flex align-items-stretch'>"+
                                        "<a href='"+ci_base+"produk/detail?prdk="+response.rekomendasi[i].id_barang+"&&nm="+url_set(response.rekomendasi[i].nama_barang)+"'>"+
                                            "<div class='img-hover-zoom card w-100 produk h-100' style='border-radius: 25px;background-image: linear-gradient(315deg, #2a2a72 0%, #009ffd 74%);' onmouseover='$( this ).children( `.hover` ).width($( this ).width());$( this ).children( `.hover` ).height($( this ).children( `img` ).height());$( this ).children( `.hover` ).css( `visibility`, `visible` );' onmouseout='$( this ).children( `.hover` ).css( `visibility`, `hidden` )'>"+
                                                "<div class='hover position-absolute d-flex align-items-end' style='border-top-left-radius: 25px;border-top-right-radius: 25px;font-size:20px;color : gray;z-index:100;background: rgba(2, 1, 2, 0.4);visibility: hidden;'>"+
                                                    "<div class='h-100 w-100 d-flex align-items-center'>"+
                                                        "<div class='text-center text-light py-2 w-100 rounded'>"+
                                                            "<div class='px-3 py-3 btn text-light align-middle' style='font-weight:bold'>"+
                                                                "Berakhir Dalam : <br>"+
                                                                "<span> <span class='"+idProdukh.substring(1)+"' ></span> Hari </span> <span> <span class='"+idProdukj.substring(1)+"' ></span> Jam </span> <span> <span class='"+idProdukm.substring(1)+"' ></span> Menit </span> <span> <span class='"+idProdukd.substring(1)+"' ></span> Detik </span>"+
                                                                "<br>"+
                                                            "</div>"+
                                                            "<div class='btn btn-outline-light'>Ikuti Lelang</div>"+
                                                        "</div>"+
                                                    "</div>"+
                                                "</div>"+

                                                "<img class=' card-image-top w-100' src='"+ci_base+"assets/img/produk/"+response.rekomendasi[i].foto+"' alt='"+response.rekomendasi[i].foto+"' style='z-index:98;border-top-left-radius: 25px;border-top-right-radius: 25px;'>"+
                                                
                                                "<div class='h-50 card-body text-white' style='background-image: linear-gradient(315deg, #2a2a72 0%, #009ffd 99%);border-top: 5px solid #FA8C42;z-index:99;'>"+
                                                    "<h6 class='card-title'>"+response.rekomendasi[i].nama_barang+" </h6>"+
                                                    "<h6 class='card-title' style='font-size:0.8rem'> Kategori : "+response.rekomendasi[i].nama_kategori+"<br> Lokasi : "+response.rekomendasi[i].type+" "+response.rekomendasi[i].nama_kota+" </h6>"+
                                                    // "<p style='font-size: 12px;' class='text-right'> <i class='fa fa-map-marker'></i> "+response.rekomendasi[i].nama_kategori+"</p>"+

                                                    "<p class='card-text d-flex justify-content-between mt-4'>"+
                                                        "<span class='text-left' style='font-size: 12px;'>"+
                                                            "<span class='"+idProdukP.substring(1)+"'></span> Pelelang"+
                                                        "</span>"+
                                                        "<span class='ml-auto'>"+
                                                            formatRupiah(response.rekomendasi[i].harga_awal,'Rp ')+
                                                        "</span>"+
                                                    "</p>"+
                                                "</div>"+
                                                
                                                "<div class='card-footer text-white'>"+
                                                    "<div class='d-flex text-center justify-content-center mt-auto'>"+
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
                    $("#rekomendasi-html").html(html);
                    html = "";

                    // Populer
                    for (i = 0; i < response.populer.length; i++) {
                        if (i == 0) {
                            carousel = "<div class='carousel-item active'>";        
                        }else{
                             carousel = "<div class='carousel-item'>";        
                        }
                        let idProdukh = ".pplrh"+response.populer[i].id_barang+$.now();
                        let idProdukj = ".pplrj"+response.populer[i].id_barang+$.now();
                        let idProdukm = ".pplrm"+response.populer[i].id_barang+$.now();
                        let idProdukd = ".pplrd"+response.populer[i].id_barang+$.now();
                        let idProdukP = ".pplrP"+response.populer[i].id_barang+$.now();
                         
                        let tgl = response.populer[i].tgl_ditutup;
                        
                        

                        arrTgl.push(tgl);
                        arrHari.push(idProdukh);
                        arrJam.push(idProdukj);
                        arrMenit.push(idProdukm);
                        arrDetik.push(idProdukd);

                        $.ajax({
                            type: "POST",
                            url: ci_base+"HomeControllerUser/getJumlahPelelang",
                            data: {
                                id:response.populer[i].id_barang
                            },
                            dataType: "JSON",
                            success: function (response) {
                                $(idProdukP).html(response);
                            }
                        });

                        html += carousel+
                                    "<div class='col-xl-3 col-lg-4 col-md-5 col-sm-7 col-10 d-flex align-items-stretch'>"+
                                        "<a href='"+ci_base+"produk/detail?prdk="+response.populer[i].id_barang+"&&nm="+url_set(response.populer[i].nama_barang)+"'>"+
                                            "<div class='img-hover-zoom card w-100 produk h-100' style='border-radius: 25px;background-image: linear-gradient(315deg, #2a2a72 0%, #009ffd 74%);' onmouseover='$( this ).children( `.hover` ).width($( this ).width());$( this ).children( `.hover` ).height($( this ).children( `img` ).height());$( this ).children( `.hover` ).css( `visibility`, `visible` );' onmouseout='$( this ).children( `.hover` ).css( `visibility`, `hidden` )'>"+
                                                "<div class='hover position-absolute d-flex align-items-end' style='border-top-left-radius: 25px;border-top-right-radius: 25px;font-size:20px;color : gray;z-index:100;background: rgba(2, 1, 2, 0.4);visibility: hidden;'>"+
                                                    "<div class='h-100 w-100 d-flex align-items-center'>"+
                                                        "<div class='text-center text-light py-2 w-100 rounded'>"+
                                                            "<div class='px-3 py-3 btn text-light align-middle' style='font-weight:bold'>"+
                                                                "Berakhir Dalam : <br>"+
                                                                "<span> <span class='"+idProdukh.substring(1)+"' ></span> Hari </span> <span> <span class='"+idProdukj.substring(1)+"' ></span> Jam </span> <span> <span class='"+idProdukm.substring(1)+"' ></span> Menit </span> <span> <span class='"+idProdukd.substring(1)+"' ></span> Detik </span>"+
                                                                "<br>"+
                                                            "</div>"+
                                                            "<div class='btn btn-outline-light'>Ikuti Lelang</div>"+
                                                        "</div>"+
                                                    "</div>"+
                                                "</div>"+

                                                "<img class=' card-image-top w-100' src='"+ci_base+"assets/img/produk/"+response.populer[i].foto+"' alt='"+response.populer[i].foto+"' style='z-index:98;border-top-left-radius: 25px;border-top-right-radius: 25px;'>"+
                                                
                                                "<div class='h-50 card-body text-white' style='background-image: linear-gradient(315deg, #2a2a72 0%, #009ffd 99%);border-top: 5px solid #FA8C42;z-index:99;'>"+
                                                    "<h6 class='card-title'>"+response.populer[i].nama_barang+" </h6>"+
                                                    "<h6 class='card-title' style='font-size:0.8rem'> Kategori : "+response.populer[i].nama_kategori+"<br> Lokasi : "+response.populer[i].type+" "+response.populer[i].nama_kota+" </h6>"+
                                                    // "<p style='font-size: 12px;' class='text-right'> <i class='fa fa-map-marker'></i> "+response.populer[i].nama_kategori+"</p>"+

                                                    "<p class='card-text d-flex justify-content-between mt-4'>"+
                                                        "<span class='text-left' style='font-size: 12px;'>"+
                                                            "<span class='"+idProdukP.substring(1)+"'></span> Pelelang"+
                                                        "</span>"+
                                                        "<span class='ml-auto'>"+
                                                            formatRupiah(response.populer[i].harga_awal,'Rp ')+
                                                        "</span>"+
                                                    "</p>"+
                                                "</div>"+
                                                
                                                "<div class='card-footer text-white'>"+
                                                    "<div class='d-flex text-center justify-content-center mt-auto'>"+
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
                    $("#populer-html").html(html);
                    html = "";

                    // Terbaru
                    for (i = 0; i < response.terbaru.length; i++) {
                        if (i == 0) {
                            carousel = "<div class='carousel-item active'>";        
                        }else{
                             carousel = "<div class='carousel-item'>";        
                        }
                        let idProdukh = ".trbrh"+response.terbaru[i].id_barang+$.now();
                        let idProdukj = ".trbrj"+response.terbaru[i].id_barang+$.now();
                        let idProdukm = ".trbrm"+response.terbaru[i].id_barang+$.now();
                        let idProdukd = ".trbrd"+response.terbaru[i].id_barang+$.now();
                        let idProdukP = ".trbrp"+response.terbaru[i].id_barang+$.now();
                        let tgl = response.terbaru[i].tgl_ditutup;
                        
                        $.ajax({
                            type: "POST",
                            url: ci_base+"HomeControllerUser/getJumlahPelelang",
                            data: {
                                id:response.terbaru[i].id_barang
                            },
                            dataType: "JSON",
                            success: function (response) {
                                $(idProdukP).html(response);
                            }
                        });                        

                        arrTgl.push(tgl);
                        arrHari.push(idProdukh);
                        arrJam.push(idProdukj);
                        arrMenit.push(idProdukm);
                        arrDetik.push(idProdukd);

                        html += carousel+
                                    "<div class='col-xl-3 col-lg-4 col-md-5 col-sm-7 col-10 d-flex align-items-stretch'>"+
                                        "<a href='"+ci_base+"produk/detail?prdk="+response.terbaru[i].id_barang+"&&nm="+url_set(response.terbaru[i].nama_barang)+"'>"+
                                            "<div class='img-hover-zoom card w-100 produk h-100' style='border-radius: 25px;background-image: linear-gradient(315deg, #2a2a72 0%, #009ffd 74%);' onmouseover='$( this ).children( `.hover` ).width($( this ).width());$( this ).children( `.hover` ).height($( this ).children( `img` ).height());$( this ).children( `.hover` ).css( `visibility`, `visible` );' onmouseout='$( this ).children( `.hover` ).css( `visibility`, `hidden` )'>"+
                                                "<div class='hover position-absolute d-flex align-items-end' style='border-top-left-radius: 25px;border-top-right-radius: 25px;font-size:20px;color : gray;z-index:100;background: rgba(2, 1, 2, 0.4);visibility: hidden;'>"+
                                                    "<div class='h-100 w-100 d-flex align-items-center'>"+
                                                        "<div class='text-center text-light py-2 w-100 rounded'>"+
                                                            "<div class='px-3 py-3 btn text-light align-middle' style='font-weight:bold'>"+
                                                                "Berakhir Dalam : <br>"+
                                                                "<span> <span class='"+idProdukh.substring(1)+"' ></span> Hari </span> <span> <span class='"+idProdukj.substring(1)+"' ></span> Jam </span> <span> <span class='"+idProdukm.substring(1)+"' ></span> Menit </span> <span> <span class='"+idProdukd.substring(1)+"' ></span> Detik </span>"+
                                                                "<br>"+
                                                            "</div>"+
                                                            "<div class='btn btn-outline-light'>Ikuti Lelang</div>"+
                                                        "</div>"+
                                                    "</div>"+
                                                "</div>"+

                                                "<img class=' card-image-top w-100' src='"+ci_base+"assets/img/produk/"+response.terbaru[i].foto+"' alt='"+response.terbaru[i].foto+"' style='z-index:98;border-top-left-radius: 25px;border-top-right-radius: 25px;'>"+
                                                
                                                "<div class='h-50 card-body text-white' style='background-image: linear-gradient(315deg, #2a2a72 0%, #009ffd 99%);border-top: 5px solid #FA8C42;z-index:99;'>"+
                                                    "<h6 class='card-title'>"+response.terbaru[i].nama_barang+" </h6>"+
                                                    "<h6 class='card-title' style='font-size:0.8rem'> Kategori : "+response.terbaru[i].nama_kategori+"<br> Lokasi : "+response.terbaru[i].type+" "+response.terbaru[i].nama_kota+" </h6>"+
                                                    // "<p style='font-size: 12px;' class='text-right'> <i class='fa fa-map-marker'></i> "+response.terbaru[i].nama_kategori+"</p>"+

                                                    "<p class='card-text d-flex justify-content-between mt-4'>"+
                                                        "<span class='text-left' style='font-size: 12px;'>"+
                                                            "<span class='"+idProdukP.substring(1)+"'></span> Pelelang"+
                                                        "</span>"+
                                                        "<span class='ml-auto'>"+
                                                            formatRupiah(response.terbaru[i].harga_awal,'Rp ')+
                                                        "</span>"+
                                                    "</p>"+
                                                "</div>"+
                                                
                                                "<div class='card-footer text-white'>"+
                                                    "<div class='d-flex text-center justify-content-center mt-auto'>"+
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
                    $("#terbaru-html").html(html);
                    settingCarousel();   
                    countDown(arrTgl,arrHari,arrJam,arrMenit,arrDetik);
                }
            });

            // GET DATA ACTIVITY
            $.ajax({
                type: "GET",
                url: "<?= base_url('HomeControllerUser/checkActivity') ?>",
                data: "",
                dataType: "JSON",
                success: function (response) {
                    count = response; 
                }
            });
            settingCarousel();
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

        // CHEDK DATA IN TABLE tb_aktifitas
        function checkActivity(){
            $.ajax({
                type: "GET",
                url: "<?= base_url('HomeControllerUser/checkActivity') ?>",
                data: "",
                dataType: "JSON",
                success: function (response) {
                    count2 = response; 
                }
            });
        }

        getData();
        settingCarousel();
        

        // MAKE REALTIME DATA
        function realTime(){
            checkActivity();

            // Check data di tabel aktifitas
            if(count != count2){
                getData();
            }
            $("html").scrollLeft(0);

        }
        let interval = setInterval(realTime,500);
    </script>
  </body>
</html>