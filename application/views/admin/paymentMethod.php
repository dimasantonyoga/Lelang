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


        // ============================================= //
        // ========== START CREATE FUNCTION ============ //
        // ============================================= //
        // VALIDATE FORM ADD
        function addValidation(){
            if( $('#addBankName').val().length > 0 && $('#addBankName').val().length <= 100 && $('#addPenerimaName').val().length > 0 && $('#addPenerimaName').val().length <= 50 && $('#addAccountNumber').val().length > 0 && $('#addAccountNumber').val().length <= 25){
                $('#addPaymentSubmit').prop("disabled", false);                
            }
            else{
                $('#addPaymentSubmit').prop("disabled", true);
            }

            // Add success border
                if($('#addBankName').val().length > 0 && $('#addBankName').val().length <= 100){
                    $('#addBankName').addClass('border-success');
                    $('#addBankName').addClass('text-success');
                }else{
                    $('#addBankName').removeClass('border-success');
                    $('#addBankName').removeClass('text-success');
                }
                if($('#addPenerimaName').val().length > 0 && $('#addPenerimaName').val().length <= 50){
                    $('#addPenerimaName').addClass('border-success');
                    $('#addPenerimaName').addClass('text-success');
                }else{
                    $('#addPenerimaName').removeClass('border-success');
                    $('#addPenerimaName').removeClass('text-success');
                }
                if($('#addAccountNumber').val().length > 0 && $('#addAccountNumber').val().length <= 25){
                    $('#addAccountNumber').addClass('border-success');
                    $('#addAccountNumber').addClass('text-success');
                }else{
                    $('#addAccountNumber').removeClass('border-success');
                    $('#addAccountNumber').removeClass('text-success');
                }
        }

        // CLICK SAVE IN MODAL ADD
        $('#addPaymentSubmit').click(function (e) { 
            e.preventDefault();
            // DEKLARASI
            let bank = $('#addBankName').val();
            let nama = $('#addPenerimaName').val();
            let rek = $('#addAccountNumber').val();

            $.ajax({
                type: "POST",
                url: "<?= base_url('admin/PaymentMethodControllerAdmin/create') ?>",
                data: {
                    'bank' : bank,
                    'nama' : nama,
                    'rek'  : rek
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
            "<table id='table' class='mt-3 table table-striped table-bordered table-responsive-sm' cellspacing='0' width='100%'>"+
                "<thead>"+
                    "<tr>"+
                        "<th class='th-sm'>No"+
                        "</th>"+
                        "<th class='th-sm'>Bank Name"+
                        "</th>"+
                        "<th class='th-sm'>Recipient Name"+
                        "</th>"+
                        "<th class='th-sm'>Account Number"+
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
                        "<th class='th-sm'>Bank Name"+
                        "</th>"+
                        "<th class='th-sm'>Recipient Name"+
                        "</th>"+
                        "<th class='th-sm'>Account Number"+
                        "</th>"+
                        "<th class='th-sm'>Action"+
                        "</th>"+
                    "</tr>"+
                "</tfoot>"+
            "</table>";
            // GET DATA
            $.ajax({
                type: "GET",
                url: "<?= base_url('admin/PaymentMethodControllerAdmin/getData') ?>",
                data: "",
                dataType: "JSON",
                success: function (response) {
                    let html = "";
                    for (let i = 0; i < response.real.length; i++) {
                        html+=  "<tr>"+
                                    "<td>"+(i+1)+"</td>"+
                                    "<td>"+response.real[i].nama_bank+"</td>"+
                                    "<td>"+response.real[i].nama_penerima+"</td>"+
                                    "<td>"+response.real[i].rekening+"</td>"+
                                    "<td class='d-flex justify-content-around'>"+
                                        "<button onclick='editFunction("+response.real[i].id_metode+")' data-toggle='modal' data-target='#editPayment' class='btn text-primary'><i class='fa fa-edit'></i> Edit</button>"+
                                        "<button onclick='deleteFunction("+(i+1)+","+response.real[i].id_metode+")' data-toggle='modal' data-target='#deletePayment' class='btn text-danger'><i class='fa fa-trash'></i> Delete</button>"+
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
                url: "<?= base_url('admin/PaymentMethodControllerAdmin/getDataWhere') ?>",
                data: {
                    "id":id,
                },
                dataType: "JSON",
                success: function (response) {
                    $('#editBankName').val(response.nama_bank);
                    $('#editPenerimaName').val(response.nama_penerima);
                    $('#editAccountNumber').val(response.rekening);
                    $('#editPaymentSubmit').attr('dataid',id);
                }
            });
        }

        // VALIDATE FORM EDIT
        function editValidation(){
            if( $('#editBankName').val().length > 0 && $('#editBankName').val().length <= 100 && $('#editPenerimaName').val().length > 0 && $('#editPenerimaName').val().length <= 50 && $('#editAccountNumber').val().length > 0 && $('#editAccountNumber').val().length <= 25){
                $('#editPaymentSubmit').prop("disabled", false);                
            }
            else{
                $('#editPaymentSubmit').prop("disabled", true);
            }

            // Add success border
                if($('#editBankName').val().length > 0 && $('#editBankName').val().length <= 100){
                    $('#editBankName').addClass('border-success');
                    $('#editBankName').addClass('text-success');
                }else{
                    $('#editBankName').removeClass('border-success');
                    $('#editBankName').removeClass('text-success');
                }
                if($('#editPenerimaName').val().length > 0 && $('#editPenerimaName').val().length <= 50){
                    $('#editPenerimaName').addClass('border-success');
                    $('#editPenerimaName').addClass('text-success');
                }else{
                    $('#editPenerimaName').removeClass('border-success');
                    $('#editPenerimaName').removeClass('text-success');
                }
                if($('#editAccountNumber').val().length > 0 && $('#editAccountNumber').val().length <= 25){
                    $('#editAccountNumber').addClass('border-success');
                    $('#editAccountNumber').addClass('text-success');
                }else{
                    $('#editAccountNumber').removeClass('border-success');
                    $('#editAccountNumber').removeClass('text-success');
                }
        }

        // CLICK SAVE IN MODAL EDIT
        $('#editPaymentSubmit').click(function (e) { 
            e.preventDefault();
            // DEKLARASI
            let bank = $('#editBankName').val();
            let nama = $('#editPenerimaName').val();
            let rek = $('#editAccountNumber').val();
            let id = $('#editPaymentSubmit').attr('dataid');
            $.ajax({
                type: "POST",
                url: "<?= base_url('admin/PaymentMethodControllerAdmin/update') ?>",
                data: {
                    'id' : id,
                    'bank' : bank,
                    'nama' : nama,
                    'rek'  : rek,
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
            $.ajax({
                type: "POST",
                url: "<?= base_url('admin/PaymentMethodControllerAdmin/getDataWhere') ?>",
                data: {
                    "id":id,
                },
                dataType: "JSON",
                success: function (response) {                    
                    $('#paymentBank').html(response.nama_bank);
                    $('#paymentName').html(response.nama_penerima);
                    $('#paymentNumber').html(response.rekening);
                }
            });
            $('#paymentNo').html(no);
            $('#deletePaymentButton').attr('dataid',id);
        }

        // CLICK YES IN MODAL DELETE
        $('#deletePaymentButton').click(function (e) { 
            let id = $('#deletePaymentButton').attr('dataid');
            $.ajax({
                type: "POST",
                url: "<?= base_url('admin/PaymentMethodControllerAdmin/delete') ?>",
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
                                "<button class='py-2 btn-sm btn btn-success' data-toggle='modal' data-target='#addPayment'>"+
                                    "<i class='fa fa-plus'></i> Add Payment Method"+
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