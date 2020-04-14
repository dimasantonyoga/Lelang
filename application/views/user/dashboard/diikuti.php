<!-- ===== LOAD HEAD =====-->
<?php $this->load->view('user/dashboard/_partials/head');?>
<!-- ===== END HEAD =====-->


<!-- ===== START BODY =====  -->
<body>

    <!-- ===== PAGE WRAPPER ===== -->
    <div class="page-wrapper chiller-theme toggled">
        <!-- ===== LOAD SIDEBAR ===== -->
        <?php $this->load->view('user/dashboard/_partials/sidebar');?>
        <!-- ===== END SIDEBAR ===== -->


        <!-- ===== PAGE CONTENT ===== -->
        <main class="page-content pt-0 pr-3">
            <div class="container-fluid py-5 bg-white shadow " id="container" style="width:95%">
                <div id="table_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-2">
                            <div class="form-group">
                              <label for="">Show</label>
                              <select class="form-control" name="" id="idShow">
                                <option value="4">4</option>
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="40">40</option>
                                <option value="80">80</option>
                                <option value="160">160</option>
                              </select>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-2">
                            <div class="form-group">
                              <label for="">Sort by time</label>
                              <select class="form-control" name="" id="idTime">
                                <option value="dsc">Descending</option>
                                <option value="asc">Ascending</option>
                              </select>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-3">
                            <div class="form-group">
                              <label for="">Category</label>
                              <select class="form-control" name="" id="idCategory">
                                
                              </select>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-5">
                            <div class="form-group">
                              <label for="">Search</label>
                              <input type="search"
                                class="form-control" name="" id="idSearch" aria-describedby="helpId" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="row" id="konten">
                        
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-12 col-md-5">
                            <div class="dataTables_info" id="table_info" role="status" aria-live="polite">
                               
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-7">
                            <div class="dataTables_paginate paging_simple_numbers float-right" id="pagination">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- ===== END PAGE CONTENT ===== -->
        
    </div>
    <!-- ===== END WRAPPER ===== -->


    <!-- ===== LOAD FOOT ===== -->
    <?php $this->load->view('user/dashboard/_partials/foot');?>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <!-- ===== END FOOT ===== -->

    <!-- ===== START JAVASCRIPT ===== -->
    <script>
        // DEKLARASI
        let count =0;
        let count2 =0;
        let detailClick = false;
        let fil_number = 0;
        let fil_halaman = 4;
        let fil_status = "all";
        let fil_time = "dsc";
        let fil_search = "-----------";
        let fil_kategori = "all";
        

        // =========================================== //
        // ========== START READ FUNCTION ============ //
        // =========================================== //       
        // arrTglStart,arrTglEnd,arrStatus,arrP
        let arrTglStart =[];
        let arrTglEnd =[];
        let arrStatus=[];
        let arrP=[];
        let p ="";

        // Cepat
        $("#idShow").change(function () { 
            fil_halaman = $("#idShow").val();
            getData(fil_number,fil_halaman,fil_status,fil_time,fil_search,fil_kategori);
        });
        $("#idStatus").change(function (e) { 
            fil_status = $("#idStatus").val();
            getData(fil_number,fil_halaman,fil_status,fil_time,fil_search,fil_kategori);            
        });
        $("#idTime").change(function (e) { 
            e.preventDefault();
            fil_time = $("#idTime").val();
            getData(fil_number,fil_halaman,fil_status,fil_time,fil_search,fil_kategori);            
        });
        $("#idSearch").keyup(function (e) { 
            fil_search = $("#idSearch").val();
            if(fil_search == ''){
                fil_search = '-----------';
            }
            getData(fil_number,fil_halaman,fil_status,fil_time,fil_search,fil_kategori);
        });
        $("#idCategory").change(function (e) { 
            e.preventDefault();
            fil_kategori = $("#idCategory").val();
            getData(fil_number,fil_halaman,fil_status,fil_time,fil_search,fil_kategori);
        });
        // Pagination
        $('#pagination').on('click','a',function(e){
            e.preventDefault(); 
            fil_number = $(this).attr('data-ci-pagination-page');
            getData(fil_number,fil_halaman,fil_status,fil_time,fil_search,fil_kategori);
        });

        $.ajax({
            type: "GET",
            url: "<?= base_url('user/LelangDashboardControllerUser/getDataForm') ?>",
            data: "",
            dataType: "JSON",
            success: function (response) {
                // Category
                let ctg = "";
                for(let i = 0 ; i < response.category.length; i++){
                    ctg += "<option value='"+response.category[i].id_kategori+"'>"+response.category[i].nama_kategori+"</option>";
                }
                $("#idCategory").html("<option value='all'>All</option>"+ctg);
            }
        });

        function getData(fil_number,fil_halaman,fil_status,fil_time,fil_search,fil_kategori){
            function countDown(tglStart,tglEnd,status,id){
            for (let i = 0; i < id.length; i++) {

                if(status[i] == "dibuka"){
                    // Update the count down every 1 second
                    var x = setInterval(function() {
                        var countDownDate = new Date(tglEnd[i]).getTime();
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
                        if (distance <= 1) {
                            $(id[i]).remove();
                        }
                        $(id[i]).html(" : "+days + "d " + hours + "h "
                        + minutes + "m " + seconds+"s");
                    }, 1000);   
                }else if(status[i] == "coming_soon"){
                    // Update the count down every 1 second
                    var x = setInterval(function() {
                        var countDownDate = new Date(tglStart[i]).getTime();
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
                        if (distance <= 1) {
                            $(id[i]).remove();
                        }
                        $(id[i]).html(" : "+days + "d " + hours + "h "
                        + minutes + "m " + seconds+"s");
                    }, 1000);   
                }                
            }
        } 
            // GET DATA FORM
            let html ="";
            
            // GET DATA
            $.ajax({
                type: "GET",
                url: "<?= base_url('user/LelangDashboardControllerUser/getDataDiikuti/') ?>"+fil_number,
                data: {
                    fil_halaman : fil_halaman,
                    fil_status : fil_status,
                    fil_time : fil_time,
                    fil_search : fil_search,
                    fil_kategori : fil_kategori,
                },
                dataType: "JSON",
                success: function (response) {
                    let dataAwal = (parseInt(response.row)+1);
                    let dataAkhir = parseInt(response.row)+parseInt(response.countInPage);
                    if(response.allCount > 0){
                        $("#table_info").html("Showing "+dataAwal+" to "+dataAkhir+" of "+response.allCount+" entries");
                    }else{
                        $("#table_info").html("Showing 0 to 0 of 0 entries");
                    }
                    $('#pagination').html(response.pagination);
                    let html = "";
                    for (let i = 0; i < response.result.length; i++) {
                        let tglStart = response.result[i].tgl_dibuka;
                        let tglEnd = response.result[i].tgl_ditutup;
                        let status = response.result[i].status;
                        let idProdukP = ".idprd"+response.result[i].id_barang+$.now();
                        let idProdukL = ".idprl"+response.result[i].id_barang+$.now();

                        $.ajax({
                            type: "POST",
                            url: "<?= base_url(); ?>user/LelangDashboardControllerUser/getJumlahPelelang",
                            data: {
                                id:response.result[i].id_barang
                            },
                            dataType: "JSON",
                            success: function (res) {
                                $(idProdukP).html(res.total);
                                if(res.penawaran > 0){
                                    $(idProdukL).html(formatRupiah(res.penawaran,"Rp. "));
                                }else{
                                    $(idProdukL).html("Rp. 0");
                                }
                            }
                        });


                        arrTglStart.push(tglStart);
                        arrTglEnd.push(tglEnd);
                        arrStatus.push(status);
                        // Template Nama
                        if(response.result[i].nama_barang.length >= 10){
                            templateNama = response.result[i].nama_barang.substring(0, 10)+". . .";
                        }else{
                            templateNama = response.result[i].nama_barang;
                        }
                        // Template Status
                        if(response.result[i].status=="draf"){
                            templateTime = "";
                            templateBidder= "";
                            templatePrice = "<tr>"+
                                                "<td>Initial Price </td>"+
                                                "<td class='px-2'> : "+formatRupiah(response.result[i].harga_awal,'Rp. ')+"</td>"+
                                            "</tr>";
                            templateStatus = "<td  class='pt-3 px-2'> : <span class='bg-warning py-1 px-2  text-white rounded' style='font-size:10px'>Draf</span></td>";
                        }
                        else if(response.result[i].status=="coming_soon"){
                            p = "#pCom"+response.result[i].id_barang+$.now();
                            templatePrice = "<tr>"+
                                                "<td>Initial Price </td>"+
                                                "<td class='px-2'> : "+formatRupiah(response.result[i].harga_awal,'Rp. ')+"</td>"+
                                            "</tr>";
                            templateBidder =    "";
                            templateTime = "<tr>"+
                                                "<td>Opened within </td>"+
                                                "<td class='px-2 timer' id='"+p.substring(1)+"'> :  </td>"+
                                            "</tr>";
                            templateStatus = "<td  class='pt-3 px-2'> : <span class='bg-success py-1 px-2  text-white rounded' style='font-size:10px'>Coming soon</span></td>";
                        }
                        else if(response.result[i].status=="dibuka"){
                            p = "#pOpn"+response.result[i].id_barang+$.now();
                            templatePrice = "<tr>"+
                                                "<td>Initial Price </td>"+
                                                "<td class='px-2'> : "+formatRupiah(response.result[i].harga_awal,'Rp. ')+"</td>"+
                                            "</tr>";
                            templateBidder =    "<tr>"+
                                                    "<td>Bid </td>"+
                                                    "<td class='px-2'> : <span class='"+idProdukP.substring(1)+"' ></span> </td>"+
                                                "</tr>";
                            templateTime = "<tr>"+
                                                "<td>Closed within </td>"+
                                                "<td class='px-2 timer' id='"+p.substring(1)+"'> :  </td>"+
                                            "</tr>";
                            templateStatus = "<td  class='pt-3 px-2'> : <span class='bg-info py-1 px-2  text-white rounded' style='font-size:10px'>Active</span></td>";
                        }else if(response.result[i].status=="ditutup"){
                            templatePrice = "<tr>"+
                                                "<td>Initial Price </td>"+
                                                "<td class='px-2'> : "+formatRupiah(response.result[i].harga_awal,'Rp. ')+"</td>"+
                                            "</tr>"+
                                            "<tr>"+
                                                "<td>Final Price </td>"+
                                                "<td class='px-2'> : <span class='"+idProdukL.substring(1)+"'></span></td>"+
                                            "</tr>";
                            templateBidder =    "<tr>"+
                                                    "<td>Bid </td>"+
                                                    "<td class='px-2'> : <span class='"+idProdukP.substring(1)+"' ></span> </td>"+
                                                "</tr>";
                            templateTime = "<tr>"+
                                                "<td>Closed at </td>"+
                                                "<td class='px-2 timer'> : "+tglEnd+" </td>"+
                                            "</tr>";
                            templateStatus = "<td  class='pt-3 px-2'> : <span class='bg-danger py-1 px-2  text-white rounded' style='font-size:10px'>Closed</span></td>";
                        }

                        html +=  "<div class='col-sm-12 col-lg-6 col-md-6 mt-3 d-flex align-items-stretch' id='produk"+response.result[i].id_barang+"'>"+
                        "<div  class='w-100 shadow' onmouseover='$( this ).children( `.shadow` ).css( `display`, `block` )' onmouseout='$( this ).children( `.shadow` ).css( `display`, `none` )'>"+
                            "<div class=' position-absolute shadow' style='top:0;right:0.9rem;left:0.9rem;bottom:0;z-index:1; background:rgba(49, 98, 141, 0.3);display:none;' >"+
                                "<div class='px-5 h-100'>"+
                                    "<div class='h-100 d-flex justify-content-center align-items-center py-2'>"+
                                        "<a data-placement='bottom' title='Detail' class='btn btn-info mx-2 text-center  rounded-pill' href='<?= base_url(); ?>produk/detail?prdk="+response.result[i].id_barang+"&&nm="+url_set(response.result[i].nama_barang)+"' > <i class='fa fa-book px-2'></i> Detail </a>"+
                                    "</div>"+
                                "</div>"+
                            "</div>"+
                            "<div class='row'>"+
                            "<div class='col-lg-5 col-md-12 col-sm-6 py-3'>"+
                                "<img src='<?= base_url('assets/img/produk/') ?>"+response.result[i].foto+"' class='w-100' alt='"+response.result[i].foto+"'>"+
                            "</div>"+
                            "<div class='col-lg-7 col-md-12 col-sm-6 d-flex align-items-center justify-content-center'>"+
                                "<div class=''>"+
                                    "<table class='my-5'>"+
                                        "<tr>"+
                                            "<td>Name </td>"+
                                            "<td class='px-2'> : "+templateNama+"</td>"+
                                        "</tr>"+
                                        templatePrice+
                                        "<tr>"+
                                            "<td>Category </td>"+
                                            "<td class='px-2'> : "+response.result[i].nama_kategori+" </td>"+
                                        "</tr>"+
                                        templateBidder+
                                        templateTime+
                                        "<tr>"+
                                            "<td class='pt-3'>Status </td>"+
                                            templateStatus+
                                        "</tr>"+
                                    "</table>"+

                                "</div>"+
                            "</div>"+
                        "</div>"+
                        "</div>"+
                    "</div>";
                    arrP.push(p); 
                    }
                    // let arrayTgl = [arrTgl];

                    // $('#konten').remove();
                    $('#konten').html(html);
                    // Count Down
                    countDown(arrTglStart,arrTglEnd,arrStatus,arrP);

                }
            });

            // GET DATA ACTIVITY
            $.ajax({
                type: "GET",
                url: "<?= base_url('user/HomeDashboardControllerUser/checkActivity') ?>",
                data: "",
                dataType: "JSON",
                success: function (response) {
                    count = response; 
                }
            });
        }
        // // ========================================= //
        // // ========== END READ FUNCTION ============ //
        // // ========================================= //
        
        // .GET DATA SIDEBAR
        function all(){
              $.ajax({
                  type: "GET",
                  url: "<?= base_url('user/HomeDashboardControllerUser/getData') ?>",
                  data: "",
                  dataType: "JSON",
                  success: function (response) {
                    
                    // Chart                    
                    // chart(dataChart);
                    let html="";
                    $('#name').html(response.name);
                    $('#level').html("Masyarakat");
                    $('#user').addClass('countAnim');
                    $('#fotoProfile').attr("src","<?= base_url()?>assets/img/profile/"+response.foto);
                      
                  }
              });
          }

        // CHEDK DATA IN TABLE tb_aktifitas
        function checkActivity(){
            $.ajax({
                type: "GET",
                url: "<?= base_url('user/HomeDashboardControllerUser/checkActivity') ?>",
                data: "",
                dataType: "JSON",
                success: function (response) {
                    count2 = response; 
                }
            });
        }       

        // //REALTIME
        let click = "FALSE";
        let eclick = "FALSE";
        let bwidthStart = $("body").width();
        let removeArray = "FALSE";
        function realTime(){          
            all();

            checkActivity();
            if(count != count2){
                getData(fil_number,fil_halaman,fil_status,fil_time,fil_search,fil_kategori);
            }

            // ONLINE CHECK
            let status="";
            if(navigator.onLine) {
                status ="<i class='fa fa-circle'></i>"+
                        "<span>Online</span>";
                $('.user-status').html(status);
            }else{
                status ="<i class='fa fa-circle text-secondary'></i>"+
                        "<span>Offline</span>";
                $('.user-status').html(status);
            }         
        }
        let interval = setInterval(realTime,500);

        // CALL FUNCTION
        all();
        checkActivity();
        getData(fil_number,fil_halaman,fil_status,fil_time,fil_search,fil_kategori);
        
    </script>
    <!-- ===== END JAVASCRIPT ===== -->

</body>
<!-- ===== END BODY =====  -->

</html>