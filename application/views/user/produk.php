<!doctype html>
<html lang="en">
  <?php $this->session->set_userdata("halaman","produk") ?>
  <?php $this->load->view('user/_partials/head'); ?>
  <body style="color:#495057">
    <section class="banner-one-detail">
        <?php $this->load->view('user/_partials/navbar'); ?>
        <h1 class="text-white py-5 text-center w-100">Produk Lelang</h1> 
        <div class="bg-white px-lg-4 px-md-5 text-left" style="border-top-left-radius:20px;border-top-right-radius:20px;margin-top: 2rem!important;border-top:5px solid orange;" >
            <div class="row">
                <div class="col-xl-4 col-lg-5 my-5 col-md-12 col-12 col-sm-12 px-5">
                    <div class="card border-primary pb-5 px-3 py-4" style="border-radius:20px;">
                        <div class="card-body">
                            <h4 class="card-title">Filter</h4>                       
                            <div class="form-group mt-4">
                                <label for="">Cari Nama :</label>
                                <input type="search"
                                class="form-control border-primary" name="" style="" id="cariNama" aria-describedby="helpId" placeholder="Cari lelang disini !">
                            </div>
                            <div class="form-group mt-4">
                                <label for="">Harga Minimal :</label>
                                <input type="number" step='100000'
                                class="form-control border-primary" name="" style="" id="cariMin" aria-describedby="helpId" placeholder="Masukkan harga minimal">
                            </div>
                            <div class="form-group mt-4">
                                <label for="">Harga Maksimal :</label>
                                <input type="number" step='100000'
                                class="form-control border-primary" name="" style="" id="cariMax" aria-describedby="helpId" placeholder="Masukkan harga maksimal">
                            </div>
                            <div class="form-group mt-4">
                              <label for="">Kategori</label>
                              <select id="setKategori" style="" class="form-control border-primary" name="" id="">

                              </select>
                            </div>
                            <div class="form-group mt-4 py-3">
                                <button type="button" onclick="resetSearch()" style="" class="btn-primary btn w-100 text-white">Reset</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7 px-0">
                    <div class="row">
                        <div class='mt-5 ml-xl-n3 pr-lg-3 pl-lg-0 pr-md-0 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
                            <nav class="navbar navbar-expand-xl px-5 px-sm-5 px-md-3 px-lg-3 px-xl-3 rounded navbar-dark" style="background:#292973">
                                <a class="navbar-brand" href="#">Produk Lelang : </a>
                                <button class="navbar-toggler d-xl-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="collapsibleNavId">
                                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                                        <li id="berlangsungParent" class="nav-item mx-3 active">
                                            <a class="nav-link" id="berlangsung" style="cursor:pointer">Sedang Berlangsung <span class="sr-only"></span></a>
                                        </li>
                                        <li id="akanDatangParent" class="nav-item mx-3">
                                            <a class="nav-link" id="akanDatang" style="cursor:pointer">Akan Datang</a>
                                        </li>
                                        <li id="berakhirParent" class="nav-item mx-3">
                                            <a class="nav-link" id="berakhir" style="cursor:pointer">Berakhir</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class="row mb-5" id="konten">
                        
                    </div>
                    <div class="float-right mx-5" id='pagination'></div>
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
        let searchNama = '----------';
        let searchMin =0;
        let searchMax=0;
        let pagno=0;
        let  nav = "berlangsung";
        let kt = "all";

        // Get kategori
        $.ajax({
            url: "<?= base_url(); ?>user/ProdukControllerUser/getKategori",
            type: 'GET',
            dataType: 'json',
            success: function(response){
                let ktgr = "<option value='all' > Semua Kategori </option>";
                for (let i = 0; i < response.length; i++) {
                    ktgr += "<option value='"+response[i].id_kategori+"' > "+response[i].nama_kategori+"</option>";
                }
                $("#setKategori").html(ktgr);
            }
        });

        // Pagination
        $('#pagination').on('click','a',function(e){
        e.preventDefault(); 
        var pageno = $(this).attr('data-ci-pagination-page');
        loadPagination(pageno,searchNama,searchMin,searchMax,nav,kt);
        });
    
        loadPagination(0,'',0,0,'');
        function resetSearch(){
            searchNama = '----------';
            searchMin =0;
            searchMax=0;
            pagno=0;
            kt = "all";
            $("#setKategori").val("all");
            $("#cariNama").val("");
            $("#cariMin").val("");
            $("#cariMax").val("");
            loadPagination(pagno,searchNama,searchMin,searchMax,nav,kt);
        }

        $("#berlangsung").click(function (e) { 
            e.preventDefault();
            $("#akanDatangParent").removeClass("active");
            $("#berakhirParent").removeClass("active");
            $("#berlangsungParent").addClass("active");
            nav = "berlangsung";
            $("#cariNama").val("");
            $("#cariMin").val("");
            $("#cariMax").val("");
            searchNama = '----------';
            searchMin =0;
            searchMax=0;
            pagno=0;
            kt = "all";
            $("#setKategori").val("all");
            loadPagination(pagno,searchNama,searchMin,searchMax,nav,kt);
            
        });
        $("#akanDatang").click(function (e) { 
            e.preventDefault();
            $("#berakhirParent").removeClass("active");
            $("#berlangsungParent").removeClass("active");
            $("#akanDatangParent").addClass("active");
            nav = "akanDatang";
            $("#cariNama").val("");
            $("#cariMin").val("");
            $("#cariMax").val("");
            searchNama = '----------';
            searchMin =0;
            searchMax=0;
            pagno=0;
            kt = "all";
            $("#setKategori").val("all");
            loadPagination(pagno,searchNama,searchMin,searchMax,nav,kt);
        });
        $("#berakhir").click(function (e) { 
            e.preventDefault();
            $("#berlangsungParent").removeClass("active");
            $("#akanDatangParent").removeClass("active");
            $("#berakhirParent").addClass("active");
            nav = "berakhir";
            $("#cariNama").val("");
            $("#cariMin").val("");
            $("#cariMax").val("");
            searchNama = '----------';
            searchMin =0;
            searchMax=0;
            pagno=0;
            kt = "all";
            $("#setKategori").val("all");
            loadPagination(pagno,searchNama,searchMin,searchMax,nav,kt);
        });

        $("#setKategori").change(function (e) { 
            e.preventDefault();
            kt = $("#setKategori").val();
            loadPagination(pagno,searchNama,searchMin,searchMax,nav,kt);
        });

        $("#cariNama").keyup(function (e) { 
            searchNama = $("#cariNama").val();
            if(searchNama == ''){
                searchNama = '----------';
            }
            loadPagination(pagno,searchNama,searchMin,searchMax,nav,kt);
        });
        $("#cariMin").keyup(function (e) { 
            searchMin = $("#cariMin").val();
            loadPagination(pagno,searchNama,searchMin,searchMax,nav,kt);
        });
        $("#cariMax").keyup(function (e) { 
            searchMax = $("#cariMax").val();
            loadPagination(pagno,searchNama,searchMin,searchMax,nav,kt);
        });

        function loadPagination(pagno=0,searchNama='----------',searchMin=0,searchMax=0,nav = "berlangsung",kt="all"){
        $.ajax({
            url: "<?= base_url(); ?>user/ProdukControllerUser/getData/"+pagno,
            type: 'get',
            data: {
                nama : searchNama,
                min : searchMin,
                max : searchMax,
                nav : nav,
                kt : kt, 
            },
            dataType: 'json',
            success: function(response){
                // console.log(response);
                $('#pagination').html(response.pagination);
                getData(response.result);
            }
        });
        }
        
        function getData(response){
            function countDown(tgl,tgl2,hari,jam,menit,detik,stt){
                // Update the count down every 1 second
                for (let i = 0; i < tgl.length; i++) {
                    var x = setInterval(function() {
                        if(stt[i] == "dibuka"){
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
                            
                            $(hari[i]).html(days);
                            $(jam[i]).html(hours);
                            $(menit[i]).html(minutes);
                            $(detik[i]).html(seconds);
                        }else{
                            var countDownDate = new Date(tgl2[i]).getTime();
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
                            
                            $(hari[i]).html(days);
                            $(jam[i]).html(hours);
                            $(menit[i]).html(minutes);
                            $(detik[i]).html(seconds);
                        }
                    }, 1000);   
                }
            }
            let arrTgl=[];
            let arrTgl2=[];
            let arrHari=[];
            let arrJam=[];
            let arrMenit=[];
            let arrDetik=[];
            let arrStatus=[];
            let html = "";
            for (i = 0; i < response.length; i++) {
                        let stts = response[i].status;
                        let idProdukh = ".sgbrkh"+response[i].id_barang+$.now();
                        let idProdukj = ".sgbrkj"+response[i].id_barang+$.now();
                        let idProdukm = ".sgbrkm"+response[i].id_barang+$.now();
                        let idProdukd = ".sgbrkd"+response[i].id_barang+$.now();
                        let idProdukP = ".trbrp"+response[i].id_barang+$.now();
                        let tgl = response[i].tgl_ditutup;
                        let tgl2 = response[i].tgl_dibuka;
                        let footerTmp = "";
                        let pelelangTmp = "";
                        let hrefOpen = "";
                        let hrefClose = "";
                        
                        $.ajax({
                            type: "POST",
                            url: ci_base+"HomeControllerUser/getJumlahPelelang",
                            data: {
                                id:response[i].id_barang
                            },
                            dataType: "JSON",
                            success: function (response) {
                                $(idProdukP).html(response);
                            }
                        });                

                        if(stts == "dibuka"){
                            footerTmp = "<div class='card-footer text-white'>"+
                                            "<div class='d-flex text-center justify-content-center'>"+
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
                                        "</div>";
                            hov =   "<div class='px-3 py-3 btn text-light align-middle' style='font-weight:bold'>"+
                                        "Berakhir Dalam : <br>"+
                                        "<span> <span class='"+idProdukh.substring(1)+"' ></span> Hari </span> <span> <span class='"+idProdukj.substring(1)+"' ></span> Jam </span> <span> <span class='"+idProdukm.substring(1)+"' ></span> Menit </span> <span> <span class='"+idProdukd.substring(1)+"' ></span> Detik </span>"+
                                        "<br>"+
                                    "</div>"+
                                    "<div class='btn btn-outline-light'>Ikuti Lelang</div>";
                            pelelangTmp = "<span class='"+idProdukP.substring(1)+"' ></span> Pelelang";
                            hrefOpen = "<a href='"+ci_base+"produk/detail?prdk="+response[i].id_barang+"&&nm="+url_set(response[i].nama_barang)+"'>";
                            hrefClose = "</a>";
                        }else if(stts == "coming_soon"){
                            footerTmp = "<div class='card-footer text-white'>"+
                                            "<div class='d-flex text-center justify-content-center'>"+
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
                                        "</div>";
                            hov = " Dimulai Dalam : <br>"+
                                    "<span> <span class='"+idProdukh.substring(1)+"' ></span> Hari </span> <span> <span class='"+idProdukj.substring(1)+"' ></span> Jam </span> <span> <span class='"+idProdukm.substring(1)+"' ></span> Menit </span> <span> <span class='"+idProdukd.substring(1)+"' ></span> Detik </span>"+
                                    "<br>";
                            hrefOpen = "<a >";
                            hrefClose = "</a>";
                        }else if(stts == "ditutup"){
                            hov =   "<div class='px-3 py-3 btn text-light align-middle' style='font-weight:bold'>"+
                                        "Ditutup Pada : <br>"+
                                        "<span>"+tgl+"</span>"+
                                        "<br>"+
                                    "</div>"+
                                    "<div class='btn btn-outline-light'>Detail Lelang</div>";
                            pelelangTmp = "<span class='"+idProdukP.substring(1)+"' ></span> Pelelang";
                            hrefOpen = "<a href='"+ci_base+"produk/detail?prdk="+response[i].id_barang+"&&nm="+url_set(response[i].nama_barang)+"'>";
                            hrefClose = "</a>";
                        }

                        arrTgl.push(tgl);
                        arrTgl2.push(tgl2);
                        arrHari.push(idProdukh);
                        arrJam.push(idProdukj);
                        arrMenit.push(idProdukm);
                        arrDetik.push(idProdukd);
                        arrStatus.push(stts);

                        html += "<div class='px-5 mt-4 pr-lg-5 pl-lg-0 pr-md-0 col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 d-flex align-items-stretch justify-content-center'>"+
                                    hrefOpen+
                                        "<div class='img-hover-zoom card w-100 produk h-100' style='border-radius: 25px;background-image: linear-gradient(315deg, #2a2a72 0%, #009ffd 74%);' onmouseover='$( this ).children( `.hover` ).width($( this ).width());$( this ).children( `.hover` ).height($( this ).children( `img` ).height());$( this ).children( `.hover` ).css( `visibility`, `visible` );' onmouseout='$( this ).children( `.hover` ).css( `visibility`, `hidden` )'>"+
                                            "<div class='hover position-absolute d-flex align-items-end' style='border-top-left-radius: 25px;border-top-right-radius: 25px;font-size:20px;color : gray;z-index:100;background: rgba(2, 1, 2, 0.4);visibility: hidden;'>"+
                                                "<div class='h-100 w-100 d-flex align-items-center'>"+
                                                    "<div class='text-center text-light py-2 w-100 rounded'>"+
                                                        hov+
                                                    "</div>"+
                                                "</div>"+
                                            "</div>"+

                                            "<img class=' card-image-top w-100' src='"+ci_base+"assets/img/produk/"+response[i].foto+"' alt='"+response[i].foto+"' style='z-index:98;border-top-left-radius: 25px;border-top-right-radius: 25px;'>"+
                                            
                                            "<div class='h-50 card-body text-white' style='background-image: linear-gradient(315deg, #2a2a72 0%, #009ffd 99%);border-top: 5px solid #FA8C42;z-index:99;'>"+
                                                "<h6 class='card-title'>"+response[i].nama_barang+" </h6>"+
                                                "<h6 class='card-title' style='font-size:0.8rem'> Kategori : "+response[i].nama_kategori+"<br> Lokasi : "+response[i].type+" "+response[i].nama_kota+" </h6>"+
                                                // "<p style='font-size: 12px;' class='text-right'> <i class='fa fa-map-marker'></i> "+response[i].nama_kategori+"</p>"+

                                                "<p class='card-text d-flex justify-content-between mt-4'>"+
                                                    "<span class='text-left' style='font-size: 12px;'>"+
                                                        pelelangTmp+
                                                    "</span>"+
                                                    "<span class='ml-auto'>"+
                                                        formatRupiah(response[i].harga_awal,'Rp ')+
                                                    "</span>"+
                                                "</p>"+
                                            "</div>"+

                                            footerTmp+

                                        "</div>"+
                                    hrefClose+
                                "</div>";                        
                    }
                    $("#konten").html(html);
                    countDown(arrTgl,arrTgl2,arrHari,arrJam,arrMenit,arrDetik,arrStatus);
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

        // MAKE REALTIME DATA
        function realTime(){
            checkActivity();

            // Check data di tabel aktifitas
            if(count != count2){
                loadPagination(0);
            }
            $("html").scrollLeft(0);

        }
        let interval = setInterval(realTime,500);


    </script>
  </body>
</html>