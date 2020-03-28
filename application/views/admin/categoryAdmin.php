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
        // VALIDATE FORM ADD
        function addValidation(){
            if( $('#ongkirAdd').val().length > 0 && $('#categoryAddName').val().length > 0 && $('#categoryAddName').val().length <= 50){
                $('#categoryAddSubmit').prop("disabled", false);                
            }
            else{
                $('#categoryAddSubmit').prop("disabled", true);
            }

            // Add success border
                // Border Category Name
                if($('#categoryAddName').val().length > 0 && $('#categoryAddName').val().length <= 50){
                    $('#categoryAddName').addClass('border-success');
                    $('#categoryAddName').addClass('text-success');
                }else{
                    $('#categoryAddName').removeClass('border-success');
                    $('#categoryAddName').removeClass('text-success');
                }
                // Ongkir
                $("#select2-ongkirAdd-container").parent().addClass('border-success');
                $("#select2-ongkirAdd-container").parent().addClass('text-success');
        }

        // CLICK SAVE IN MODAL ADD
        $('#categoryAddSubmit').click(function (e) { 
            e.preventDefault();
            // DEKLARASI
            let Addname = $('#categoryAddName').val();
            let ongkirAdd = $('#ongkirAdd').val();


            $.ajax({
                type: "POST",
                url: "<?= base_url('admin/CategoryControllerAdmin/create') ?>",
                data: {
                    'name' : Addname,
                    'ongkir' : ongkirAdd
                },
                async : true,
                dataType: "JSON",
                success: function (response) {
                    alertSuccess();
                    getData();
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
            "<table id='table' class='mt-3 table table-striped table-bordered table-responsive-xs' cellspacing='0' width='100%'>"+
                "<thead>"+
                    "<tr>"+
                        "<th class='th-sm'>No"+
                        "</th>"+
                        "<th class='th-sm'>Category Name"+
                        "</th>"+
                        "<th class='th-sm'>Postal Fee"+
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
                        "<th class='th-sm'>Category Name"+
                        "</th>"+
                        "<th class='th-sm'>Postal Fee"+
                        "</th>"+
                        "<th class='th-sm'>Action"+
                        "</th>"+
                    "</tr>"+
                "</tfoot>"+
            "</table>";
            // GET DATA
            $.ajax({
                type: "GET",
                url: "<?= base_url('admin/CategoryControllerAdmin/getData') ?>",
                data: "",
                dataType: "JSON",
                success: function (response) {
                    let html = "";
                    let ongkir = "";
                    for (let i = 0; i < response.real.length; i++) {
                        if(response.real[i].ongkir == 0){
                            ongkir = "<span class='text-white btn btn-sm btn-danger'>No</span>";
                        }else{
                            ongkir = "<span class='text-white btn btn-sm btn-success'>Yes</span>";
                        }
                        html+=  "<tr>"+
                                    "<td>"+(i+1)+"</td>"+
                                    "<td>"+response.real[i].nama_kategori+"</td>"+
                                    "<td>"+ongkir+"</td>"+
                                    "<td class='d-flex justify-content-around'>"+
                                        "<button onclick='editFunction("+response.real[i].id_kategori+")' data-toggle='modal' data-target='#editCategoryModal' class='btn text-primary'><i class='fa fa-edit'></i> Edit</button>"+
                                        "<button onclick='deleteFunction("+(i+1)+","+response.real[i].id_kategori+")' data-toggle='modal' data-target='#deleteCategoryModal' class='btn text-danger'><i class='fa fa-trash'></i> Delete</button>"+
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
        function editFunction(id){
            $.ajax({
                type: "POST",
                url: "<?= base_url('admin/CategoryControllerAdmin/getDataWhere') ?>",
                data: {
                    "id":id,
                },
                dataType: "JSON",
                success: function (response) {
                    $('#categoryEditName').val(response.nama_kategori);
                    $('#ongkirEdit').val(response.ongkir);
                }
            });
            $('#categoryEditSubmit').attr('dataid',id);
        }

        // VALIDATE FORM EDIT
        function editValidation(){
            if($('#categoryEditName').val().length > 0 && $('#categoryEditName').val().length <= 50 && $('#ongkirEdit').val().length > 0){
                $('#categoryEditSubmit').prop("disabled", false);                
            }
            else{
                $('#categoryEditSubmit').prop("disabled", true);
            }

            // Add success border
            
                // Border Name
                if($('#categoryEditName').val().length > 0 && $('#categoryEditName').val().length <= 50){
                    $('#categoryEditName').addClass('border-success');
                    $('#categoryEditName').addClass('text-success');
                }else{
                    $('#categoryEditName').removeClass('border-success');
                    $('#categoryEditName').removeClass('text-success');
                }
                // Border Postal Fee
                if($('#ongkirEdit').val().length > 0 && $('#ongkirEdit').val().length <= 25){
                    $("#select2-ongkirEdit-container").parent().addClass('border-success');
                    $("#select2-ongkirEdit-container").parent().addClass('text-success');
                }else{
                    $("#select2-ongkirEdit-container").parent().removeClass('border-success');
                    $("#select2-ongkirEdit-container").parent().removeClass('text-success');
                }
        }

        // CLICK SAVE IN MODAL EDIT
        $('#categoryEditSubmit').click(function (e) { 
            e.preventDefault();
            // DEKLARASI
            let editName = $('#categoryEditName').val();
            let ongkirEdit = $('#ongkirEdit').val();
            let id = $('#categoryEditSubmit').attr('dataid');
            $.ajax({
                type: "POST",
                url: "<?= base_url('admin/CategoryControllerAdmin/update') ?>",
                data: {
                    'id' : id,
                    'nama' : editName,
                    'ongkir' : ongkirEdit
                },
                async : true,
                dataType: "JSON",
                success: function (response) {
                    alertSuccess();
                    getData();
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
            let ongkir="";
            $.ajax({
                type: "POST",
                url: "<?= base_url('admin/CategoryControllerAdmin/getDataWhere') ?>",
                data: {
                    "id":id,
                },
                dataType: "JSON",
                success: function (response) {
                    if(response.ongkir == 0){
                        ongkir = "<span class='w-25 text-white btn btn-sm btn-danger'>No</span>";
                    }else{
                        ongkir = "<span class='w-25 text-white btn btn-sm btn-success'>Yes</span>";
                    }
                    $('#categoryNama').html(response.nama_kategori);
                    $('#categoryPostalFee').html(ongkir);
                }
            });
            $('#categoryNo').html(no);
            $('#categoryId').attr('dataid',id);
        }

        // CLICK YES IN MODAL DELETE
        $('#categoryId').click(function (e) { 
            let id = $('#categoryId').attr('dataid');
            $.ajax({
                type: "POST",
                url: "<?= base_url('admin/CategoryControllerAdmin/delete') ?>",
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
                                "<button class='btn btn-success' data-toggle='modal' data-target='#addCategoryModal'>"+
                                    "<i class='fa fa-plus'> Add Category</i>"+
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