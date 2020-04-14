<!-- ===== LOAD HEAD =====-->
<?php $this->load->view('admin/_partials/head');?>
<!-- ===== END HEAD =====-->


<!-- ===== START BODY =====  -->
<body>

    <!-- ===== PAGE WRAPPER ===== -->
    <div class="page-wrapper chiller-theme toggled">
        <!-- ===== LOAD SIDEBAR ===== -->
        <?php $this->load->view('admin/_partials/sidebar');?>
        <!-- ===== END SIDEBAR ===== -->


        <!-- ===== PAGE CONTENT ===== -->
        <main class="page-content pt-0">
            <div class="container-fluid py-0 px-3" id="container" style="width:95%">
                <div class="row">
                    <div class="col-lg-8 bg-white shadow py-4 px-5 mt-4 d-flex justify-content-stretch">
                        <div class="row">
                            <div class="col-lg-5 d-flex mt-4 justify-content-stretch px-0">
                                <div class="h-100 w-100 d-flex align-items-center">
                                    <img class="w-100 rounded-circle img-thumbnail shadow" id="img" src="" alt="">
                                </div>
                            </div>
                            <div class="col-lg-7 py-4 mt-4 justify-content-stretch">
                                <h2 id="nama" ></h2>
                                <p style="font-size:1.2rem" class="w-100 py-2 px-4 text-muted" >Harga Awal : <span id="harga_awal" > </span> <br> Harga Akhir : <span id="harga_akhir" > </span> </p>
                                <div class="px-3">
                                    <div class="card" >
                                        <textarea name="" class="form-control bg-white px-4 py-4" id="alamat" style="border:none;resize:none" readonly  cols="30" rows="3"></textarea>
                                    </div>
                                </div>
                                <!-- <textarea name="" id="" cols="30" rows="4">Dusun krajan rt 007 rw 004 desa sukorejo kecamatan tugu kabupaten trenggalek jawa timur</textarea> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 px-0 px-lg-4 d-flex mt-4 justify-content-stretch">
                        <div class="w-100 bg-white shadow px-4 py-4">
                        <h3>Lokasi Produk : </h3>
                            <div class="form-group mt-4">
                              <label for="">Provinsi : </label>
                              <input type="text"
                                class="form-control bg-white" name="" readonly id="provinsi_asal" aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="form-group mt-4">
                              <label for="">Kabupaten / Kota : </label>
                              <input type="text"
                                class="form-control bg-white" name="" readonly id="kota_asal" aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="form-group mt-4">
                              <label for="">Status Ongkir : </label>
                              <input type="text"
                                class="form-control bg-white" readonly id="ongkir_status" aria-describedby="helpId" placeholder="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row my-5">
                    <div class="col-lg-12 bg-white shadow py-5 px-5">
                        <h2>Data Pemenang </h2>
                         <hr>
                         <div class="row">
                             <div class="col-lg-4 py-4 d-flex align-items-center justify-content-center">
                                <img id="foto_user" class="w-75" src="" alt="">
                             </div>
                            <div class="col-lg-4 d-flex align-items-center">
                                <div class="w-100 px-0">
                                    <div class="form-group">
                                        <label for="">Nama Lengkap :</label>
                                        <input type="text"
                                            class="form-control bg-white" readonly name="" id="nama_user" aria-describedby="helpId" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Nomor Telp :</label>
                                        <input type="text"
                                            class="form-control bg-white" readonly name="" id="telp_user" aria-describedby="helpId" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 d-flex align-items-center d-none" id='pilih'>
                                <div class="w-100 px-0">
                                    <div class="form-group">
                                    <label for="">Provinsi</label>
                                    <select class="form-control" placeholder="Pilih Provinsi" name="" id="prov_user">
                                    </select>
                                    </div>
                                    <div class="form-group">
                                    <label for="">Kota</label>
                                    <select class="form-control" name="" id="kota_user" placeholder="Pilih Kota">
                                        <option></option>
                                    </select>
                                    <input type="hidden" id="berat">
                                    <input type="hidden" id="asal">
                                    <input type="hidden" id="user" value ="<?= $id_user ?>">

                                    <!-- lengkapi -->
                                    <input type="hidden" id="hprovinsi">
                                    <input type="hidden" id="hkota">
                                    <input type="hidden" id="hstatus_ongkir">
                                    <input type="hidden" id="hbarang" value ="<?= $id ?>">

                                    <input type="hidden" id="hjasa_pengiriman">
                                    <input type="hidden" id="service">
                                    <input type="hidden" id="hakhir">
                                    <input type="hidden" id="hongkir" value="0">
                                    <input type="hidden" id="htotal" value="0">
                                    
                                    </div>
                                </div>
                            </div>
                         </div>
                    </div>
                </div>
                <div class="row my-5">
                    <div class="col-lg-12 bg-white shadow py-5 px-5">
                        <h2>Pembayaran</h2>
                         <hr>
                         <div class="row">
                             <div class="col-lg-8">
                                <h6 class="text-muted d-none ongkir" >Pilih Jasa Pengiriman : </h6>
                                <div class="card py-3 mb-5 px-4 mt-4 d-none ongkir tampilanOngkir">
                                <form id="tampilanOngkir">
                                
                                </form>    
                                </div>
                             </div>
                            <div class="col-lg-4">
                                <div class="bg-primary text-white w-100 pt-5 pb-4 px-4" style="border-radius:20px">
                                    <h5>Detail Pembayaran</h5>
                                    <hr style="background: white; border: 2px solid white">
                                    <table class="w-100">
                                        <tr>
                                            <td class="py-1 w-50">Harga Tawar</td>
                                            <td class="py-1 w-50 text-right" id="harga_tawar"> </td>
                                        </tr>
                                        <tr>
                                            <td class="py-1 w-50 ongkir">Ongkos Kirim</td>
                                            <td class="py-1 w-50 text-right ongkir" id="ongkos_kirim">Rp. 0</td>
                                        </tr>
                                        <tr>
                                            <td class="py-1" colspan="2">
                                            <hr style="background: white; border: 2px solid white">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="py-1 w-50"> <b>Harga Total</b> </td>
                                            <td class="py-1 w-50 text-right"> <b id="harga_total" ></b> </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="my-5 py-4 px-2 card d-none" id="showInvoice">
                                    
                                </div>
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
    <?php $this->load->view('admin/_partials/foot');?>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <!-- ===== END FOOT ===== -->

    <!-- ===== START JAVASCRIPT ===== -->
    <script>
        // DEKLARASI
        let count =0;
        let count2 =0;

        // =========================================== //
        // ========== START READ FUNCTION ============ //
        // =========================================== //
        function getData(){
            $.ajax({
                type: "GET",
                url: "<?= base_url('admin/DetailPaymentControllerAdmin/MetodePembayaran') ?>",
                dataType: "JSON",
                success: function (response) {
                    let metodeHtml = "";
                    for (let i = 0; i < response.length; i++) {
                        metodeHtml +=   "<tr>"+
                                            "<td colspan='2'> <hr></td>"+
                                        "</tr>"+
                                        "<tr>"+
                                            "<td class='text-muted w-50' >Bank</td>"+
                                            "<td class='text-muted w-50 text-right' >"+response[i].nama_bank+"</td>"+
                                        "</tr>"+
                                        "<tr>"+
                                            "<td class='text-muted w-50 ' >No. Rekening</td>"+
                                            "<td class='text-muted w-50 text-right' >"+response[i].nama_penerima+"</td>"+
                                        "</tr>"+
                                        "<tr>"+
                                            "<td class='text-muted w-50' >Penerima</td>"+
                                            "<td class='text-muted w-50 text-right' >"+response[i].rekening+"</td>"+
                                        "</tr>";
                    }
                    $("#metodeHtml").html(metodeHtml);
                }
            });  


            // Get Provinsi
            $.ajax({
                type: "GET",
                url: "<?= base_url('admin/DetailPaymentControllerAdmin/DataProvinsi') ?>",
                dataType: "JSON",
                success: function (response) {
                    let provHtml = "<option value=''> </option>";
                    for (let i = 0; i < response.length; i++) {
                        provHtml += "<option value='"+response[i].id_provinsi+"'> "+response[i].nama_provinsi+" </option>";
                    }
                    $("#prov_user").html(provHtml);
                }
            });
            let id = <?= $id ?>;
            // GET DATA
            $.ajax({
                type: "GET",
                url: "<?= base_url('admin/DetailPaymentControllerAdmin/getData') ?>",
                data: {
                    id:id
                },
                dataType: "JSON",
                success: function (response) {
                    $('#nama').html(response.nama_barang);
                    $('#harga_awal').html(formatRupiah(response.harga_awal,"Rp. "));
                    $('#harga_tawar').html(formatRupiah(response.tawaran,"Rp. "));
                    $('#hakhir').val(response.tawaran);
                    $('#harga_akhir').html(formatRupiah(response.tawaran,"Rp. "));
                    $('#alamat').html("Alamat Lengkap : "+response.alamat);
                    $("#img").attr("src", "<?= base_url('assets/img/produk/') ?>"+response.foto);
                    $("#foto_user").attr("src", "<?= base_url('assets/img/profile/') ?>"+response.foto_user);
                    $("#nama_user").val(response.nama_lengkap);
                    $("#telp_user").val(response.telp);
                    $("#berat").val(response.weight);
                    $("#asal").val(response.id_kota);   
                    $("#harga_total").html(formatRupiah(response.tawaran, "Rp. "));                 
                
                    if(response.weight == 0){
                        $("#ongkir_status").val("Tanpa Ongkir"); 
                        $("#hstatus_ongkir").val("no"); 
                        $(".ongkir").remove();                       
                    }else{
                        $("#hstatus_ongkir").val("yes"); 
                        $("#ongkir_status").val("Dengan Ongkir");                        
                    }
                    let height =0;
                    let txt = document.getElementById('alamat');
                    txt.style.height = "1px";
                    height = txt.scrollHeight;
                    txt.style.height = (2+height)+"px";

                    // lokasi produk
                    let id_kota = response.id_kota;
                    $.ajax({
                        type: "GET",
                        url: "<?= base_url('admin/DetailPaymentControllerAdmin/Lokasi') ?>",
                        data: {
                            id:id_kota
                        },
                        dataType: "JSON",
                        success: function (response) {
                            $("#provinsi_asal").val(response.provinsi.nama_provinsi);
                            $("#kota_asal").val(response.kota.nama_kota);
                        }
                    }); 
                }
            });

            // console.log(<?= $id_user ?>);
            $.ajax({
                type: "GET",
                url: "<?= base_url('admin/DetailPaymentControllerAdmin/DataBayar') ?>",
                data: {
                    id:<?= $id ?>,
                    id_user: <?= $id_user ?>,
                },
                dataType: "JSON",
                success: function (response) {
                    if(response.count > 0){
                        console.log(response.count);
                        $.ajax({
                            type: "GET",
                            url: "<?= base_url('admin/DetailPaymentControllerAdmin/DataProvinsi') ?>",
                            dataType: "JSON",
                            success: function (r) {
                                let provHtml = "<option value=''> </option>";
                                for (let i = 0; i < r.length; i++) {
                                    provHtml += "<option value='"+r[i].id_provinsi+"'> "+r[i].nama_provinsi+" </option>";
                                }
                                $("#prov_user").html(provHtml);
                                $("#prov_user").val(response.real.id_provinsi);
                                $("#prov_user").addClass('bg-white');
                                $('#prov_user').prop('disabled', true);
                                id = response.real.id_provinsi;
                                $.ajax({
                                    type: "POST",
                                    url: "<?= base_url('admin/DetailPaymentControllerAdmin/DataKota') ?>",
                                    data: {
                                        id:id,
                                    },
                                    dataType: "JSON",
                                    success: function (re) {
                                        let kotaHtml = "<option value=''> </option>";
                                        for (let i = 0; i < re.length; i++) {
                                            kotaHtml += "<option value='"+re[i].id_kota+"'> "+re[i].nama_kota+" </option>";
                                        }
                                        $("#kota_user").html(kotaHtml);
                                        $("#kota_user").val(response.real.id_kota);
                                        $("#kota_user").addClass('bg-white');
                                        $('#kota_user').prop('disabled', true);
                                    }
                                }); 
                            }
                        });
                        if(response.real.ongkir > 0){
                            $(".ongkir").removeClass("d-none");
                            $("#tampilanOngkir").html("<h6 class='mt-3'>"+response.real.jasa_pengiriman+"</h6> <p class='px-4'> <i class='fas fa-check'></i> "+response.real.service+"</p>");
                            $("#ongkos_kirim").html(formatRupiah(response.real.ongkir,"Rp. "));                            
                        }
                        $("#harga_tawar").html(formatRupiah(response.real.harga_tawar,"Rp. "));
                        $("#harga_total").html(formatRupiah(response.real.total,"Rp. "));
                        $("#lanjutPembayaran").remove();
                        

                    }else{
                        $("#pilih").remove();
                    }
                }
            });
            
            // GET DATA ACTIVITY
            $.ajax({
                type: "GET",
                url: "<?= base_url('admin/CategoryControllerAdmin/checkActivity') ?>",
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
                url: "<?= base_url('admin/DashboardControllerAdmin/getData') ?>",
                data: "",
                dataType: "JSON",
                success: function (response) {
                    $('#name').html(response.name);
                    $('#level').html(response.level);
                    $('#fotoProfile').attr("src","<?= base_url()?>assets/img/profile/"+response.foto);
                }
            });
        }
        // CHEDK DATA IN TABLE tb_aktifitas
        function checkActivity(){
            $.ajax({
                type: "GET",
                url: "<?= base_url('admin/CategoryControllerAdmin/checkActivity') ?>",
                data: "",
                dataType: "JSON",
                success: function (response) {
                    count2 = response; 
                }
            });
        }       

        // //REALTIME

        function realTime(){          
            all();

            checkActivity();
            if(count != count2){
                getData();
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
        getData();
        
    </script>
    <!-- ===== END JAVASCRIPT ===== -->

</body>
<!-- ===== END BODY =====  -->

</html>