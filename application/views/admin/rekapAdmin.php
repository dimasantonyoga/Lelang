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
            <div class="container-fluid py-5 bg-white shadow"  style="width:95%">
                <h3>Filter</h3>
                <div class="row">
                    <div class="col-lg-4 ">
                        <div class="form-group">
                          <label for="">Tanggal : </label>
                          <div class="form-control" id="reportrange" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%">
                            <i class="fa fa-calendar"></i>&nbsp;
                            <span></span> <i class="fa fa-caret-down"></i>
                          </div>
                        </div>
                    </div>
                    <div class="col-lg-4 ">
                        <div class="form-group">
                          <label for="">Status pembayaran : </label>
                          <select class="form-control" name="" id="status_pembayaran">
                            <option value="all">Semua</option>
                            <option value="d">Dibayar</option>
                            <option value="bd">Belum Dibayar</option>
                          </select>
                        </div>
                    </div>
                    <div class="col-lg-4 ">
                        <div class="form-group">
                            <label for="">Harga Minimal : </label>
                            <input type="number" step="10000" onchange="$('#max').attr('min',$(this).val());"
                            class="form-control" name="" id="min" aria-describedby="helpId" placeholder="Tidak Aktif">
                        </div>
                    </div>
                    <div class="col-lg-4 ">
                        <div class="form-group">
                            <label for="">Harga Maksimal : </label>
                            <input type="number" step="10000"
                            class="form-control" name="" onchange="$('#min').attr('max',$(this).val());" id="max" aria-describedby="helpId" placeholder="Tidak Aktif">
                        </div>
                    </div>
                    <div class="col-lg-4 h-100" style="margin-top:1.8rem">
                        <button id="search" type="button" class="btn btn-primary"> <i class="fa fa-search"></i>  Cari </button>
                    </div>

                </div>
            </div>
            <div class="container-fluid py-5 bg-white shadow mt-4"  style="width:100%;overflow:auto">
            <table id='table' class='mt-3 table table-striped table-bordered table-responsive-sm' cellspacing='0' width='100%'>
                <thead>
                    <tr>
                        <th class='th-sm'>No
                        </th>
                        <th class='th-sm'>Nama pemenang
                        </th>
                        <th class='th-sm'>Nama Barang
                        </th>
                        <th class='th-sm'>Status Pembayaran
                        </th>
                        <th class='th-sm'>Tgl Dibuka
                        </th>
                        <th class='th-sm'>Tgl Ditutup
                        </th>
                        <th class='th-sm'>Harga Awal
                        </th>
                        <th class='th-sm'>Harga Akhir
                        </th>
                        <th class='th-sm'>Laba
                        </th>
                        <th class='th-sm'>Ongkir
                        </th>
                        <th class='th-sm'>Total Dibayar
                        </th>
                    </tr>
                </thead>
                <tbody id='tbody'>
                </tbody>
                <tfoot>
                    <tr>
                    <th class='th-sm'>No
                        </th>
                        <th class='th-sm'>Nama pemenang
                        </th>
                        <th class='th-sm'>Nama Barang
                        </th>
                        <th class='th-sm'>Status Pembayaran
                        </th>
                        <th class='th-sm'>Tgl Dibuka
                        </th>
                        <th class='th-sm'>Tgl Ditutup
                        </th>
                        <th class='th-sm'>Harga Awal
                        </th>
                        <th class='th-sm'>Harga Akhir
                        </th>
                        <th class='th-sm'>Laba
                        </th>
                        <th class='th-sm'>Ongkir
                        </th>
                        <th class='th-sm'>Total Dibayar
                        </th>
                    </tr>
                </tfoot>
            </table>
            </div>
        </main>
        <!-- ===== END PAGE CONTENT ===== -->

        
    </div>
    <input type="hidden" name="" id="tgl_start">
    <input type="hidden" name="" id="tgl_end">

    <!-- ===== END WRAPPER ===== -->


    <!-- ===== LOAD FOOT ===== -->
    <?php $this->load->view('admin/_partials/foot');?>
    <!-- ===== END FOOT ===== -->

    <!-- ===== START JAVASCRIPT ===== -->
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>
    <script>
        // DEKLARASI
        let count =0;
        let count2 =0;

        $("#search").click(function (e) { 
            let start = $("#tgl_start").val();
            let end = $("#tgl_end").val();
            let status = $("#status_pembayaran").val();
            let min = $("#min").val();
            let max = $("#max").val();
            
            $.ajax({
                type: "GET",
                url: "<?= base_url('admin/RecapitulationControllerAdmin/filter') ?>",
                data: {
                    start : start,
                    end : end,
                    status : status,
                    min : min,
                    max : max,
                },
                dataType: "JSON",
                success: function (response) {
                    let tb = "";
                    let stat = "";
                    let st = "";
                    let laba =0;
                    for (let i = 0; i < response.length; i++) {
                        st = response[i].konfirmasi_petugas;
                        if(st == 0){
                            stat = "Belum Dibayar";
                        }else{
                            stat = "Dibayar";
                        }
                        laba = parseInt(response[i].harga_tawar)-parseInt(response[i].harga_awal);
                        tb+= "<tr>"+
                                "<td>"+
                                    (i+1)+
                                "</td>"+
                                "<td>"+
                                    response[i].nama_lengkap+
                                "</td>"+
                                "<td>"+
                                    response[i].nama_barang+
                                "</td>"+
                                "<td>"+
                                    stat+
                                "</td>"+
                                "<td>"+
                                    response[i].tgl_dibuka+
                                "</td>"+
                                "<td>"+
                                    response[i].tgl_ditutup+
                                "</td>"+
                                "<td>"+
                                    response[i].harga_awal+
                                "</td>"+
                                "<td>"+
                                    response[i].harga_tawar+
                                "</td>"+
                                "<td>"+
                                    laba+
                                "</td>"+
                                "<td>"+
                                    response[i].ongkir+
                                "</td>"+
                                "<td>"+
                                    response[i].total+
                                "</td>"+
                            "</tr>";
                        
                    }
                    $("#tbody").html(tb);
                    $('#table').DataTable( {
                        dom: 'Bfrtip',
                        buttons: [
                            'excel', 'pdf', 'print'
                        ]
                    } );

                }
            });

        });

        $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
        $("#tgl_start").val(picker.startDate.format('YYYY-MM-DD'));
        $("#tgl_end").val(picker.endDate.format('YYYY-MM-DD'));
        });



        $(function() {

        var start = moment().subtract(29, 'days');
        var end = moment();

        function cb(start, end) {
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            $("#tgl_start").val(start.format('YYYY-MM-DD'));
            $("#tgl_end").val(end.format('YYYY-MM-DD'));
        }

        $('#reportrange').daterangepicker({
            startDate: start,
            endDate: end,
            ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            }
        }, cb);

        cb(start, end);
        });


        // =========================================== //
        // ========== START READ FUNCTION ============ //
        // =========================================== // 
        // GET DATA IN DATA TABLES
        function getData(){
            // GET DATA ACTIVITY
            $.ajax({
                type: "GET",
                url: "<?= base_url('admin/RecapitulationControllerAdmin/getKategori') ?>",
                data: "",
                dataType: "JSON",
                success: function (response) {
                    let kat = "<option><option>";
                    for (let i = 0; i < response.length; i++) {
                        kat+= "<option value='"+response[i].id_kategori+"'>"+response[i].nama_kategori+"<option>";
                    }
                    $("#kategori").html(kat);
                    
                }
            });

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