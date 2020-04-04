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
        let count =0;
        let count2 =0;
        let usernameEdit=""; //Digunakan untuk validasi username edit data
        let registeruss="";
        let registerussadd ="";

        // ============================================= //
        // ========== START CREATE FUNCTION ============ //
        // ============================================= //
        // CHECK USERNAME
        $('#officerAddUsername').keyup(function (e) { 
            e.preventDefault();
            let username = $('#officerAddUsername').val();
            $.ajax({
                type: "POST",
                url: "<?= base_url('admin/OfficerControllerAdmin/checkUsername') ?>",
                data: {
                    'username' : username 
                },
                dataType: "JSON",
                success: function (response) {
                    if(response.success == true){
                        $('#helpIdOfficerAddUsername').html('Username already exists !');
                        $('#helpIdOfficerAddUsername').removeClass('text-muted');
                        $('#helpIdOfficerAddUsername').addClass('text-danger');
                        $('#officerAddUsername').addClass('border-danger');
                        $('#officerAddUsername').addClass('text-danger');
                        registerussadd="duplicate";
                    }else{
                        $('#helpIdOfficerAddUsername').html('Required, max 25 char');
                        $('#helpIdOfficerAddUsername').addClass('text-muted');
                        $('#helpIdOfficerAddUsername').removeClass('text-danger');
                        $('#officerAddUsername').removeClass('border-danger');
                        $('#officerAddUsername').removeClass('text-danger');
                        registerussadd="";
                    }   
                }
            });         
        });

        // VALIDATE FORM ADD
        function addValidation(){
            if($('#officerAddName').val().length > 0 && $('#officerAddName').val().length <= 25 && $('#officerAddUsername').val().length > 0 && $('#officerAddUsername').val().length <= 25 && $('#officerAddPassword').val().length >= 8 && $('#officerAddPassword').val().length <= 25 && registerussadd==""){
                $('#officerAddSubmit').prop("disabled", false);                
            }
            else{
                $('#officerAddSubmit').prop("disabled", true);
            }

                // Add success border
            
                // Border Name
                if($('#officerAddName').val().length > 0 && $('#officerAddName').val().length <= 25){
                    $('#officerAddName').addClass('border-success');
                    $('#officerAddName').addClass('text-success');
                }else{
                    $('#officerAddName').removeClass('border-success');
                    $('#officerAddName').removeClass('text-success');
                }
                // Border Username
                if($('#officerAddUsername').val().length > 0 && $('#officerAddUsername').val().length <= 25){
                    $('#officerAddUsername').addClass('border-success');
                    $('#officerAddUsername').addClass('text-success');
                }else{
                    $('#officerAddUsername').removeClass('border-success');
                    $('#officerAddUsername').removeClass('text-success');
                }
                // Border Password
                if($('#officerAddPassword').val().length > 0 && $('#officerAddPassword').val().length >= 8 && $('#officerAddPassword').val().length <= 25){
                    $('#officerAddPassword').addClass('border-success');
                    $('#officerAddPassword').addClass('text-success');
                }else{
                    $('#officerAddPassword').removeClass('border-success');
                    $('#officerAddPassword').removeClass('text-success');
                }
        }

        // CLICK SAVE IN MODAL ADD
        $('#officerAddSubmit').click(function (e) { 
            e.preventDefault();
            // DEKLARASI
            let Addname = $('#officerAddName').val();
            let Addusername = $('#officerAddUsername').val();
            let Addpassword = $('#officerAddPassword').val();

            $.ajax({
                type: "POST",
                url: "<?= base_url('admin/OfficerControllerAdmin/create') ?>",
                data: {
                    'registerName' : Addname,
                    'registerUsername' : Addusername,
                    'registerPassword' : Addpassword},
                async : true,
                dataType: "JSON",
                success: function (response) {
                    alertSuccess();
                    getData();
                    $('#officerAddUsername').val('');
                }
            });

        });
        // =========================================== //
        // ========== END CREATE FUNCTION ============ //
        // =========================================== //
        
        

        // =========================================== //
        // ========== START READ FUNCTION ============ //
        // =========================================== // 
        // GET DATA IN DATA TABLES
        function getData(){
            // TAMPILAN DATA TABLES
            let template = 
            "<table id='table' class='mt-3 table table-striped table-bordered table-responsive-sm' cellspacing='0' width='100%'>"+
                "<thead>"+
                    "<tr>"+
                    "<th class='th-sm'>No"+
                    "</th>"+
                    "<th class='th-sm'>Photo"+
                    "</th>"+
                    "<th class='th-sm'>Name"+
                    "</th>"+
                    "<th class='th-sm'>Username"+
                    "</th>"+
                    "<th class='th-sm'>Action"+
                    "</th>"+
                    "</tr>"+
                "</thead>"+
                "<tbody id='tbody'>"+
                "</tbody>"+
                "<tfoot>"+
                    "<tr>"+
                    "<th class='th-sm'>No"+
                    "</th>"+
                    "<th class='th-sm'>Photo"+
                    "</th>"+
                    "<th class='th-sm'>Name"+
                    "</th>"+
                    "<th class='th-sm'>Username"+
                    "</th>"+
                    "<th class='th-sm'>Action"+
                    "</th>"+
                    "</tr>"+
                "</tfoot>"+
            "</table>";
            // GET DATA
            $.ajax({
                type: "GET",
                url: "<?= base_url('admin/OfficerControllerAdmin/getData') ?>",
                data: "",
                dataType: "JSON",
                success: function (response) {
                    let html = "";
                    for (let i = 0; i < response.real.length; i++) {
                        html+=  "<tr>"+
                                    "<td class='align-middle'>"+(i+1)+"</td>"+
                                    "<td class='text-center align-middle'><img src='<?= base_url(); ?>assets/img/profile/"+response.real[i].foto+"' id='detailImage' style='width:6rem;' class='img-thumbnail rounded-circle shadow' alt=''></td>"+
                                    "<td class='align-middle'>"+response.real[i].nama_petugas+"</td>"+
                                    "<td class='align-middle'>"+response.real[i].username+"</td>"+
                                    "<td class='align-middle'>"+
                                        "<button onclick='editFunction("+response.real[i].id_petugas+")' data-toggle='modal' data-target='#editOfficerModal' class='btn text-primary'><i class='fa fa-edit'></i> Edit</button>"+
                                        "<button onclick='deleteFunction("+(i+1)+","+response.real[i].id_petugas+")' data-toggle='modal' data-target='#deleteOfficerModal' class='btn text-danger'><i class='fa fa-trash'></i> Delete</button>"+
                                    "</td>"+
                                "</tr>";
                    }
                    $('#table').remove();
                    $('#container').html(template);
                    $('#tbody').html(html);
                    $('#table').DataTable();
                    addButton();
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

        // ========================================= //
        // ========== END READ FUNCTION ============ //
        // ========================================= // 



        // ======================================= //
        // ========== UPDATE FUNCTION ============ //
        // ======================================= //
        // CLICK EDIT BUTTON IN ACTION TABLE
        function editFunction(id){
            $.ajax({
                type: "POST",
                url: "<?= base_url('admin/OfficerControllerAdmin/getDataWhere') ?>",
                data: {
                    "id":id,
                },
                dataType: "JSON",
                success: function (response) {
                    $('#officerEditName').val(response.nama_petugas);
                    $('#officerEditUsername').val(response.username);
                    $('#officerEditPassword').val('');
                    usernameEdit = response.username;
                }
            });
            $('#officerEditSubmit').attr('dataid',id);
        }
        // CHECK USERNAME
        $('#officerEditUsername').keyup(function (e) { 
            e.preventDefault();
            let usernameEdit0 = $('#officerEditUsername').val();
            $.ajax({
                type: "POST",
                url: "<?= base_url('admin/OfficerControllerAdmin/checkUsername') ?>",
                data: {
                    'username' : usernameEdit0 
                },
                dataType: "JSON",
                success: function (response) {
                    if(response.success == true && usernameEdit0 != usernameEdit){
                        $('#helpIdOfficerEditUsername').html('Username already exists !');
                        $('#helpIdOfficerEditUsername').removeClass('text-muted');
                        $('#helpIdOfficerEditUsername').addClass('text-danger');
                        $('#officerEditUsername').addClass('border-danger');
                        $('#officerEditUsername').addClass('text-danger');
                        registeruss="duplicate";
                    }else{
                        $('#helpIdOfficerEditUsername').html('Required, max 25 char');
                        $('#helpIdOfficerEditUsername').addClass('text-muted');
                        $('#helpIdOfficerEditUsername').removeClass('text-danger');
                        $('#officerEditUsername').removeClass('border-danger');
                        $('#officerEditUsername').removeClass('text-danger');
                        registeruss="";
                    }   
                }
            });         
        });

        // VALIDATE FORM EDIT
        function editValidation(){
            if($('#officerEditName').val().length > 0 && $('#officerEditName').val().length <= 25 && $('#officerEditUsername').val().length > 0 && $('#officerEditUsername').val().length <= 25 && $('#officerEditPassword').val().length >= 8 && $('#officerEditPassword').val().length <= 25 && registeruss==""){
                $('#officerEditSubmit').prop("disabled", false);                
            }
            else{
                $('#officerEditSubmit').prop("disabled", true);
            }

            // Add success border
            
                // Border Name
                if($('#officerEditName').val().length > 0 && $('#officerEditName').val().length <= 25){
                    $('#officerEditName').addClass('border-success');
                    $('#officerEditName').addClass('text-success');
                }else{
                    $('#officerEditName').removeClass('border-success');
                    $('#officerEditName').removeClass('text-success');
                }
                // Border Username
                if($('#officerEditUsername').val().length > 0 && $('#officerEditUsername').val().length <= 25){
                    $('#officerEditUsername').addClass('border-success');
                    $('#officerEditUsername').addClass('text-success');
                }else{
                    $('#officerEditUsername').removeClass('border-success');
                    $('#officerEditUsername').removeClass('text-success');
                }
                // Border Password
                if($('#officerEditPassword').val().length > 0 && $('#officerEditPassword').val().length >= 8 && $('#officerEditPassword').val().length <= 25){
                    $('#officerEditPassword').addClass('border-success');
                    $('#officerEditPassword').addClass('text-success');
                }else{
                    $('#officerEditPassword').removeClass('border-success');
                    $('#officerEditPassword').removeClass('text-success');
                }            
        }

        // CLICK SAVE IN MODAL EDIT
        $('#officerEditSubmit').click(function (e) { 
            e.preventDefault();
            // DEKLARASI
            let Addname = $('#officerEditName').val();
            let Addusername = $('#officerEditUsername').val();
            let Addtelp = $('#officerEditTelp').val();
            let Addpassword = $('#officerEditPassword').val();
            let id = $('#officerEditSubmit').attr('dataid');

            $.ajax({
                type: "POST",
                url: "<?= base_url('admin/OfficerControllerAdmin/update') ?>",
                data: {
                    'id' : id,
                    'registerName' : Addname,
                    'registerUsername' : Addusername,
                    'registerTelephone' : Addtelp,
                    'registerPassword' : Addpassword},
                async : true,
                dataType: "JSON",
                success: function (response) {
                    alertSuccess();
                    getData();
                    $('#officerEditUsername').val('');
                }
            });

        });
        // =========================================== //
        // ========== END UPDATE FUNCTION ============ //
        // =========================================== //



        // ======================================= //
        // ========== DELETE FUNCTION ============ //
        // ======================================= // 
        // CLICK DELETE BUTTON IN ACTION TABLE
        function deleteFunction(no,id){
            $.ajax({
                type: "POST",
                url: "<?= base_url('admin/OfficerControllerAdmin/getDataWhere') ?>",
                data: {
                    "id":id,
                },
                dataType: "JSON",
                success: function (response) {
                    $('#officerNama').html(response.nama_petugas);
                    $('#officerUsername').html(response.username);
                }
            });
            $('#officerNo').html(no);
            $('#officerId').attr('dataid',id);
        }

        // CLICK YES IN MODAL DELETE
        $('#officerId').click(function (e) { 
            let id = $('#officerId').attr('dataid');
            $.ajax({
                type: "POST",
                url: "<?= base_url('admin/OfficerControllerAdmin/delete') ?>",
                data: {
                    "id":id,
                },
                dataType: "JSON",
                success: function (response) {
                    alertSuccess();
                    getData();
                }
            });
        });
        // =========================================== //
        // ========== END DELETE FUNCTION ============ //
        // =========================================== //



        // **************** OTHER FUNCTION ****************
        
        // ADD BUTTON ADD USER
        function addButton(){
            // Delete Button duulu
            $('#btn-add').remove();
            // Mengatur responsive data tables bagian show
            $('#table_length').parent().removeClass('col-md-6');
            $('#table_length').parent().addClass('col-md-4');
            $('#table_length').parent().addClass('col-lg-2');

            // Mengatur responsive data tables bagian search
            $('#table_filter').parent().removeClass('col-md-6');
            $('#table_filter').parent().addClass('col-md-4');
            $('#table_filter').parent().addClass('col-lg-4');
            $('#table_filter').children().addClass('w-100');
            $('#table_filter').children().addClass('penyaring');
            let btnAdd =  "<div id='btn-add' class='col-sm-12 col-md-4 col-lg-6 mt-3 text-lg-right'>"+
                                "<button class='btn btn-success' data-toggle='modal' data-target='#addOfficerModal'>"+
                                    "<i class='fa fa-plus'> Add Officer</i>"+
                                "</button>"+
                            "</div>";
            $('#table_filter').parent().addClass('dttb');
            $('.dttb').after(btnAdd);

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
                url: "<?= base_url('admin/OfficerControllerAdmin/checkActivity') ?>",
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
            addValidation();
            editValidation();
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