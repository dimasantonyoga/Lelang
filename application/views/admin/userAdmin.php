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
            <div class="container-fluid py-5 bg-white shadow" id="container" style="width:95%">
        
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
        let usernameEdit=""; //Digunakan untuk validasi username edit data
        let registeruss="";
        let registerussadd ="";


        // ============================================= //
        // ========== START CREATE FUNCTION ============ //
        // ============================================= //
        // CHECK USERNAME
        $('#userAddUsername').keyup(function (e) { 
            e.preventDefault();
            let username = $('#userAddUsername').val();
            $.ajax({
                type: "POST",
                url: "<?= base_url('user/AuthControllerUser/registerCheckUsername') ?>",
                data: {
                    'username' : username 
                },
                dataType: "JSON",
                success: function (response) {
                    if(response.success == true){
                        $('#helpIdUserAddUsername').html('Username already exists !');
                        $('#helpIdUserAddUsername').removeClass('text-muted');
                        $('#helpIdUserAddUsername').addClass('text-danger');
                        $('#userAddUsername').addClass('border-danger');
                        $('#userAddUsername').addClass('text-danger');
                        registerussadd="duplicate";
                    }else{
                        $('#helpIdUserAddUsername').html('Required, max 25 char');
                        $('#helpIdUserAddUsername').addClass('text-muted');
                        $('#helpIdUserAddUsername').removeClass('text-danger');
                        $('#userAddUsername').removeClass('border-danger');
                        $('#userAddUsername').removeClass('text-danger');
                        registerussadd="";
                    }   
                }
            });         
        });

        // VALIDATE FORM ADD
        function addValidation(){
            if($('#userAddName').val().length > 0 && $('#userAddName').val().length <= 25 && $('#userAddUsername').val().length > 0 && $('#userAddUsername').val().length <= 25 && $('#userAddTelp').val().length > 0 && $('#userAddTelp').val().length <= 25 && $('#userAddPassword').val().length >= 8 && $('#userAddPassword').val().length <= 25 && registerussadd==""){
                $('#userAddSubmit').prop("disabled", false);                
            }
            else{
                $('#userAddSubmit').prop("disabled", true);
            }

            // Add success border
            
                // Border Name
                if($('#userAddName').val().length > 0 && $('#userAddName').val().length <= 25){
                    $('#userAddName').addClass('border-success');
                    $('#userAddName').addClass('text-success');
                }else{
                    $('#userAddName').removeClass('border-success');
                    $('#userAddName').removeClass('text-success');
                }
                // Border Username
                if($('#userAddUsername').val().length > 0 && $('#userAddUsername').val().length <= 25){
                    $('#userAddUsername').addClass('border-success');
                    $('#userAddUsername').addClass('text-success');
                }else{
                    $('#userAddUsername').removeClass('border-success');
                    $('#userAddUsername').removeClass('text-success');
                }
                // Border Telep
                if($('#userAddTelp').val().length > 0 && $('#userAddTelp').val().length <= 25){
                    $('#userAddTelp').addClass('border-success');
                    $('#userAddTelp').addClass('text-success');
                }else{
                    $('#userAddTelp').removeClass('border-success');
                    $('#userAddTelp').removeClass('text-success');
                }
                // Border Password
                if($('#userAddPassword').val().length > 0 && $('#userAddPassword').val().length >= 8 && $('#userAddPassword').val().length <= 25){
                    $('#userAddPassword').addClass('border-success');
                    $('#userAddPassword').addClass('text-success');
                }else{
                    $('#userAddPassword').removeClass('border-success');
                    $('#userAddPassword').removeClass('text-success');
                }
        }

        // CLICK SAVE IN MODAL ADD
        $('#userAddSubmit').click(function (e) { 
            e.preventDefault();
            // DEKLARASI
            let Addname = $('#userAddName').val();
            let Addusername = $('#userAddUsername').val();
            let Addtelp = $('#userAddTelp').val();
            let Addpassword = $('#userAddPassword').val();

            $.ajax({
                type: "POST",
                url: "<?= base_url('admin/UserControllerAdmin/create') ?>",
                data: {
                    'registerName' : Addname,
                    'registerUsername' : Addusername,
                    'registerTelephone' : Addtelp,
                    'registerPassword' : Addpassword},
                async : true,
                dataType: "JSON",
                success: function (response) {
                    alertSuccess();
                    getData();
                    $('#userAddUsername').val('');
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
                    "<th class='th-sm'>Nama"+
                    "</th>"+
                    "<th class='th-sm'>Username"+
                    "</th>"+
                    "<th class='th-sm'>Telp"+
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
                    "<th class='th-sm'>Nama"+
                    "</th>"+
                    "<th class='th-sm'>Username"+
                    "</th>"+
                    "<th class='th-sm'>Telp"+
                    "</th>"+
                    "<th class='th-sm'>Action"+
                    "</th>"+
                    "</tr>"+
                "</tfoot>"+
            "</table>";
            // GET DATA
            $.ajax({
                type: "GET",
                url: "<?= base_url('admin/UserControllerAdmin/getData') ?>",
                data: "",
                dataType: "JSON",
                success: function (response) {
                    let html = "";
                    for (let i = 0; i < response.real.length; i++) {
                        html+=  "<tr>"+
                                    "<td>"+(i+1)+"</td>"+
                                    "<td>"+response.real[i].nama_lengkap+"</td>"+
                                    "<td>"+response.real[i].username+"</td>"+
                                    "<td>"+response.real[i].telp+"</td>"+
                                    "<td class='d-flex justify-content-around'>"+
                                        "<button onclick='editFunction("+response.real[i].id_user+")' data-toggle='modal' data-target='#editUserModal' class='btn text-primary'><i class='fa fa-edit'></i> Edit</button>"+
                                        "<button onclick='deleteFunction("+(i+1)+","+response.real[i].id_user+")' data-toggle='modal' data-target='#deleteUserModal' class='btn text-danger'><i class='fa fa-trash'></i> Delete</button>"+
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
                url: "<?= base_url('admin/UserControllerAdmin/checkActivity') ?>",
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
                url: "<?= base_url('admin/UserControllerAdmin/getDataWhere') ?>",
                data: {
                    "id":id,
                },
                dataType: "JSON",
                success: function (response) {
                    $('#userEditName').val(response.nama_lengkap);
                    $('#userEditUsername').val(response.username);
                    $('#userEditTelp').val(response.telp);
                    $('#userEditPassword').val('');
                    usernameEdit = response.username;
                }
            });
            $('#userEditSubmit').attr('dataid',id);
        }
        // CHECK USERNAME
        $('#userEditUsername').keyup(function (e) { 
            e.preventDefault();
            let usernameEdit0 = $('#userEditUsername').val();
            $.ajax({
                type: "POST",
                url: "<?= base_url('user/AuthControllerUser/registerCheckUsername') ?>",
                data: {
                    'username' : usernameEdit0 
                },
                dataType: "JSON",
                success: function (response) {
                    if(response.success == true && usernameEdit0 != usernameEdit){
                        $('#helpIdUserEditUsername').html('Username already exists !');
                        $('#helpIdUserEditUsername').removeClass('text-muted');
                        $('#helpIdUserEditUsername').addClass('text-danger');
                        $('#userEditUsername').addClass('border-danger');
                        $('#userEditUsername').addClass('text-danger');
                        registeruss="duplicate";
                    }else{
                        $('#helpIdUserEditUsername').html('Required, max 25 char');
                        $('#helpIdUserEditUsername').addClass('text-muted');
                        $('#helpIdUserEditUsername').removeClass('text-danger');
                        $('#userEditUsername').removeClass('border-danger');
                        $('#userEditUsername').removeClass('text-danger');
                        registeruss="";
                    }   
                }
            });         
        });

        // VALIDATE FORM EDIT
        function editValidation(){
            if($('#userEditName').val().length > 0 && $('#userEditName').val().length <= 25 && $('#userEditUsername').val().length > 0 && $('#userEditUsername').val().length <= 25 && $('#userEditTelp').val().length > 0 && $('#userEditTelp').val().length <= 25 && $('#userEditPassword').val().length >= 8 && $('#userEditPassword').val().length <= 25 && registeruss==""){
                $('#userEditSubmit').prop("disabled", false);                
            }
            else{
                $('#userEditSubmit').prop("disabled", true);
            }

            // Add success border
            
                // Border Name
                if($('#userEditName').val().length > 0 && $('#userEditName').val().length <= 25){
                    $('#userEditName').addClass('border-success');
                    $('#userEditName').addClass('text-success');
                }else{
                    $('#userEditName').removeClass('border-success');
                    $('#userEditName').removeClass('text-success');
                }
                // Border Username
                if($('#userEditUsername').val().length > 0 && $('#userEditUsername').val().length <= 25){
                    $('#userEditUsername').addClass('border-success');
                    $('#userEditUsername').addClass('text-success');
                }else{
                    $('#userEditUsername').removeClass('border-success');
                    $('#userEditUsername').removeClass('text-success');
                }
                // Border Telep
                if($('#userEditTelp').val().length > 0 && $('#userEditTelp').val().length <= 25){
                    $('#userEditTelp').addClass('border-success');
                    $('#userEditTelp').addClass('text-success');
                }else{
                    $('#userEditTelp').removeClass('border-success');
                    $('#userEditTelp').removeClass('text-success');
                }
                // Border Password
                if($('#userEditPassword').val().length > 0 && $('#userEditPassword').val().length >= 8 && $('#userEditPassword').val().length <= 25){
                    $('#userEditPassword').addClass('border-success');
                    $('#userEditPassword').addClass('text-success');
                }else{
                    $('#userEditPassword').removeClass('border-success');
                    $('#userEditPassword').removeClass('text-success');
                }
        }

        // CLICK SAVE IN MODAL EDIT
        $('#userEditSubmit').click(function (e) { 
            e.preventDefault();
            // DEKLARASI
            let Addname = $('#userEditName').val();
            let Addusername = $('#userEditUsername').val();
            let Addtelp = $('#userEditTelp').val();
            let Addpassword = $('#userEditPassword').val();
            let id = $('#userEditSubmit').attr('dataid');

            $.ajax({
                type: "POST",
                url: "<?= base_url('admin/UserControllerAdmin/update') ?>",
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
                    $('#userEditUsername').val('');
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
                url: "<?= base_url('admin/UserControllerAdmin/getDataWhere') ?>",
                data: {
                    "id":id,
                },
                dataType: "JSON",
                success: function (response) {
                    $('#userNama').html(response.nama_lengkap);
                    $('#userUsername').html(response.username);
                    $('#userTelp').html(response.telp);
                }
            });
            $('#userNo').html(no);
            $('#userId').attr('dataid',id);
        }

        // CLICK YES IN MODAL DELETE
        $('#userId').click(function (e) { 
            let id = $('#userId').attr('dataid');
            $.ajax({
                type: "POST",
                url: "<?= base_url('admin/UserControllerAdmin/delete') ?>",
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
                                "<button class='btn btn-success' data-toggle='modal' data-target='#addUserModal'>"+
                                    "<i class='fa fa-plus'> Add User</i>"+
                                "</button>"+
                            "</div>";
            $('#table_filter').parent().addClass('dttb');
            $('.dttb').after(btnAdd);

            // PENGATUR POSISI PAGINATION
            $('.dataTables_paginate').addClass('float-right');
        }




        // GET DATA SIDEBAR
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

        // CHEDK DATA IN TABLE tb_aktifitas
        function checkActivity(){
            $.ajax({
                type: "GET",
                url: "<?= base_url('admin/UserControllerAdmin/checkActivity') ?>",
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