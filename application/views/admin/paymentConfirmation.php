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
            <div id="container" class="container-fluid py-5 bg-white shadow" style="width:95%;overflow:auto">
            
            </div>
        </main>
        <!-- ===== END PAGE CONTENT ===== -->

        
    </div>
    <!-- ===== END WRAPPER ===== -->


    <!-- ===== LOAD FOOT ===== -->
    <?php $this->load->view('admin/_partials/foot');?>
    <!-- ===== END FOOT ===== -->

    <!-- ===== START JAVASCRIPT ===== -->
    <script>
        // DEKLARASI
        let count =0;
        let count2 =0;      
        

        function aksi(id,status){
            $.ajax({
                type: "POST",
                url: "<?= base_url(); ?>admin/ConfirmationControllerAdmin/konfirmasi",
                data: {
                    id : id,
                    status :status
                },
                dataType: "JSON",
                success: function (response) {
                    Swal.fire(
                    'Success',
                    'Perubahan Disimpan',
                    'success'
                    )
                }
            });
        }


        function detail(id){
            $("#cekKonfirmasi").modal('show');
            $.ajax({
                type: "POST",            
                url: "<?= base_url(); ?>admin/ConfirmationControllerAdmin/getDetail",
                data: {
                    id:id
                },
                dataType: "JSON",
                success: function (response) {
                    $("#cekNama").val(response.pengirim);
                    $("#cekTujuan").val(response.nama_bank+" ("+response.rekening+")");
                    $("#cekJumlah").val(formatRupiah(response.transfer,"Rp. "));
                    $("#cekTanggal").val(response.tgl_pembayaran);
                    $("#cekNo").val(response.invoice);

                }
            });
        }

        // =========================================== //
        // ========== START READ FUNCTION ============ //
        // =========================================== // 
        // GET DATA IN DATA TABLES
        function getData(){

        let html = "";
        let head =  "<table id='table' class='table table-striped table-bordered w-100 dataTable'>"+
                    "<thead>"+
                        "<tr>"+
                            "<th class='text-center align-middle' rowspan='2'>No</th>"+
                            "<th colspan='2' class='text-center' >Data Pemenang</th>"+
                            "<th colspan='2' class='text-center' >Data Lelang</th>"+
                            "<th colspan='3' class='text-center' >Data Transaksi</th>"+
                            "<th rowspan='2' class='text-center' >Aksi</th>"+
                        "</tr>"+
                        "<tr>"+
                            "<th>Photo</th>"+
                            "<th>Nama</th>"+
                            "<th>Photo</th>"+
                            "<th>Nama Produk</th>"+
                            "<th>Konfir User</th>"+
                            "<th>Konfir Admin</th>"+
                            "<th>Detail</th>"+
                        "</tr>"+
                    "</thead>"+
                    "<tbody>";
            footer ="</tbody>"+
                    "<tfoot>"+
                        "<tr>"+
                            "<th>No</th>"+
                            "<th>Photo</th>"+
                            "<th>Nama</th>"+
                            "<th>Photo</th>"+
                            "<th>Nama Produk</th>"+
                            "<th>Konfir User</th>"+
                            "<th>Konfir Admin</th>"+
                            "<th>Detail</th>"+
                            "<th class='text-center' >Aksi</th>"+
                        "</tr>"+
                    "</tfoot></table>";
        $.ajax({
            type: "GET",
            url: "<?= base_url(); ?>admin/ConfirmationControllerAdmin/getData",
            dataType: "JSON",
            success: function (response) {
                let konf_user = "";                   
                let konf_admin = "";     
                let btnAksi = "";              
                let detail = "";
                for (let i = 0; i < response.length; i++) {     
                    if(response[i].konfirmasi_user == 0){
                        konf_user = "<b class='text-danger'> BELUM </b>";
                        detail = "<button type='button' class='btn btn-danger btn-sm'>CEK</button>"; 
                        btnAksi = "<button type='button' disabled class='btn btn-sm mt-2 btn-success' style='width:110px'><i class='fas fa-check'></i> Konfirmasi </button> <button type='button' class='btn btn-sm mt-2 btn-info' style='width:110px' onclick='window.location.href =`<?= base_url() ?>admin/payment?prdk="+response[i].id_barang+"&&id="+response[i].id_user+"&&nm="+url_set(response[i].nama_barang)+"`' > <i class='fa fa-book'></i> Detail </button>";
                    }else if(response[i].konfirmasi_user == 1){
                        konf_user = "<b class='text-success'> SUDAH </b>";
                        detail = "<button type='button' onclick='detail("+response[i].id_checkout+")' class='btn btn-success btn-sm'>CEK</button>"; 
                        btnAksi = "<button type='button' onclick='aksi("+response[i].id_checkout+","+1+")' class='btn btn-sm mt-2 btn-success' style='width:110px'><i class='fas fa-check'></i> Konfirmasi </button> <button type='button' class='btn btn-sm mt-2 btn-info' style='width:110px' onclick='window.location.href =`<?= base_url() ?>admin/payment?prdk="+response[i].id_barang+"&&id="+response[i].id_user+"&&nm="+url_set(response[i].nama_barang)+"`' > <i class='fa fa-book'></i> Detail </button>";
                    }else{
                        konf_user = "<b class='text-danger'> BELUM </b>";
                        detail = "<button type='button' class='btn btn-danger btn-sm'>CEK</button>"; 
                        btnAksi = "<button type='button' disabled class='btn btn-sm mt-2 btn-success' style='width:110px'><i class='fas fa-check'></i> Konfirmasi </button> <button type='button' class='btn btn-sm mt-2 btn-info' style='width:110px' onclick='window.location.href =`<?= base_url() ?>admin/payment?prdk="+response[i].id_barang+"&&id="+response[i].id_user+"&&nm="+url_set(response[i].nama_barang)+"`' > <i class='fa fa-book'></i> Detail </button>";
                    }
                    if(response[i].konfirmasi_petugas == 0){
                        konf_admin = "<b class='text-danger'> BELUM </b>";
                    }else if(response[i].konfirmasi_petugas == 1){
                        konf_admin = "<b class='text-success'> SUDAH </b>";
                        btnAksi = "<button type='button' onclick='aksi("+response[i].id_checkout+","+0+")' class='btn btn-sm mt-2 btn-danger' style='width:110px'><i class='fas fa-times' ></i> Batalkan</button> <button type='button' class='btn btn-sm mt-2 btn-info' style='width:110px' onclick='window.location.href =`<?= base_url() ?>admin/payment?prdk="+response[i].id_barang+"&&id="+response[i].id_user+"&&nm="+url_set(response[i].nama_barang)+"`' > <i class='fa fa-book'></i> Detail </button>";
                    }else{
                        konf_admin = "<b class='text-danger'> BELUM </b>";
                    }
                    html+=  "<tr>"+
                                "<td class='align-middle text-center'>"+ ((i)+1) +"</td>"+
                                "<td class='align-middle text-center'><img width='100' class='rounded-circle img-thumbnail' src='<?= base_url('assets/img/profile/') ?>"+response[i].foto_user+"' alt='"+response[i].foto_user+"'></td>"+
                                "<td class='align-middle text-center'>"+response[i].nama_lengkap+"</td>"+
                                "<td class='align-middle text-center'><img width='100' class='rounded img-thumbnail' src='<?= base_url('assets/img/produk/') ?>"+response[i].foto+"' alt='"+response[i].foto+"'></td>"+
                                "<td class='align-middle text-center'>"+response[i].nama_barang+"</td>"+
                                "<td class='align-middle text-center'>"+konf_user+"</td>"+
                                "<td class='align-middle text-center'>"+konf_admin+"</td>"+
                                "<td class='align-middle text-center'>"+detail+"</td>"+
                                "<td class='align-middle text-center'>"+btnAksi+"</td>"+
                            "</tr>";
                }
                let tb = head+html+footer;
                $("#container").html(tb);
                $('#table').DataTable();

                // $('.table').DataTable();
                // $(".table").addClass("table-responsive");
                addButton();
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

        // ========================================= //
        // ========== END READ FUNCTION ============ //
        // ========================================= // 



        // ======================================= //
        // ========== UPDATE FUNCTION ============ //
        // ======================================= //
        // CLICK EDIT BUTTON IN ACTION TABLE
        
        // =========================================== //
        // ========== END UPDATE FUNCTION ============ //
        // =========================================== //





        // **************** OTHER FUNCTION ****************
        
        // ADD BUTTON ADD USER
        function addButton(){
            // Mengatur responsive data tables bagian show
            $('#table_length').parent().removeClass('col-md-6');
            $('#table_length').parent().addClass('col-md-6');
            $('#table_length').parent().addClass('col-lg-6');

            // Mengatur responsive data tables bagian search
            $('#table_filter').parent().removeClass('col-md-6');
            $('#table_filter').parent().addClass('col-md-6');
            $('#table_filter').parent().addClass('col-lg-6');
            $('#table_filter').children().addClass('float-lg-right');
            $('#table_filter').children().addClass('float-md-right');
            $('#table_filter').children().addClass('penyaring');
            // PENGATUR POSISI PAGINATION
            $('.dataTables_paginate').addClass('float-right');
        }




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

        //REALTIME
        function realTime(){
            all();
            checkActivity();
            console.log(count);
            console.log(count2);
            // Check data di tabel aktifitas
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
        getData();

    </script>
    <!-- ===== END JAVASCRIPT ===== -->

</body>
<!-- ===== END BODY =====  -->

</html>