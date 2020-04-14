<!doctype html>
<html lang="en">
  <?php $this->load->view('user/_partials/head'); ?>
  <body style="color:#495057">
    <section class="banner-one-detail">
        <?php $this->session->set_userdata("halaman","detail") ?>
        <?php $this->load->view('user/_partials/navbar'); ?>
        
        <div class="bg-white pt-5 px-lg-4 px-md-5" style="border-top-left-radius:20px;border-top-right-radius:20px;margin-top: 7rem!important;border-top:5px solid orange;" >
            <div class="row">
                <div class="col-lg-4 col-md-12 col-12 col-sm-12 px-5">
                    <img class="w-100 position-relative" id="detailImage" src="" style="border-radius:20px;bottom:130px;border: 5px;border:5px solid orange;" alt="">
                    <div class="form-group mt-3 px-3 position-relative py-3 card" style="bottom:115px;">
                      <label for="">Harga Awal :</label>
                      <input type="text"
                        class="form-control bg-white" name="" id="hargaAwal" readonly aria-describedby="helpId" placeholder="">
                      <div class="" id="footDiv">

                      </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-7 col-md-6 col-12 col-sm-12   px-5">
                            <h3 class="pb-3" style="color: #292973;font-weight:700;font-size:2.5rem;" id="detailNama" ></h3>
                            <p> <span>Deskripsi :</span> </p>
                            <textarea disabled name="" id="detailDeskripsi" class="form-control mb-4 bg-white " style="overflow:hidden;border:none;resize:none;padding:0;">
                            
                            </textarea>
                        </div>
                        <div class="col-lg-5 col-md-6 col-12 col-sm-12 px-sm-5 px-5 px-md-0 pxlg-0 px-xl-0">
                            <h3 class="pb-3 invisible d-lg-block d-md-none d-sm-none d-none d-xl-block" style="color: #292973;font-weight:700;font-size:2.5rem;" >Top</h3>
                            <table>
                                <tr class="w-100" style="">
                                    <td class=' pb-1'>
                                        Tgl Dibuka
                                    </td>
                                    <td class="pb-1" id="detailTglDibuka">
                                    </td>
                                </tr>
                                <tr class="w-100" style="">
                                    <td class=' pb-1'>
                                        Tgl Ditutup
                                    </td>
                                    <td class="pb-1" id="detailTglDitutup">
                                    
                                    </td>
                                </tr>
                                <tr id="sisaWaktu" class="w-100" style="">
                                    
                                </tr>
                                <tr>
                                    <td class=' pb-1'>Kategori </td>
                                    <td class="pb-1" id="detailKategori"> </td>
                                </tr>
                                <tr id="berat">
                                    
                                </tr>
                                <tr>
                                    <td>Pelelang</td>
                                    <td id="detailPelelang"> : </td>
                                </tr>
                                <tr>
                                    <td class="py-3 text-right">
                                        <button type="button" onclick="pelelang()" class="btn btn-sm text-white" style="background-image: linear-gradient(315deg, #2a2a72 0%, #009ffd 50%);">Tampilkan Pelelang</button>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 px-5 mb-5">
                            <p> <span>Lokasi :</span> <span id="lokasi"></span> </p> <br>
                            <div class="card card-body mt-1">
                                <textarea disabled name="" id="detailAlamat" class="form-control mb-1 bg-white py-4 px-5" style="overflow:hidden;border:none;resize:none;padding:0;">
                                
                                </textarea>
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
        
        // Tampilkan Pelelang
        function pelelang(){
            let html = "";
            let head = "<thead>"+
                            "<tr>"+
                                "<th>No</th>"+
                                "<th>Photo</th>"+
                                "<th>Nama</th>"+
                                "<th>Tgl Lelang</th>"+
                                "<th>Harga Ditawar</th>"+
                            "</tr>"+
                        "</thead>"+
                        "<tbody>";
                footer ="</tbody>"+
                        "<tfoot>"+
                            "<tr>"+
                                "<th>No</th>"+
                                "<th>Photo</th>"+
                                "<th>Nama</th>"+
                                "<th>Tgl Lelang</th>"+
                                "<th>Harga Ditawar</th>"+
                            "</tr>"+
                        "</tfoot>";
            let id = "<?= $id ?>";
            $("#modalPelelang").modal("show");
            $.ajax({
                type: "GET",
                url: ci_base+"user/DetailControllerUser/getDataPelelang",
                data: {
                    id:id
                },
                dataType: "JSON",
                success: function (response) {
                    let loginCek = "<?= $this->session->userdata('login_user'); ?>"
                    let id_user = 0;
                    if(loginCek == "true"){
                        id_user = "<?= $this->session->userdata('id_user'); ?>";
                        id_user = parseInt(id_user);
                    }

                    for (let i = 0; i < response.length; i++) {
                        if( response[i].id_user == id_user ){
                            html+=  "<tr class='text-primary'>"+
                                    "<td class='align-middle'>"+((i)+1)+"</td>"+
                                    "<td class='align-middle'><img style='width:100px' class='rounded-circle' src='<?= base_url(); ?>assets/img/profile/"+response[i].foto+"' alt='"+response[i].foto+"'></td>"+
                                    "<td class='align-middle'>"+response[i].nama_lengkap+"</td>"+
                                    "<td class='align-middle'>"+response[i].create_at+"</td>"+
                                    "<td class='align-middle'>"+formatRupiah(response[i].penawaran_harga,"Rp. ")+"</td>"+
                                "</tr>";
                        }else{
                            html+=  "<tr>"+
                                    "<td class='align-middle'>"+((i)+1)+"</td>"+
                                    "<td class='align-middle'><img style='width:100px' class='rounded-circle' src='<?= base_url(); ?>assets/img/profile/"+response[i].foto+"' alt='"+response[i].foto+"'></td>"+
                                    "<td class='align-middle'>"+response[i].nama_lengkap+"</td>"+
                                    "<td class='align-middle'>"+response[i].create_at+"</td>"+
                                    "<td class='align-middle'>"+formatRupiah(response[i].penawaran_harga,"Rp. ")+"</td>"+
                                "</tr>";
                        }
                    }
                    let tb = head+html+footer;
                    $(".tablePelelang").html(tb);
                    $('.tablePelelang').DataTable();
                }
            });
        }

        // Lelang
        function lelang(){
            let loginCek = "<?= $this->session->userdata('login_user'); ?>"
            if(loginCek != "true"){
                Swal.fire({
                title: 'Silahkan Login',
                text: "Untuk mengikuti lelang",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Login'
                }).then((result) => {
                if (result.value) {
                    $("#modalLogin").modal('show');
                }
                });
            }else{
                let MinHrg = $("#tawarHarga").attr("min");
                let hrg = $("#tawarHarga").val();
                hrgs = formatRupiah(hrg, "Rp. ");
                Swal.fire({
                title: 'Anda Yakin',
                text: "Menawar dengan harga "+hrgs,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yakin',
                cancelButtonText: 'Tidak'
                }).then((result) => {
                if (result.value) {
                    if( MinHrg <= hrg){
                        $.ajax({
                            type: "POST", 
                            url: "<?= base_url('user/DetailControllerUser/Lelang') ?>",
                            data: {
                                'tawaran': hrg,
                                'id': <?= $id ?>
                            },
                            dataType: "JSON",
                            success: function (response) {
                                
                                Swal.fire(
                                'Success',
                                'Penawaran Berhasil Ditambahkan',
                                'success'
                                )               
                            }
                        });
                    }else{
                        Swal.fire(
                        'Error',
                        'Harga yang anda tawar kurang dari minimal harga',
                        'error'
                        )
                    }
                }else{
                    Swal.fire(
                    'Success',
                    'Penawaran Dibatalkan',
                    'success'
                    )
                }
                });
            }
        }

        let tawar = 0;
        function getData(){
            function countDown(tgl,id){
                // Update the count down every 1 second
                var x = setInterval(function() {
                    var countDownDate = new Date(tgl).getTime();
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
                    
                    $(id).html(" : "+days+"d "+hours+"h "+minutes+"m "+seconds+"s");
                }, 1000);   
            }
            let id = "<?= $id ?>";
            $.ajax({
                type: "POST", 
                url: ci_base+"user/DetailControllerUser/getData",
                data: {
                    id:id
                },
                dataType: "JSON",
                success: function (response) {
                    let stts = response.lelang.status;
                    let tmplt = "";
                    let harga_akhir = 0;
                    let pemenang = "Tidak Ada Pemenang";
                    let idWaktu = "";
                    let cd = "";
                    if(stts == "ditutup"){
                        if(response.cek.penawaran){
                            harga_akhir = response.cek.penawaran;
                            pemenang =  "<table class='w-100'>"+
                                            "<tr>"+
                                                "<td class='align-middle'>"+
                                                    "<img width='70' class='rounded-circle' src='<?= base_url(); ?>assets/img/profile/"+response.cek.foto+"'>"+
                                                "</td>"+
                                                "<td class='align-middle text-center'>"+
                                                    response.cek.nama_lengkap+
                                                "</td>"+
                                            "</tr>"+
                                        "</table>";
                        }
                        tmplt = "<label class='mt-2' for=''>Harga Akhir : </label>"+
                                "<input type='text'"+
                                    "class='form-control bg-white' readonly name='' value='"+harga_akhir+"' aria-describedby='helpId' placeholder=''>"+
                                    "<label class='mt-2' for=''>Pemenang : </label>"+
                                    "<div class='card px-3 py-3 text-center'>"+
                                        pemenang+
                                    "</div>";
                        $("#footDiv").html(tmplt);
                        cd = "";
                    }else{
                        tmplt = "<label class='mt-2' for=''>Tawar Harga : </label>"+
                                "<input type='number' step='1000'"+
                                    "class='form-control' name='' id='tawarHarga' aria-describedby='helpId' placeholder=''>"+
                                "<small id='helpId' class='form-text text-muted'>Min <span id='minHarga'></span></small>"+
                                "<div class='w-100'>"+
                                    "<button type='button' onclick='lelang()' class='btn mt-3 text-white py-2 w-100' style='background-image: linear-gradient(315deg, #fc575e 0%,#f7b42c  95%);'>SUBMIT</button>"+
                                "</div>";
                        $("#footDiv").html(tmplt);
                        idWaktu = "#"+$.now();
                        cd =    "<td class=' pb-1' >Sisa Waktu</td >"+
                                    "<td class='pb-1' id='"+idWaktu.substring(1)+"'></td>";
                    }

                    countDown(response.lelang.tgl_ditutup,idWaktu);
                    $("#sisaWaktu").html(cd);
                    if(response.cek.penawaran > 0){
                        tawar = parseInt(response.cek.penawaran)+1000;
                        tawarStr = tawar.toString();
                    }else{
                        tawar = parseInt(response.lelang.harga_awal)+1000;
                        tawarStr = tawar.toString();
                    }
                    $("#detailImage").attr("src",ci_base+"assets/img/produk/"+response.lelang.foto);
                    $("#detailNama").html(response.lelang.nama_barang);
                    $("#detailDeskripsi").html(response.lelang.deskripsi_barang);
                    $("#tawarHarga").val(tawar);
                    $("#detailPelelang").html(" : "+response.cek.total);
                    $("#tawarHarga").attr("min",tawar);
                    $("#hargaAwal").val(formatRupiah(response.lelang.harga_awal, "Rp "));
                    $("#minHarga").html(formatRupiah(tawarStr, "Rp "));
                    $("#detailKategori").html(" : "+response.lelang.nama_kategori);
                    $("#detailTglDibuka").html(" : "+response.lelang.tgl_dibuka);
                    $("#detailTglDitutup").html(" : "+response.lelang.tgl_ditutup);
                    $("#detailAlamat").html(response.lelang.alamat);
                    $("#lokasi").html(response.lelang.type+" "+response.lelang.nama_kota);
                    if(response.lelang.weight != 0){
                        let tmp =   "<td class='' >Berat </td>"+
                                    "<td id='detailBerat'> : "+response.lelang.weight+" Gram</td>";
                        $("#berat").html(tmp);
                    }
                    
                    // $("#detailBerat").html(" : "+response.lelang.weight);

                    let height =0;
                    let txt = document.getElementById('detailDeskripsi');
                    txt.style.height = "1px";
                    height = txt.scrollHeight;
                    txt.style.height = (2+height)+"px";
                    height =0;
                    txt = document.getElementById('detailAlamat');
                    txt.style.height = "1px";
                    height = txt.scrollHeight;
                    txt.style.height = (2+height)+"px";
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

        // MAKE REALTIME DATA
        function realTime(){
            // if($("#tawarHarga").val() < tawar ){
            //     $("#tawarHarga").val(tawar);
            // }
            $("#tawarHarga").attr("min",tawar);
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