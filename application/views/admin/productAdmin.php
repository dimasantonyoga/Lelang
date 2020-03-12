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
                            <div class="dataTables_length w-100" id="table_length">
                                <label class="w-100">
                                    Show 
                                    <select name="table_length" aria-controls="table" class=" custom-select custom-select-sm form-control form-control-sm">
                                        <option value="10">10</option>
                                        <option value="25">30</option>
                                        <option value="50">60</option>
                                        <option value="100">100</option>
                                    </select>
                                    entries
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-2">
                            <div class="dataTables_length" id="table_length">
                                <label class="w-100">
                                    Sort by status 
                                    <select name="table_length" aria-controls="table" class="custom-select custom-select-sm form-control form-control-sm">
                                        <option value="10">All</option>
                                        <option value="25">Opened</option>
                                        <option value="50">Closed Down</option>
                                        <option value="100">Draf</option>
                                    </select>
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-2">
                            <div class="dataTables_length" id="table_length">
                                <label class="w-100">
                                    Sort by time
                                    <select name="table_length" aria-controls="table" class="custom-select custom-select-sm form-control form-control-sm">
                                        <option value="10">Descending</option>
                                        <option value="25">Ascending</option>
                                    </select>
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-4">
                            <div id="table_filter" class="dataTables_filter">
                                <label class="w-75 penyaring mr-auto">
                                    Search:
                                    <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="table">
                                </label>
                                <button class="btn btn-info btn-sm mt-n1" data-toggle="modal" data-target="#addProductModal">
                                    <i class="fa fa-search">
                                        Filter
                                    </i>
                                </button>
                            </div>
                        </div>
                        <div id="btn-add" class="col-sm-12 col-md-4 col-lg-2 mt-3 text-lg-right">
                            <button class=" btn btn-success btn-sm my-1" data-toggle="modal" data-target="#addProductModal">
                                <i class="fa fa-plus">
                                    Add Product
                                </i>
                            </button>
                        </div>
                    </div>
                    <div class="row" id="konten">
                        
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-12 col-md-5">
                            <div class="dataTables_info" id="table_info" role="status" aria-live="polite">Showing 1
                                to 1 of 1 entries</div>
                        </div>
                        <div class="col-sm-12 col-md-7">
                            <div class="dataTables_paginate paging_simple_numbers float-right" id="table_paginate">
                                <ul class="pagination">
                                    <li class="paginate_button page-item previous disabled" id="table_previous"><a
                                            href="#" aria-controls="table" data-dt-idx="0" tabindex="0"
                                            class="page-link">Previous</a></li>
                                    <li class="paginate_button page-item active"><a href="#" aria-controls="table"
                                            data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                    <li class="paginate_button page-item next disabled" id="table_next"><a href="#"
                                            aria-controls="table" data-dt-idx="2" tabindex="0"
                                            class="page-link">Next</a></li>
                                </ul>
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
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <!-- ===== END FOOT ===== -->

    <!-- ===== START JAVASCRIPT ===== -->
    <script>
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
                let count = deskripsi.length;
                $('#productAddDescriptionSmall').html(count+" / 100");
            });

            $('#productAddDescription').keydown(function (e) { 
                let deskripsi = $('#productAddDescription').val();
                let count = deskripsi.length;
                $('#productAddDescriptionSmall').html(count+" / 100");
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
    </script>
    <script>
        // DEKLARASI
        let count =0;
        let count2 =0;

        // ============================================= //
        // ========== START CREATE FUNCTION ============ //
        // ============================================= //

        // VALIDATE FORM ADD
        function addValidation(){
            if( $('#cek_gambarAddProduk').val().length > 0 && $('#productAddProductName').val().length > 0 && $('#productAddProductName').val().length <= 25 && $('#productAddProductInitialPrice').val().length > 0 && $('#productAddProductInitialPrice').val().length <= 20 && $('#productAddProductStartDate').val().length > 0 && $('#productAddProductEndDate').val().length > 0 && $('#productAddDescription').val().length > 0 && $('#productAddDescription').val().length <= 100 ){
                $('#productAddubmit').prop("disabled", false);                
            }
            else{
                $('#productAddubmit').prop("disabled", true);
            }

            // Add success border
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
                if($('#productAddProductStartDate').val().length > 0 && $('#productAddProductEndDate').val().length > 0){
                    $('#productAddDeadline').addClass('border-success');
                    $('#productAddDeadline').addClass('text-success');
                }else{
                    $('#productAddDeadline').removeClass('border-success');
                    $('#productAddDeadline').removeClass('text-success');
                }
                // Border Description
                if($('#productAddDescription').val().length > 0 && $('#productAddDescription').val().length <= 100){
                    $('#productAddDescription').addClass('border-success');
                    $('#productAddDescription').addClass('text-success');
                }else{
                    $('#productAddDescription').removeClass('border-success');
                    $('#productAddDescription').removeClass('text-success');
                }
        }

        // CLICK SAVE IN MODAL ADD 
        $('#submitAddProduct').submit(function(e){
            e.preventDefault();
            // DEKLARASI
            let addProductName = $('#productAddProductName').val();
            let addProductInitialPrice = $('#productAddProductInitialPrice').val();
            let addProductStartDate = $('#productAddProductStartDate').val();
            let addProductEndDate = $('#productAddProductEndDate').val();
            let addproductAddDescription = $('#productAddDescription').val();
            let addProductStatus = 'draf';
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
                    console.log('oke');
                }
            });

        });

        // =========================================== //
        // ========== END CREATE FUNCTION ============ //
        // =========================================== //
        
        

        // =========================================== //
        // ========== START READ FUNCTION ============ //
        // =========================================== //
        function countDown(tgl,variabel){
            for (let i = 0; i < tgl.length; i++) {

                // Update the count down every 1 second
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
                    
                // Output the result in an element with id="demo"
                $(variabel[i]).html(" : "+days + " Day " + hours + " : "
                + minutes + " : " + seconds);
                
                // If the count down is over, write some text 
                    if (distance < 0) {
                        // $(id).remove();
                        // clearInterval(x);
                    }
                }, 1000);
                
            }
        } 
        function getData(){
            // GET DATA
            $.ajax({
                type: "GET",
                url: "<?= base_url('admin/ProductControllerAdmin/getData') ?>",
                data: "",
                dataType: "JSON",
                success: function (response) {
                    let html = "";
                    let arrTgl=[];
                    let arrP=[];

                    for (let i = 0; i < response.length; i++) {
                        let p = "#p"+response[i].id_barang;
                        let tgl = response[i].tgl_berakhir;
                        arrTgl.push(tgl);
                        arrP.push(p); 
                        // Template Status
                        if(response[i].status=="draf"){
                            templateTime = "";
                            templateBidder= "";
                            templateStatus = "<td  class='pt-3 px-2'> : <span class='bg-warning py-1 px-2  text-white rounded' style='font-size:10px'>Draf</span></td>";
                        }else if(response[i].status=="dibuka"){
                            templateBidder =    "<tr>"+
                                                    "<td>Bidder </td>"+
                                                    "<td class='px-2'> : 0 </td>"+
                                                "</tr>";
                            templateTime = "<tr>"+
                                                "<td>Closed on </td>"+
                                                "<td class='px-2 timer' id='p"+response[i].id_barang+"'> :  </td>"+
                                            "</tr>";
                            templateStatus = "<td  class='pt-3 px-2'> : <span class='bg-info py-1 px-2  text-white rounded' style='font-size:10px'>Active</span></td>";
                        }else if(response[i].status=="ditutup"){
                            templateBidder =    "<tr>"+
                                                    "<td>Bidder </td>"+
                                                    "<td class='px-2'> : 0 </td>"+
                                                "</tr>";
                            templateTime = "<tr>"+
                                                "<td>Closed at </td>"+
                                                "<td class='px-2 timer'> : "+tgl+" </td>"+
                                            "</tr>";
                            templateStatus = "<td  class='pt-3 px-2'> : <span class='bg-danger py-1 px-2  text-white rounded' style='font-size:10px'>Closed</span></td>";
                        }

                        html +=  "<div class='col-sm-12 col-lg-6 col-md-6 mt-3 d-flex align-items-stretch' id='produk"+response[i].id_barang+"'>"+
                        "<div  class='w-100 shadow' onmouseover='$( this ).children( `.shadow` ).css( `display`, `block` )' onmouseout='$( this ).children( `.shadow` ).css( `display`, `none` )'>"+
                            "<div class=' position-absolute shadow' style='top:0;right:0.9rem;left:0.9rem;bottom:0;z-index:1; background:rgba(49, 98, 141, 0.3);display:none;' >"+
                                "<div class='px-5 h-100'>"+
                                    "<div class='h-100 d-flex justify-content-center align-items-center py-2'>"+
                                        "<button style='width:35px;height:35px' data-toggle='tooltip' data-placement='bottom' title='Detail' type='button' class='btn btn-info btn-sm mx-2 text-center  rounded-circle'> <i class='fa fa-book'></i></button>"+
                                        "<button style='width:35px;height:35px' data-toggle='tooltip' data-placement='bottom' title='Edit' type='button' class='btn btn-primary btn-sm mx-2 text-center  rounded-circle'> <i class='fa fa-edit'></i></button>"+
                                        "<button style='width:35px;height:35px' data-toggle='tooltip' data-placement='bottom' title='Delete' type='button' class='btn btn-danger btn-sm mx-2 text-center  rounded-circle'> <i class='fa fa-trash'></i> </button>"+
                                    "</div>"+
                                "</div>"+
                            "</div>"+
                            "<div class='row'>"+
                            "<div class='col-lg-5 col-md-12 col-sm-6 py-3'>"+
                                "<img src='<?= base_url('assets/img/produk/tv.jpg') ?>' class='w-100' alt=''>"+
                            "</div>"+
                            "<div class='col-lg-7 col-md-12 col-sm-6 d-flex align-items-center justify-content-center'>"+
                                "<div class=''>"+
                                    "<table class='my-5'>"+
                                        "<tr>"+
                                            "<td>Name </td>"+
                                            "<td class='px-2'> : <?= substr('Post navigation Redragon M601 CENTROPHORUS-2000 DPI Gaming Mouse for PC',0,20).'. . .'; ?></td>"+
                                        "</tr>"+
                                        "<tr>"+
                                            "<td>Initial Price </td>"+
                                            "<td class='px-2'> : "+response[i].harga_awal+"</td>"+
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
                    }
                    // let arrayTgl = [arrTgl];

                    // console.log(arrP);
                    // $('#konten').remove();
                    $('#konten').html(html);
                    countDown(arrTgl,arrP);

                }
            });

            // GET DATA ACTIVITY
            $.ajax({
                type: "GET",
                url: "<?= base_url('admin/OfficerControllerAdmin/checkActivity') ?>",
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



        // // ======================================= //
        // // ========== UPDATE FUNCTION ============ //
        // // ======================================= //
        // // CLICK EDIT BUTTON IN ACTION TABLE
        // function editFunction(id){
        //     $.ajax({
        //         type: "POST",
        //         url: "<?= base_url('admin/OfficerControllerAdmin/getDataWhere') ?>",
        //         data: {
        //             "id":id,
        //         },
        //         dataType: "JSON",
        //         success: function (response) {
        //             $('#officerEditName').val(response.nama_petugas);
        //             $('#officerEditUsername').val(response.username);
        //             $('#officerEditPassword').val('');
        //             usernameEdit = response.username;
        //         }
        //     });
        //     $('#officerEditSubmit').attr('dataid',id);
        // }
        // // CHECK USERNAME
        // $('#officerEditUsername').keyup(function (e) { 
        //     e.preventDefault();
        //     let usernameEdit0 = $('#officerEditUsername').val();
        //     $.ajax({
        //         type: "POST",
        //         url: "<?= base_url('admin/OfficerControllerAdmin/checkUsername') ?>",
        //         data: {
        //             'username' : usernameEdit0 
        //         },
        //         dataType: "JSON",
        //         success: function (response) {
        //             if(response.success == true && usernameEdit0 != usernameEdit){
        //                 $('#helpIdUserEditUsername').html('Username already exists !');
        //                 $('#helpIdUserEditUsername').removeClass('text-muted');
        //                 $('#helpIdUserEditUsername').addClass('text-danger');
        //                 $('#officerEditUsername').addClass('border-danger');
        //                 $('#officerEditUsername').addClass('text-danger');
        //                 registeruss="duplicate";
        //             }else{
        //                 $('#helpIdUserEditUsername').html('Required, max 25 char');
        //                 $('#helpIdUserEditUsername').addClass('text-muted');
        //                 $('#helpIdUserEditUsername').removeClass('text-danger');
        //                 $('#officerEditUsername').removeClass('border-danger');
        //                 $('#officerEditUsername').removeClass('text-danger');
        //                 registeruss="";
        //             }   
        //         }
        //     });         
        // });

        // // VALIDATE FORM EDIT
        // function editValidation(){
        //     if($('#officerEditName').val().length > 0 && $('#officerEditName').val().length <= 25 && $('#officerEditUsername').val().length > 0 && $('#officerEditUsername').val().length <= 25 && $('#officerEditPassword').val().length >= 8 && $('#officerEditPassword').val().length <= 25 && registeruss==""){
        //         $('#officerEditSubmit').prop("disabled", false);                
        //     }
        //     else{
        //         $('#officerEditSubmit').prop("disabled", true);
        //     }
        // }

        // // CLICK SAVE IN MODAL EDIT
        // $('#officerEditSubmit').click(function (e) { 
        //     e.preventDefault();
        //     // DEKLARASI
        //     let Addname = $('#officerEditName').val();
        //     let Addusername = $('#officerEditUsername').val();
        //     let Addtelp = $('#officerEditTelp').val();
        //     let Addpassword = $('#officerEditPassword').val();
        //     let id = $('#officerEditSubmit').attr('dataid');

        //     $.ajax({
        //         type: "POST",
        //         url: "<?= base_url('admin/OfficerControllerAdmin/update') ?>",
        //         data: {
        //             'id' : id,
        //             'registerName' : Addname,
        //             'registerUsername' : Addusername,
        //             'registerTelephone' : Addtelp,
        //             'registerPassword' : Addpassword},
        //         async : true,
        //         dataType: "JSON",
        //         success: function (response) {
        //             getData();
        //             $('#officerEditUsername').val('');
        //         }
        //     });

        // });
        // // =========================================== //
        // // ========== END UPDATE FUNCTION ============ //
        // // =========================================== //



        // // ======================================= //
        // // ========== DELETE FUNCTION ============ //
        // // ======================================= // 
        // // CLICK DELETE BUTTON IN ACTION TABLE
        // function deleteFunction(no,id){
        //     $.ajax({
        //         type: "POST",
        //         url: "<?= base_url('admin/OfficerControllerAdmin/getDataWhere') ?>",
        //         data: {
        //             "id":id,
        //         },
        //         dataType: "JSON",
        //         success: function (response) {
        //             $('#officerNama').html(response.nama_petugas);
        //             $('#officerUsername').html(response.username);
        //         }
        //     });
        //     $('#officerNo').html(no);
        //     $('#officerId').attr('dataid',id);
        // }

        // // CLICK YES IN MODAL DELETE
        // $('#officerId').click(function (e) { 
        //     let id = $('#officerId').attr('dataid');
        //     $.ajax({
        //         type: "POST",
        //         url: "<?= base_url('admin/OfficerControllerAdmin/delete') ?>",
        //         data: {
        //             "id":id,
        //         },
        //         dataType: "JSON",
        //         success: function (response) {
        //             getData();
        //         }
        //     });
        // });
        // // =========================================== //
        // // ========== END DELETE FUNCTION ============ //
        // // =========================================== //



        // // **************** OTHER FUNCTION ****************
        
        // // GET DATA SIDEBAR
        function all(){
            $.ajax({
                type: "GET",
                url: "<?= base_url('admin/DashboardControllerAdmin/getData') ?>",
                data: "",
                dataType: "JSON",
                success: function (response) {
                    $('#name').html(response.name);
                    $('#level').html(response.level);
                }
            });
        }

        // // CHEDK DATA IN TABLE tb_aktifitas
        function checkActivity(){
            $.ajax({
                type: "GET",
                url: "<?= base_url('admin/OfficerControllerAdmin/checkActivity') ?>",
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
            addValidation();
            // editValidation();
            // checkActivity();

            // Check data di tabel aktifitas
            if(count != count2){
                // getData();
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