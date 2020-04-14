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
                        <div class="col-sm-12 col-md-6 col-lg-2">
                            <div class="form-group">
                              <label for="">Group by status</label>
                              <select class="form-control" name="" id="idStatus">
                                <option value="all">All</option>
                                <option value="d">Draf</option>
                                <option value="cs">Coming Soon</option>
                                <option value="o">Opened</option>
                                <option value="cd">Closed Down</option>
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
                        <div class="col-sm-12 col-md-12 col-lg-2">
                            <div class="form-group">
                              <label for="">Category</label>
                              <select class="form-control" name="" id="idCategory">
                                
                              </select>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-2">
                            <div class="form-group">
                              <label for="">Search</label>
                              <input type="search"
                                class="form-control" name="" id="idSearch" aria-describedby="helpId" placeholder="">
                            </div>
                        </div>
                        <div id="btn-add" class="col-sm-12 col-md-4 col-lg-2 text-lg-right">
                            <div class="form-group">
                                <label for="" class="invisible">Category</label>
                                <button class="py-2 btn-sm btn btn-success" onclick="functionAdd()" data-toggle="modal" data-target="#addProductModal">
                                    <i class="fa fa-plus">
                                    </i>
                                    Add Product
                                </button>
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
        let detailClick = false;
        let fil_number = 0;
        let fil_halaman = 4;
        let fil_status = "all";
        let fil_time = "dsc";
        let fil_search = "-----------";
        let fil_kategori = "all";
        

        // ============================================= //
        // ========== START CREATE FUNCTION ============ //
        // ============================================= //
        let HalamanAdd = 1;
        function functionAdd(){
            $("#arrow-down-add").show();
            $("#arrow-up-add").hide(); 
            if(HalamanAdd == 2){
                $("#produkCarousel").carousel("prev");
                HalamanAdd = 1;
            }
        }        
        $(document).ready(function () {
            // Date time range
            $('input[name="datetimes"]').daterangepicker({
                timePicker: true,
                timePicker24Hour: true,
                timePickerSeconds: true,
                linkedCalendars: false,
                startDate: moment().startOf('hour'),
                endDate: moment().startOf('hour').add(24, 'hour'),
                minDate: moment().startOf('hour'),
                drops: "up",
                locale: {
                    format: 'YYYY-MM-DD HH:mm:ss'
                }
            });

            $('input[name="datetimes"]').on('apply.daterangepicker', function(ev, picker) {
                $('#productAddProductStartDate').val(picker.startDate.format('YYYY-MM-DD HH:mm:ss'));
                $('#productAddProductEndDate').val(picker.endDate.format('YYYY-MM-DD HH:mm:ss'));
            });

            $('#productAddDescription').keyup(function (e) { 
                let deskripsi = $('#productAddDescription').val();
                let total = deskripsi.length;
                $('#productAddDescriptionSmall').html(total+" / 100");
            });

            $('#productAddDescription').keydown(function (e) { 
                let deskripsi = $('#productAddDescription').val();
                let total = deskripsi.length;
                $('#productAddDescriptionSmall').html(total+" / 100");
            });
            
            $('#productAddAddress').keyup(function (e) { 
                let deskripsi = $('#productAddAddress').val();
                let total = deskripsi.length;
                $('#productAddAddressSmall').html(total+" / 100");
            });

            $('#productAddAddress').keydown(function (e) { 
                let deskripsi = $('#productAddAddress').val();
                let total = deskripsi.length;
                $('#productAddAddressSmall').html(total+" / 100");
            });
            

            $("#addImage").change(function() {
                viewImage(this);
            });

            function viewImage(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        let coba = $('input[name="datetimes"]').val();
                        $('#cek_gambarAddProduk').val('ada');
                        let html = "<img id='hasilImg' src='"+e.target.result+"' style='width:230px;height:230px;border:1px solid #28A745;z-index:99' alt=''>"+
                        "<div onclick='$(`#addImage`).click()' class='hover position-absolute d-flex align-items-center' style='width:230px;height:230px;font-size:20px;color : gray;cursor: pointer;z-index:100;background: rgba(0, 0, 0, 0.4);visibility: hidden;'>"+
                            "<div class='text-center text-light py-2 w-100 rounded-circle'>"+
                                "<i class='fa fa-edit'></i> <br> edit"+
                            "</div>"+
                        "</div>";
                        $('#viewImage').html(html);
                    }
                    
                    reader.readAsDataURL(input.files[0]);
                }
            }
        });
        let weight = "OFF";
        // Setup Form Add (city,Weight)
        let html ="";
        // City
        $("#productAddProvinsi").change(function (e) { 
            e.preventDefault();
            let id = $("#productAddProvinsi").val();
            $.ajax({
                type: "POST",
                url: "<?= base_url('admin/ProductControllerAdmin/getDataFormCity') ?>",
                data:{
                    'id' : id
                },
                dataType: "JSON",
                success: function (response) {
                    // City
                    html ="<option></option>";
                    for(let i = 0 ; i < response.length; i++){
                        html += "<option value='"+response[i].id_kota+"'> "+response[i].type+" "+response[i].nama_kota+"</option>";
                    }
                    $("#productAddCity").html(html);
                }
            }); 
        });
        // Weight
        $("#productAddCategory").change(function (e) { 
            e.preventDefault();
            let id = $("#productAddCategory").val();
            $.ajax({
                type: "POST",
                url: "<?= base_url('admin/ProductControllerAdmin/getDataFormWeight') ?>",
                data:{
                    'id' : id
                },
                dataType: "JSON",
                success: function (response) {
                let html =  "<div class='form-group'>"+
                                "<input name='weight' type='number' min='0' data-toggle='tooltip' data-placement='top' title='weight' placeholder='Weight (gram)'"+
                                "class='form-control' maxlength='20' id='productAddProductWeight' aria-describedby='helpId' >"+
                                "<small id='helpIdproductAddProductName' class='form-text text-muted'>Required, max 11 char</small>"+
                            "</div>";
                    if(response.ongkir == 1){
                        $("#weightAdd").html(html);
                        weight = "ON";
                    }else{
                        $("#weightAdd").html("<input name='weight' value='-' type='hidden'>");
                        weight = "OFF";
                    }

                }
            }); 
        });
        
        // VALIDATE FORM ADD
        function addValidation(){
            let level = <?=$this->session->userdata('id_level')?>;
            if(level == 1 ){
                if(weight == "OFF"){
                    if( $('#cek_gambarAddProduk').val().length > 0 && $('#productAddCategory').val().length > 0 && $('#productAddProductName').val().length > 0 && $('#productAddProductName').val().length <= 25 && $('#productAddProductInitialPrice').val().length > 0 && $('#productAddProductInitialPrice').val().length <= 20 && $('#productAddDescription').val().length > 0 && $('#productAddDescription').val().length <= 100 
                    && $('#productAddProvinsi').val().length > 0 && $('#productAddCity').val().length > 0 
                    && $('#productAddAddress').val().length > 0 && $('#productAddAddress').val().length <= 100
                    ){
                    $('#productAddubmit').prop("disabled", false);                
                    }
                    else{
                        $('#productAddubmit').prop("disabled", true);
                    }
                }else{
                    if( $('#cek_gambarAddProduk').val().length > 0 && $('#productAddCategory').val().length > 0 && $('#productAddProductName').val().length > 0 && $('#productAddProductName').val().length <= 25 && $('#productAddProductInitialPrice').val().length > 0 && $('#productAddProductInitialPrice').val().length <= 20 && $('#productAddDescription').val().length > 0 && $('#productAddDescription').val().length <= 100 
                    && $('#productAddProvinsi').val().length > 0 && $('#productAddCity').val().length > 0 
                    && $('#productAddAddress').val().length > 0 && $('#productAddAddress').val().length <= 100
                    && $('#productAddProductWeight').val().length > 0 && $('#productAddProductWeight').val().length <= 11
                    ){
                    $('#productAddubmit').prop("disabled", false);                
                    }
                    else{
                        $('#productAddubmit').prop("disabled", true);
                    }
                }
            }else if(level == 2){
                if(weight == "OFF"){
                    if( $('#cek_gambarAddProduk').val().length > 0 && $('#productAddCategory').val().length > 0 && $('#productAddProductName').val().length > 0 && $('#productAddProductName').val().length <= 25 && $('#productAddProductInitialPrice').val().length > 0 && $('#productAddProductInitialPrice').val().length <= 20 && $('#productAddProductStartDate').val().length > 0 && $('#productAddProductEndDate').val().length > 0 && $('#productAddDescription').val().length > 0 && $('#productAddDescription').val().length <= 100 
                    && $('#productAddProvinsi').val().length > 0 && $('#productAddCity').val().length > 0 
                    && $('#productAddAddress').val().length > 0 && $('#productAddAddress').val().length <= 100
                    ){
                    $('#productAddubmit').prop("disabled", false);                
                    }
                    else{
                        $('#productAddubmit').prop("disabled", true);
                    }
                }else{
                    if( $('#cek_gambarAddProduk').val().length > 0 && $('#productAddCategory').val().length > 0 && $('#productAddProductName').val().length > 0 && $('#productAddProductName').val().length <= 25 && $('#productAddProductInitialPrice').val().length > 0 && $('#productAddProductInitialPrice').val().length <= 20 && $('#productAddProductStartDate').val().length > 0 && $('#productAddProductEndDate').val().length > 0 && $('#productAddDescription').val().length > 0 && $('#productAddDescription').val().length <= 100 
                    && $('#productAddProvinsi').val().length > 0 && $('#productAddCity').val().length > 0 
                    && $('#productAddAddress').val().length > 0 && $('#productAddAddress').val().length <= 100
                    && $('#productAddProductWeight').val().length > 0 && $('#productAddProductWeight').val().length <= 11
                    ){
                    $('#productAddubmit').prop("disabled", false);                
                    }
                    else{
                        $('#productAddubmit').prop("disabled", true);
                    }
                }
            }

            // Add success border
                // Border Category
                if($('#productAddCategory').val().length > 0){
                    $("#select2-productAddCategory-container").parent().addClass('border-success');
                    $("#select2-productAddCategory-container").parent().addClass('text-success');
                }else{
                    $("#select2-productAddCategory-container").parent().removeClass('border-success');
                    $("#select2-productAddCategory-container").parent().removeClass('text-success');
                }
                // Border Product Name
                if($('#productAddProductName').val().length > 0 && $('#productAddProductName').val().length <= 25){
                    $('#productAddProductName').addClass('border-success');
                    $('#productAddProductName').addClass('text-success');
                }else{
                    $('#productAddProductName').removeClass('border-success');
                    $('#productAddProductName').removeClass('text-success');
                }
                // Border Initial Price
                if($('#productAddProductInitialPrice').val().length > 0 && $('#productAddProductInitialPrice').val().length <= 20){
                    $('#productAddProductInitialPrice').addClass('border-success');
                    $('#productAddProductInitialPrice').addClass('text-success');
                }else{
                    if($('#productAddProductInitialPrice').val().length > 20){
                        $('#productAddProductInitialPrice').addClass('border-danger');
                        $('#productAddProductInitialPrice').addClass('text-danger');
                    }else{
                        $('#productAddProductInitialPrice').removeClass('border-danger');
                        $('#productAddProductInitialPrice').removeClass('text-danger');
                    }
                    $('#productAddProductInitialPrice').removeClass('border-success');
                    $('#productAddProductInitialPrice').removeClass('text-success');
                }
                // Border Deadline
                if(level == 2 ){
                    if($('#productAddProductStartDate').val().length > 0 && $('#productAddProductEndDate').val().length > 0){
                        $('#productAddDeadline').addClass('border-success');
                        $('#productAddDeadline').addClass('text-success');
                    }else{
                        $('#productAddDeadline').removeClass('border-success');
                        $('#productAddDeadline').removeClass('text-success');
                    }
                }
                // Border Description
                if($('#productAddDescription').val().length > 0 && $('#productAddDescription').val().length <= 100){
                    $('#productAddDescription').addClass('border-success');
                    $('#productAddDescription').addClass('text-success');
                }else{
                    $('#productAddDescription').removeClass('border-success');
                    $('#productAddDescription').removeClass('text-success');
                }
                // Border Weight
                if(weight == "ON"){
                    if($('#productAddProductWeight').val().length > 0 && $('#productAddProductWeight').val().length <= 11){
                        $('#productAddProductWeight').addClass('border-success');
                        $('#productAddProductWeight').addClass('text-success');
                    }else{
                        $('#productAddProductWeight').removeClass('border-success');
                        $('#productAddProductWeight').removeClass('text-success');
                    }
                }
                // Provinsi
                if($('#productAddProvinsi').val().length > 0){
                    $("#select2-productAddProvinsi-container").parent().addClass('border-success');
                    $("#select2-productAddProvinsi-container").parent().addClass('text-success');
                }else{
                    $("#select2-productAddProvinsi-container").parent().removeClass('border-success');
                    $("#select2-productAddProvinsi-container").parent().removeClass('text-success');
                }
                // City
                if($('#productAddCity').val().length > 0){
                    $("#select2-productAddCity-container").parent().addClass('border-success');
                    $("#select2-productAddCity-container").parent().addClass('text-success');
                }else{
                    $("#select2-productAddCity-container").parent().removeClass('border-success');
                    $("#select2-productAddCity-container").parent().removeClass('text-success');
                }
                // Address
                if($('#productAddAddress').val().length > 0 && $('#productAddAddress').val().length <= 100){
                    $('#productAddAddress').addClass('border-success');
                    $('#productAddAddress').addClass('text-success');
                }else{
                    $('#productAddAddress').removeClass('border-success');
                    $('#productAddAddress').removeClass('text-success');
                }
        }

        // CLICK SAVE IN MODAL ADD 
        $('#submitAddProduct').submit(function(e){
            e.preventDefault();
            // DEKLARASI
            let form_data = new FormData($(this)[0]);

            $.ajax({
                type: "POST",
                url: "<?= base_url('admin/ProductControllerAdmin/create') ?>",
                data: form_data,
                processData: false,
                contentType: false,
                async : true,
                dataType: "JSON",
                success: function (response) {
                    // getData();
                    $("#productAddclose").click();
                    alertSuccess();
                }
            });

        });

        // =========================================== //
        // ========== END CREATE FUNCTION ============ //
        // =========================================== //
        
        

        // =========================================== //
        // ========== START READ FUNCTION ============ //
        // =========================================== //
        
        // Tampilkan Pelelang
        function pelelang(){
            detailClick = false;
            HalamanDetail = 2;
            let id = $(".cekBid").attr("dataId");
            let html = "";
            let head = "<thead>"+
                            "<tr>"+
                                "<th>No</th>"+
                                "<th>Photo</th>"+
                                "<th>Name</th>"+
                                "<th>Date</th>"+
                                "<th>Asking price</th>"+
                            "</tr>"+
                        "</thead>"+
                        "<tbody>";
                footer ="</tbody>"+
                        "<tfoot>"+
                            "<tr>"+
                                "<th>No</th>"+
                                "<th>Photo</th>"+
                                "<th>Name</th>"+
                                "<th>Date</th>"+
                                "<th>Asking price</th>"+
                            "</tr>"+
                        "</tfoot>";
            $("#modalPelelang").modal("show");
            $.ajax({
                type: "GET",
                url: "<?= base_url(); ?>user/DetailControllerUser/getDataPelelang",
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
                    // Mengatur responsive data tables bagian show
                    $('#DataTables_Table_0_length').addClass('text-left');
                    $('#DataTables_Table_0_length').parent().addClass('col-sm-12');
                    $('#DataTables_Table_0_length').parent().addClass('mb-3');
                    $('#DataTables_Table_0_length').children().addClass('w-100');
                    $('#DataTables_Table_0_length').parent().addClass('col-12');
                    $('#DataTables_Table_0_length').parent().addClass('col-lg-6');
                    $('#DataTables_Table_0_length').parent().addClass('col-xl-6');
                    // $('#DataTables_Table_0_length').parent().addClass('col-md-4');
                    // $('#DataTables_Table_0_length').parent().addClass('col-lg-2');

                    // Mengatur responsive data tables bagian search
                    $('#DataTables_Table_0_filter').addClass('text-right');
                    $('#DataTables_Table_0_filter').parent().addClass('col-sm-12');
                    $('#DataTables_Table_0_filter').parent().addClass('mb-3');
                    $('#DataTables_Table_0_filter').children().addClass('w-100');
                    $('#DataTables_Table_0_filter').children().addClass('text-left');
                    $('#DataTables_Table_0_filter').parent().addClass('col-12');
                    $('#DataTables_Table_0_filter').parent().addClass('col-lg-6');
                    $('#DataTables_Table_0_filter').parent().addClass('col-xl-6');
                    // $('#DataTables_Table_0_filter').parent().removeClass('col-md-6');
                    // $('#DataTables_Table_0_filter').parent().addClass('col-md-4');
                    // $('#DataTables_Table_0_filter').parent().addClass('col-lg-4');
                    // $('#DataTables_Table_0_filter').children().addClass('w-100');
                    // $('#DataTables_Table_0_filter').children().addClass('penyaring');

                    $('#DataTables_Table_0_paginate').addClass('float-right');
                    $('#DataTables_Table_0_info').addClass('float-left');
                }
            });
        }
        

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
            url: "<?= base_url('admin/ProductControllerAdmin/getDataForm') ?>",
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
            // Category & Provinsi
            $.ajax({
                type: "GET",
                url: "<?= base_url('admin/ProductControllerAdmin/getDataForm') ?>",
                data: "",
                dataType: "JSON",
                success: function (response) {
                    // Category
                    for(let i = 0 ; i < response.category.length; i++){
                        if(response.category[i].ongkir == 0){
                            html += "<option value='"+response.category[i].id_kategori+"'>"+response.category[i].nama_kategori+" ( No shipping cost )</option>";
                        }else{
                            html += "<option value='"+response.category[i].id_kategori+"'>"+response.category[i].nama_kategori+" ( With shipping costs )</option>";
                        }
                    }
                    $("#productAddCategory").html("<option></option>"+html);
                    // $("#productEditCategory").html(html);
                    // Provinsi
                    html ="<option></option>";
                    for(let i = 0 ; i < response.provinsi.length; i++){
                        html += "<option value='"+response.provinsi[i].id_provinsi+"'>"+response.provinsi[i].nama_provinsi+"</option>";
                    }
                    $("#productAddProvinsi").html(html);
                    // $("#productEditProvinsi").html(html);
                }
            });
        //     // GET DATA
            $.ajax({
                type: "GET",
                url: "<?= base_url('admin/ProductControllerAdmin/getData/') ?>"+fil_number,
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
                            url: "<?= base_url(); ?>admin/ProductControllerAdmin/getJumlahPelelang",
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
                                        "<button style='width:35px;height:35px' data-placement='bottom' title='Detail' type='button' data-toggle='modal' data-target='#detailProdukAdmin' onclick='detailFunction("+response.result[i].id_barang+")' class='btn btn-info btn-sm mx-2 text-center  rounded-circle'> <i class='fa fa-book'></i></button>"+
                                        "<button style='width:35px;height:35px' data-placement='bottom' title='Edit' data-toggle='modal' data-target='#editProductModal' onclick='editFunction("+response.result[i].id_barang+")' type='button' class='btn btn-primary btn-sm mx-2 text-center  rounded-circle'> <i class='fa fa-edit'></i></button>"+
                                        "<button style='width:35px;height:35px' data-toggle='tooltip' data-placement='bottom' title='Delete' type='button' onclick='deleteFunction("+response.result[i].id_barang+")' class='btn btn-danger btn-sm mx-2 text-center  rounded-circle'> <i class='fa fa-trash'></i> </button>"+
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
                url: "<?= base_url('admin/DashboardControllerAdmin/checkActivity') ?>",
                data: "",
                dataType: "JSON",
                success: function (response) {
                    count = response; 
                }
            });
        }

        // Detail Function
        let icon = "arrowDown";
        $("#detailArrow").click(function (e) { 
            e.preventDefault();
            if(icon == "arrowDown"){
                $("#detailArrow").removeClass("fa-chevron-down");
                $("#detailArrow").addClass("fa-chevron-up");
                icon = "arrowUp";
            }else{
                $("#detailArrow").removeClass("fa-chevron-up");
                $("#detailArrow").addClass("fa-chevron-down");
                icon = "arrowDown";
            }
            
        });
        let HalamanDetail = 1;
        function detailFunction(id){
            if(HalamanDetail == 2){
                $("#slideDetail").carousel("prev");
                HalamanDetail = 1;
            }
            $("#productDetailDate").html("");
            detailClick = true;
            let tanggal = 0;
            $.ajax({
                type: "POST",
                url: "<?= base_url('admin/ProductControllerAdmin/getDataWhere') ?>",
                data: {
                    "id":id,
                },
                dataType: "JSON",
                success: function (response) {
                    let Status = response.status;
                    let image = "<?= base_url('assets/img/produk/') ?>"+response.foto;
                    let html="";
                    let idProdukP = ".idprd"+response.id_barang+$.now();
                    let idProdukL = ".idprl"+response.id_barang+$.now();
                    $.ajax({
                        type: "POST",
                        url: "<?= base_url(); ?>admin/ProductControllerAdmin/getJumlahPelelang",
                        data: {
                            id:response.id_barang
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

                    $('#productDetailProductImage').attr("src",image);
                    $('#productDetailProductName').html("<h6>"+response.nama_barang+" <span class='text-secondary'> ( "+response.nama_kategori+" )</span></h6>");
                    $('#productDetailDescription').html("<p style='font-size:14px'>Description : </p>"+"<textarea id='textarea' disabled class='w-100 bg-white' style='overflow:hidden;border:none;resize: none;height:20px;'>"+response.deskripsi_barang+"</textarea class='form-control' style='overflow:visible'>");
                    let templateWeight = "";
                    $("#locationDetail").html("Location : "+response.type+" "+response.nama_kota);
                    $("#alamatDetail").html(response.alamat);
                    if(response.weight != 0){
                        templateWeight = "<p style='font-size:14px' class='mb-1'>Weight : "+response.weight+" Gram</p>"
                    }
                    // Template Status
                    if(response.status=="draf"){
                        html =  templateWeight+
                                "<div id='productDetailInitialPrice'></div>"+
                                "<div id='productDetailStatus'><span class=' bg-warning py-1 px-2  text-white rounded' style='font-size:10px'>Draf</span></div>";
                        $("#detailKonten").html(html);
                        $("#productDetailDate").html();                   
                    }
                    if(response.status=="coming_soon"){
                        let id ="#idProdukComing"+response.id_barang;
                        let tanggal = response.tgl_dibuka;
                        html =  templateWeight+
                        "<div id='productDetailInitialPrice'></div>"+
                                "<div id='productDetailStatus'><span class='bg-success py-1 px-2  text-white rounded' style='font-size:10px'>Coming soon</span></div>";
                        $("#detailKonten").html(html);
                        $("#productDetailDate").html("<h6 style='font-size:16px' class='ml-1' id='idProdukComing"+response.id_barang+"'></h6>");
                        
                        var x = setInterval(function() {
                            var countDownDate = new Date(tanggal).getTime();

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
                            if (distance == 0) {
                                // $(id).remove();
                                days =0;
                                hours=0;
                                minutes=0;
                                seconds=0;
                            }
                            $(id).html(" Opened within : "+days + "d " + hours + "h "
                            + minutes + "m " + seconds+"s");
                        },1000);
                    }
                    if(response.status=="dibuka"){
                        let id ="#idProdukOpen"+response.id_barang;
                        let tanggal = response.tgl_ditutup;
                        html = templateWeight+
                        "<div id='productDetailInitialPrice'></div>"+
                        "<p style='font-size:14px' class=''>Bid : <span class='"+idProdukP.substring(1)+"' > </span></p>"+
                        "<div id='productDetailStatus'><span class=' bg-info py-1 px-2  text-white rounded' style='font-size:10px'>Active</span> <button data-target='#slideDetail' data-slide-to='1' onclick='pelelang()' class='cekBid btn btn-sm bg-primary py-1 px-2  text-white rounded' style='font-size:10px' >Check Bidder</button></div>";
                        $("#detailKonten").html(html);
                        $("#productDetailDate").html("<h6 style='font-size:16px' class='ml-1' id='idProdukOpen"+response.id_barang+"'></h6>");

                        var x = setInterval(function() {
                            var countDownDate = new Date(tanggal).getTime();

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
                            if (distance == 0) {
                                // $(id).remove();
                                days =0;
                                hours=0;
                                minutes=0;
                                seconds=0;
                            }
                            $(id).html(" Closed within : "+days + "d " + hours + "h "
                            + minutes + "m " + seconds+"s");
                        },1000);
                    }
                    if(response.status=="ditutup"){
                        html = templateWeight+
                        "<div id='productDetailInitialPrice'></div>"+
                        "<p style='font-size:14px' class=''>Final Price : <span class='"+idProdukL.substring(1)+"'></span></p>"+
                        "<p style='font-size:14px' class=''>Bid : <span class='"+idProdukP.substring(1)+"' > </span></p>"+
                        "<div id='productDetailStatus'><span class=' bg-danger py-1 px-2  text-white rounded' style='font-size:10px'>Closed</span> <button data-target='#slideDetail' data-slide-to='1' onclick='pelelang()' class='cekBid bg-primary py-1 px-2  text-white rounded' style='border:none;font-size:10px'>Check Bidder</button></div>";
                        $("#detailKonten").html(html);
                        $("#productDetailDate").html("<h6 style='font-size:16px' class='ml-1'> Closed at : "+response.tgl_ditutup+" </h6>");
                    }
                    $('#productDetailInitialPrice').html("<p style='font-size:14px' class='mb-1'>Initial Price : "+formatRupiah(response.harga_awal,'Rp. ')+"</p>");                    
                    $(".cekBid").attr("dataId", id);
                }
            });
        }

        // // ========================================= //
        // // ========== END READ FUNCTION ============ //
        // // ========================================= // 



        // // ======================================= //
        // // ========== UPDATE FUNCTION ============ //
        // // ======================================= //
        // Draf
        function createDraf(id){
            $.ajax({
                type: "POST",
                url: "<?= base_url('admin/ProductControllerAdmin/updateWhere') ?>",
                data: {
                    "id":id,
                    "status":"draf"
                },
                dataType: "JSON",
                success: function (response) {
                    $("#productEditclose").click();
                    alertSuccess();
                }
            });
        }
        // Open NOw
        function openNow(id){
            $.ajax({
                type: "POST",
                url: "<?= base_url('admin/ProductControllerAdmin/updateWhere') ?>",
                data: {
                    "id":id,
                    "status":"coming_soon"
                },
                dataType: "JSON",
                success: function (response) {
                    $("#productEditclose").click();
                    alertSuccess();
                }
            });
        }
        // Close Now
        function closeNow(id){
            $.ajax({
                type: "POST",
                url: "<?= base_url('admin/ProductControllerAdmin/updateWhere') ?>",
                data: {
                    "id":id,
                    "status":"dibuka"
                },
                dataType: "JSON",
                success: function (response) {
                    $("#productEditclose").click();
                    alertSuccess();
                }
            });
        }
        // Date time range
            $('input[name="datetimesEdit"]').daterangepicker({
                timePicker: true,
                timePicker24Hour: true,
                timePickerSeconds: true,
                linkedCalendars: false,
                startDate: moment().startOf('hour'),
                endDate: moment().startOf('hour').add(24, 'hour'),
                minDate: moment().startOf('hour'),
                drops: "up",
                locale: {
                    format: 'YYYY-MM-DD HH:mm:ss'
                }
            });

            $('input[name="datetimesEdit"]').on('apply.daterangepicker', function(ev, picker) {
                $('#productEditProductStartDate').val(picker.startDate.format('YYYY-MM-DD HH:mm:ss'));
                $('#productEditProductEndDate').val(picker.endDate.format('YYYY-MM-DD HH:mm:ss'));
            });

            $('#productEditDescription').keyup(function (e) { 
                let deskripsi = $('#productEditDescription').val();
                let total = deskripsi.length;
                $('#productEditDescriptionSmall').html(total+" / 100");
            });

            $('#productEditDescription').keydown(function (e) { 
                let deskripsi = $('#productEditDescription').val();
                let total = deskripsi.length;
                $('#productEditDescriptionSmall').html(total+" / 100");
            });
            
            $('#productEditAddress').keyup(function (e) { 
                let deskripsi = $('#productEditAddress').val();
                let total = deskripsi.length;
                $('#productEditAddressSmall').html(total+" / 100");
            });

            $('#productEditAddress').keydown(function (e) { 
                let deskripsi = $('#productEditAddress').val();
                let total = deskripsi.length;
                $('#productEditAddressSmall').html(total+" / 100");
            });
            

            $("#editImage").change(function() {
                viewImage(this);
            });

            function viewImage(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function(e) {
                            let coba = $('input[name="datetimes"]').val();
                            $('#cek_gambarEditProduk').val('ada');
                            let html = "<img id='hasilImgEdit' src='"+e.target.result+"' style='width:230px;height:230px;border:1px solid #28A745;z-index:99' alt=''>"+
                            "<div onclick='$(`#editImage`).click()' class='hover position-absolute d-flex align-items-center' style='width:230px;height:230px;font-size:20px;color : gray;cursor: pointer;z-index:100;background: rgba(0, 0, 0, 0.4);visibility: hidden;'>"+
                                "<div class='text-center text-light py-2 w-100 rounded-circle'>"+
                                    "<i class='fa fa-edit'></i> <br> edit"+
                                "</div>"+
                            "</div>";
                            $('#viewImageEdit').html(html);
                        }
                        
                        reader.readAsDataURL(input.files[0]);
                    }
                }
            // });
            let Editweight = "OFF";
            // Setup Form Add (city,Weight)
            // City
            $("#productEditProvinsi").change(function (e) { 
                e.preventDefault();
                let id = $("#productEditProvinsi").val();
                $.ajax({
                    type: "POST",
                    url: "<?= base_url('admin/ProductControllerAdmin/getDataFormCity') ?>",
                    data:{
                        'id' : id
                    },
                    dataType: "JSON",
                    success: function (response) {
                        // City
                        html ="<option></option>";
                        for(let i = 0 ; i < response.length; i++){
                            html += "<option value='"+response[i].id_kota+"'> "+response[i].type+" "+response[i].nama_kota+"</option>";
                        }
                        $("#productEditCity").html(html);
                    }
                }); 
            });
            // Weight
            $("#productEditCategory").change(function (e) { 
                e.preventDefault();
                let id = $("#productEditCategory").val();
                $.ajax({
                    type: "POST",
                    url: "<?= base_url('admin/ProductControllerAdmin/getDataFormWeight') ?>",
                    data:{
                        'id' : id
                    },
                    dataType: "JSON",
                    success: function (response) {
                    let html =  "<div class='form-group'>"+
                                    "<input name='weight' type='number' min='0' data-toggle='tooltip' data-placement='top' title='weight' placeholder='Weight (gram)'"+
                                    "class='form-control' maxlength='20' id='productEditProductWeight' aria-describedby='helpId' >"+
                                    "<small id='helpIdproductAddProductName' class='form-text text-muted'>Required, max 11 char</small>"+
                                "</div>";
                        if(response.ongkir == 1){
                            $("#weightEdit").html(html);
                            Editweight = "ON";
                        }else{
                            $("#weightEdit").html("<input name='weight' value='-' type='hidden'>");
                            Editweight = "OFF";
                        }

                    }
                }); 
            });
        let HalamanEdit = 1;
        function editFunction(id){   
            let level = <?=$this->session->userdata('id_level')?>;
            $("#arrow-down-edit").show();
            $("#arrow-up-edit").hide(); 
            if(HalamanEdit == 2){
                $("#produkCarouselEdit").carousel("prev");
                HalamanEdit = 1;
            }
            let base = "<?= base_url(); ?>";
            let = html ="<option><option>";
            let idCity = 0; 
            $.ajax({
                type: "POST",
                url: "<?= base_url('admin/ProductControllerAdmin/getDataWhereEdit') ?>",
                data: {
                    "id":id,
                },
                dataType: "JSON",
                success: function (response) {
                    $("#hasilImgEdit").attr("src", base+"assets/img/produk/"+response.detail.foto );
                    $("#productEditProductName").val(response.detail.nama_barang);
                    $("#productEditProductInitialPrice").val(response.detail.harga_awal);
                    $("#productEditDescription").html(response.detail.deskripsi_barang);
                    $("#productEditAddress").html(response.detail.alamat);
                    if(level == 2 && response.detail.tgl_dibuka != '0000-00-00 00:00:00' && response.detail.tgl_ditutup != '0000-00-00 00:00:00' ){
                        $('input[name="datetimesEdit"]').data('daterangepicker').setStartDate(response.detail.tgl_dibuka);
                        $('input[name="datetimesEdit"]').data('daterangepicker').setEndDate(response.detail.tgl_ditutup);
                        $('#productEditProductStartDate').val(response.detail.tgl_dibuka);
                        $('#productEditProductEndDate').val(response.detail.tgl_ditutup);
                        
                    }
                    if(response.detail.status == "coming_soon"){
                        if(level == 1){
                            html =  "<button type='button' style='font-size:12px' class='mt-3 btn btn-outline-success col-lg-12 md-12 sm-12'>Status Coming Soon </button>"+
                                    "<button type='button' style='font-size:12px' onclick='createDraf("+response.detail.id_barang+")' class='text-white mt-2 btn btn-warning col-lg-12 md-12 sm-12'>Create Draf</button>";
                        }else{
                            html =  "<button type='button' style='font-size:12px' class='mt-4 btn btn-outline-success col-lg-12 md-12 sm-12'>Status Coming Soon </button>"+
                                    "<button type='button' style='font-size:12px' onclick='createDraf("+response.detail.id_barang+")' class='text-white mt-2 btn btn-warning col-lg-12 md-12 sm-12'>Create Draf</button>"+
                                    "<button type='button' style='font-size:12px' onclick='openNow("+response.detail.id_barang+")' class=' btn btn-success col-lg-12 md-12 sm-12 mt-2'>Open Now </button>";
                        }
                    }else if(response.detail.status == "dibuka"){
                        if(level == 1){
                            html =  "<button type='button' style='font-size:12px' class='mt-3 btn btn-outline-primary col-lg-12 md-12 sm-12'>Status Active </button>"+
                                    "<button type='button' style='font-size:12px' onclick='createDraf("+response.detail.id_barang+")' class='text-white mt-2 btn btn-warning col-lg-12 md-12 sm-12'>Create Draf</button>";
                        }else{
                        html =  "<button type='button' style='font-size:12px' class='mt-4 btn btn-outline-primary col-lg-12 md-12 sm-12'>Status Active </button>"+
                                "<button type='button' style='font-size:12px' onclick='createDraf("+response.detail.id_barang+")' class='text-white mt-2 btn btn-warning col-lg-12 md-12 sm-12'>Create Draf</button>"+
                                "<button type='button' style='font-size:12px' onclick='closeNow("+response.detail.id_barang+")' class='btn btn-danger col-lg-12 md-12 sm-12 mt-2 '>Close Now </button>";
                        }
                    }else if(response.detail.status == "draf"){
                        html =  "<button type='button' style='font-size:12px' class='mt-3 text-white btn btn-warning col-lg-12 md-12 sm-12'>Status Draf </button>";
                    }else if(response.detail.status == "ditutup"){
                        html =  "<button type='button' style='font-size:12px' class='mt-3 btn btn-danger col-lg-12 md-12 sm-12'>Status Closed </button>"+
                        "<button type='button' style='font-size:12px' onclick='createDraf("+response.detail.id_barang+")' class='text-white mt-2 btn btn-warning col-lg-12 md-12 sm-12'>Create Draf</button>";
                    }
                    $("#actionEdit").html(html);
                    html ="";
                    if(response.detail.weight != 0){
                        html = "<div class='form-group'>"+
                                    "<input value='"+response.detail.weight+"' name='weight' type='number' min='0' data-toggle='tooltip' data-placement='top' title='weight' placeholder='Weight (gram)'"+
                                    "class='form-control' maxlength='20' id='productEditProductWeight' aria-describedby='helpId' >"+
                                    "<small id='helpIdproductAddProductName' class='form-text text-muted'>Required, max 11 char</small>"+
                                "</div>";
                        $("#weightEdit").html(html);
                        Editweight = "ON";
                    }else{
                        $("#weightEdit").html("<input name='weight' value='-' type='hidden'>");
                        Editweight = "OFF";
                    }
                    html = "";
                    // Category
                    for(i=0;i < response.category.length; i++ ){
                        if(response.category[i].ongkir == 0){
                            if(response.category[i].id_kategori == response.detail.id_kategori){
                                html += "<option selected value='"+response.category[i].id_kategori+"'>"+response.category[i].nama_kategori+" ( No shipping cost )</option>";
                            }else{
                                html += "<option value='"+response.category[i].id_kategori+"'>"+response.category[i].nama_kategori+" ( No shipping cost )</option>";
                            }
                        }else{
                            if(response.category[i].id_kategori == response.detail.id_kategori){
                                html += "<option selected value='"+response.category[i].id_kategori+"'>"+response.category[i].nama_kategori+" ( With shipping costs )</option>";
                            }else{
                                html += "<option value='"+response.category[i].id_kategori+"'>"+response.category[i].nama_kategori+" ( With shipping costs )</option>";
                            }
                        }
                    }
                    $("#productEditCategory").html(html);
                    idCity = response.detail.id_kota;
                    html="";
                    $.ajax({
                        type: "POST",
                        url: "<?= base_url('admin/ProductControllerAdmin/getDataWhereEdit2') ?>",
                        data: {
                            "id":idCity,
                        },
                        dataType: "JSON",
                        success: function (res) {
                            // provinsi
                            for(j=0;j < res.provinsi.length; j++ ){
                                if(res.provinsi[j].id_provinsi == res.citySelect.id_provinsi){
                                    html += "<option selected value='"+res.provinsi[j].id_provinsi+"'>"+res.provinsi[j].nama_provinsi+"</option>";
                                }else{
                                    html += "<option value='"+res.provinsi[j].id_provinsi+"'>"+res.provinsi[j].nama_provinsi+"</option>";
                                }   
                            }
                            $("#productEditProvinsi").html(html);
                            html="";
                            $.ajax({
                                type: "POST",
                                url: "<?= base_url('admin/ProductControllerAdmin/getDataWhereEdit2') ?>",
                                data: {
                                    "id":res.citySelect.id_provinsi,
                                },
                                dataType: "JSON",
                                success: function (r) {
                                    // provinsi
                                    for(i=0;i < r.city.length; i++ ){
                                        if(r.city[i].id_kota == res.citySelect.id_kota){
                                            html += "<option selected value='"+r.city[i].id_kota+"'>"+r.city[i].type+" "+r.city[i].nama_kota+"</option>";
                                        }else{
                                            html += "<option value='"+r.city[i].id_kota+"'>"+r.city[i].type+" "+r.city[i].nama_kota+"</option>";
                                        }   
                                    }
                                    $("#productEditCity").html(html);
                                }
                            });
                        }
                    });

                    let deskripsi = $('#productEditDescription').val();
                    let address = $('#productEditAddress').val();
                    let totala = deskripsi.length;
                    let totalb = address.length;
                    $('#productEditDescriptionSmall').html(totala+" / 100");
                    $('#productEditAddressSmall').html(totalb+" / 100");
                }
            });
            $('#IdEditSubmit').val(id);
        }

        // // VALIDATE FORM EDIT
        function editValidation(){
            let level = <?=$this->session->userdata('id_level')?>;
            if(level == 1 ){
                if(Editweight == "OFF"){
                    if( $('#cek_gambarEditProduk').val().length > 0 && $('#productEditCategory').val().length > 0 && $('#productEditProductName').val().length > 0 && $('#productEditProductName').val().length <= 25 && $('#productEditProductInitialPrice').val().length > 0 && $('#productEditProductInitialPrice').val().length <= 20 && $('#productEditDescription').val().length > 0 && $('#productEditDescription').val().length <= 100 
                    && $('#productEditProvinsi').val().length > 0 && $('#productEditCity').val().length > 0 
                    && $('#productEditAddress').val().length > 0 && $('#productEditAddress').val().length <= 100
                    ){
                    $('#productEditSubmit').prop("disabled", false);                
                    }
                    else{
                        $('#productEditSubmit').prop("disabled", true);
                    }
                }else{
                    if( $('#cek_gambarEditProduk').val().length > 0 && $('#productEditCategory').val().length > 0 && $('#productEditProductName').val().length > 0 && $('#productEditProductName').val().length <= 25 && $('#productEditProductInitialPrice').val().length > 0 && $('#productEditProductInitialPrice').val().length <= 20 && $('#productEditDescription').val().length > 0 && $('#productEditDescription').val().length <= 100 
                    && $('#productEditProvinsi').val().length > 0 && $('#productEditCity').val().length > 0 
                    && $('#productEditAddress').val().length > 0 && $('#productEditAddress').val().length <= 100
                    && $('#productEditProductWeight').val().length > 0 && $('#productEditProductWeight').val().length <= 11
                    ){
                    $('#productEditSubmit').prop("disabled", false);                
                    }
                    else{
                        $('#productEditSubmit').prop("disabled", true);
                    }
                }
            }else if(level == 2){
                if(Editweight == "OFF"){
                    if( $('#cek_gambarEditProduk').val().length > 0 && $('#productEditCategory').val().length > 0 && $('#productEditProductName').val().length > 0 && $('#productEditProductName').val().length <= 25 && $('#productEditProductInitialPrice').val().length > 0 && $('#productEditProductInitialPrice').val().length <= 20 && $('#productEditProductStartDate').val().length > 0 && $('#productEditProductEndDate').val().length > 0 && $('#productEditDescription').val().length > 0 && $('#productEditDescription').val().length <= 100 
                    && $('#productEditProvinsi').val().length > 0 && $('#productEditCity').val().length > 0 
                    && $('#productEditAddress').val().length > 0 && $('#productEditAddress').val().length <= 100
                    ){
                    $('#productEditSubmit').prop("disabled", false);                
                    }
                    else{
                        $('#productEditSubmit').prop("disabled", true);
                    }
                }else{
                    if( $('#cek_gambarEditProduk').val().length > 0 && $('#productEditCategory').val().length > 0 && $('#productEditProductName').val().length > 0 && $('#productEditProductName').val().length <= 25 && $('#productEditProductInitialPrice').val().length > 0 && $('#productEditProductInitialPrice').val().length <= 20 && $('#productEditProductStartDate').val().length > 0 && $('#productEditProductEndDate').val().length > 0 && $('#productEditDescription').val().length > 0 && $('#productEditDescription').val().length <= 100 
                    && $('#productEditProvinsi').val().length > 0 && $('#productEditCity').val().length > 0 
                    && $('#productEditAddress').val().length > 0 && $('#productEditAddress').val().length <= 100
                    && $('#productEditProductWeight').val().length > 0 && $('#productEditProductWeight').val().length <= 11
                    ){
                    $('#productEditSubmit').prop("disabled", false);                
                    }
                    else{
                        $('#productEditSubmit').prop("disabled", true);
                    }
                }
            }

            // Add success border
                // Border Category
                if($('#productEditCategory').val().length > 0){
                    $("#select2-productEditCategory-container").parent().addClass('border-success');
                    $("#select2-productEditCategory-container").parent().addClass('text-success');
                }else{
                    $("#select2-productEditCategory-container").parent().removeClass('border-success');
                    $("#select2-productEditCategory-container").parent().removeClass('text-success');
                }
                // Border Product Name
                if($('#productEditProductName').val().length > 0 && $('#productEditProductName').val().length <= 25){
                    $('#productEditProductName').addClass('border-success');
                    $('#productEditProductName').addClass('text-success');
                }else{
                    $('#productEditProductName').removeClass('border-success');
                    $('#productEditProductName').removeClass('text-success');
                }
                // // Border Initial Price
                if($('#productEditProductInitialPrice').val().length > 0 && $('#productEditProductInitialPrice').val().length <= 20){
                    $('#productEditProductInitialPrice').addClass('border-success');
                    $('#productEditProductInitialPrice').addClass('text-success');
                }else{
                    if($('#productEditProductInitialPrice').val().length > 20){
                        $('#productEditProductInitialPrice').addClass('border-danger');
                        $('#productEditProductInitialPrice').addClass('text-danger');
                    }else{
                        $('#productEditProductInitialPrice').removeClass('border-danger');
                        $('#productEditProductInitialPrice').removeClass('text-danger');
                    }
                    $('#productEditProductInitialPrice').removeClass('border-success');
                    $('#productEditProductInitialPrice').removeClass('text-success');
                }
                // // Border Deadline
                if(level == 2 ){
                    if($('#productEditProductStartDate').val().length > 0 && $('#productEditProductEndDate').val().length > 0){
                        $('#productEditDeadline').addClass('border-success');
                        $('#productEditDeadline').addClass('text-success');
                    }else{
                        $('#productEditDeadline').removeClass('border-success');
                        $('#productEditDeadline').removeClass('text-success');
                    }
                }
                // // Border Description
                if($('#productEditDescription').val().length > 0 && $('#productEditDescription').val().length <= 100){
                    $('#productEditDescription').addClass('border-success');
                    $('#productEditDescription').addClass('text-success');
                }else{
                    $('#productEditDescription').removeClass('border-success');
                    $('#productEditDescription').removeClass('text-success');
                }
                // // Border Weight
                if(Editweight == "ON"){
                    if($('#productEditProductWeight').val().length > 0 && $('#productEditProductWeight').val().length <= 11){
                        $('#productEditProductWeight').addClass('border-success');
                        $('#productEditProductWeight').addClass('text-success');
                    }else{
                        $('#productEditProductWeight').removeClass('border-success');
                        $('#productEditProductWeight').removeClass('text-success');
                    }
                }
                // Provinsi
                if($('#productEditProvinsi').val().length > 0){
                    $("#select2-productEditProvinsi-container").parent().addClass('border-success');
                    $("#select2-productEditProvinsi-container").parent().addClass('text-success');
                }else{
                    $("#select2-productEditProvinsi-container").parent().removeClass('border-success');
                    $("#select2-productEditProvinsi-container").parent().removeClass('text-success');
                }
                // // City
                if($('#productEditCity').val().length > 0){
                    $("#select2-productEditCity-container").parent().addClass('border-success');
                    $("#select2-productEditCity-container").parent().addClass('text-success');
                }else{
                    $("#select2-productEditCity-container").parent().removeClass('border-success');
                    $("#select2-productEditCity-container").parent().removeClass('text-success');
                }
                // // Address
                if($('#productEditAddress').val().length > 0 && $('#productEditAddress').val().length <= 100){
                    $('#productEditAddress').addClass('border-success');
                    $('#productEditAddress').addClass('text-success');
                }else{
                    $('#productEditAddress').removeClass('border-success');
                    $('#productEditAddress').removeClass('text-success');
                }
    
        
        }
        // // CLICK SAVE IN MODAL EDIT
        $('#submitEditProduct').submit(function(e){
            e.preventDefault();
            // DEKLARASI
            let form_data = new FormData($(this)[0]);

            $.ajax({
                type: "POST",
                url: "<?= base_url('admin/ProductControllerAdmin/update') ?>",
                data: form_data,
                processData: false,
                contentType: false,
                async : true,
                dataType: "JSON",
                success: function (response) {
                    // getData();
                    $("#productEditclose").click();
                    alertSuccess();
                }
            });

        });
        // // =========================================== //
        // // ========== END UPDATE FUNCTION ============ //
        // // =========================================== //



        // // ======================================= //
        // // ========== DELETE FUNCTION ============ //
        // // ======================================= // 
        // // CLICK DELETE BUTTON IN ACTION Div
        function deleteFunction(id){
            Swal.fire({
            title: 'Are you sure',
            text: "Delete this Item ?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.value) {
                // CLICK YES IN MODAL DELETE
                $.ajax({
                    type: "POST",
                    url: "<?= base_url('admin/ProductControllerAdmin/delete') ?>",
                    data: {
                        "id":id,
                    },
                    dataType: "JSON",
                    success: function (response) {
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        );
                        getData(fil_number,fil_halaman,fil_status,fil_time,fil_search,fil_kategori);
                    }
                });
            }
            })
        }

        
        // // =========================================== //
        // // ========== END DELETE FUNCTION ============ //
        // // =========================================== //



        // // **************** OTHER FUNCTION ****************
        
        // // .GET DATA SIDEBAR
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

        // // CHEDK DATA IN TABLE tb_aktifitas
        function checkActivity(){
            $.ajax({
                type: "GET",
                url: "<?= base_url('admin/DashboardControllerAdmin/checkActivity') ?>",
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
            
            



            // RESPONSIVE MODAL ADD PRODUCT
            let bwidth = $("body").width();
            let height = $("#addProductModalContent").height();
            if(bwidthStart != bwidth && height > 110){
                $("#addProductModalContent").attr("style", "");                
                $("#addProductModalContent").addClass("h-100");
                height = $("#addProductModalContent").height();
                click = "FALSE";
            }
            if(height > 110 && click == "FALSE"){
                bwidthStart = bwidth;
                $("#addProductModalContent").removeClass("h-100");
                $("#addProductModalContent").attr("style", "height:"+(height+80)+"px;");
                click = "TRUE";
            }

            // RESPONSIVE MODAL EDIT PRODUCT
            let ebwidth = $("body").width();
            let eheight = $("#editProductModalContent").height();
            if(bwidthStart != ebwidth && eheight > 110){
                $("#editProductModalContent").attr("style", "");                
                $("#editProductModalContent").addClass("h-100");
                eheight = $("#editProductModalContent").height();
                eclick = "FALSE";
            }
            if(eheight > 110 && eclick == "FALSE"){
                bwidthStart = ebwidth;
                $("#editProductModalContent").removeClass("h-100");
                $("#editProductModalContent").attr("style", "height:"+(eheight+80)+"px;");
                eclick = "TRUE";
            }
            all();
            addValidation();
            editValidation();
            checkActivity();
            console.log(HalamanDetail);
            // Check data di tabel aktifitas
            if(count != count2){
                // if(removeArray == "FALSE"){
                //     for (let i = 0; i < arrP.length; i++) {
                //         $(arrP[i]).remove();
                //         // $(arrP[i]).html(" ");
                //         // arrTglStart[i] = ""; 
                //         // arrTglStart 
                //         // arrTglEnd
                //         // removeArray = "TRUE";
                //     }
                    
                // // }else{
                //     arrTglStart = [];
                //     arrTglStart = []; 
                //     arrTglEnd = [];
                //     arrP = [];
                    
                    getData(fil_number,fil_halaman,fil_status,fil_time,fil_search,fil_kategori);
                    // removeArray = "FALSE";
                // }
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

            // textarea
            if(detailClick == true){
                let height =0;
                let txt = document.getElementById('textarea');
                txt.style.height = "1px";
                height = txt.scrollHeight;
                txt.style.height = (2+height)+"px";
            }
            


        }
        let interval = setInterval(realTime,500);

        // CALL FUNCTION
        all();
        checkActivity();
        getData(fil_number,fil_halaman,fil_status,fil_time,fil_search,fil_kategori);
        
        // SETTING CAROUSEL 
        $('.carousel').carousel({
            interval: false
        }); 
        // Detail
        $("#cekBidBack").click(function (e) { 
            e.preventDefault(); 
            HalamanDetail = 1;           
        });
        // Add
        $("#arrow-up-add").hide();
        $("#arrow-up-add").click(function (e) { 
            e.preventDefault();
            $("#arrow-down-add").show();
            $("#arrow-up-add").hide();  
            HalamanAdd = 1;           
        });
        $("#arrow-down-add").click(function (e) { 
            e.preventDefault();
            $("#weightAdd").addClass("py-5");
            setTimeout(() => {
                $("#weightAdd").removeClass("py-5");
            }, 1000);
            $("#arrow-up-add").show();
            $("#arrow-down-add").hide();
            HalamanAdd = 2;           
        });
        // Edit
        $("#arrow-up-edit").hide();
        $("#arrow-up-edit").click(function (e) { 
            e.preventDefault();
            $("#arrow-down-edit").show();
            $("#arrow-up-edit").hide(); 
            HalamanEdit = 1;           
        });
        $("#arrow-down-edit").click(function (e) { 
            e.preventDefault();
            $("#weightEdit").addClass("py-4");
            setTimeout(() => {
                $("#weightEdit").removeClass("py-4");
            }, 1000);
            $("#arrow-up-edit").show();
            $("#arrow-down-edit").hide();
            HalamanEdit = 2;           

        });
    </script>
    <!-- ===== END JAVASCRIPT ===== -->

</body>
<!-- ===== END BODY =====  -->

</html>