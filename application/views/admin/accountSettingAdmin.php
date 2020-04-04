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
            <div class="container-fluid px-3" id="container1" style="width:95%">
                <div class="row mt-n4">
                    <div class="col-lg-4 col-md-6 px-4 mt-4 d-flex align-items-stretch">
                        <div class="row px-3 " id="album" style="overflow:hidden">
                            <div id="profile" style="border-radius:8px" class="col-lg-12 py-5 text-center bg-white py-3 px-4 shadow w-100 ">
                                <img src="<?= base_url('assets/img/profile/'.$data->foto) ?>" id="detailImage" class="mt-3 w-50 rounded-circle shadow" alt="">
                                <h6 id="detailLevel" class="mt-4" style="color: #999"><?= $data->level ?></h6>
                                <h4 id="detailName"><?= $data->nama_petugas ?></h4>
                                <button type="button" id="hideProfile" class="mb-3 btn btn-primary mt-3 rounded-pill w-75">Change Photo</button>
                            </div>
                            <div id="changeImage" class="col-lg-12 bg-white shadow text-center py-5" style="border-radius:8px">
                                <!-- <div class="w-100 d-flex justify-content-center" onmouseover="$('.hover').width($('#viewImage').width());$('.hover').height($('#viewImage').height());$( '.hover' ).css( 'visibility', 'visible' )" onmouseout="$( '.hover' ).css( 'visibility', 'hidden' )"> -->
                                    <img id="viewImage" id="changeImage" src="" style='width:125px;height:125px;border-radius:50%' class="shadow" alt="">
                                    <div onclick="$('#foto').click()" class="hover position-absolute d-flex align-items-center rounded-circle my-5" style="top:0;font-size:20px;color : gray;cursor: pointer;z-index:100;background: rgba(0, 0, 0, 0.4);visibility: hidden;">
                                        <div class="text-center text-light py-2 w-100 rounded-circle">
                                            <i class="fa fa-edit"></i> <br> edit
                                        </div>
                                    </div>
                                <!-- </div> -->
                                <form id="submitImage" enctype="multipart/form-data">
                                    <input type="file" name="file" id="foto" class="d-none">
                                    <input type="hidden" name="cekImage" id="cekImage">
                                    <button type="submit" id="hideProfile" class="btn btn-primary mt-5 rounded-pill w-50">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 px-4 d-flex align-items-stretch">
                        <div id="editProfile" class="bg-white py-3 px-4 shadow w-100 mt-4" style="border-radius:8px">
                            <h3>Edit Profile</h3>
                            <hr>
                            <div class="row">
                                <div class="col-lg-12">
                                    <!-- <form action="" id="formEditProfile"> -->
                                        <div class="form-group">
                                        <label for="">Name</label>
                                        <input type="text" value="<?= $data->nama_petugas?>"
                                            class="form-control border-success text-success" name="" id="nama_petugas" aria-describedby="helpId" placeholder="">
                                        <small id="helpId" class="form-text text-muted">Required, max 25 char</small>
                                        </div>
                                        <div class="form-group">
                                        <label for="">Username</label>
                                        <input type="text" value="<?= $data->username?>"
                                            class="form-control border-success text-success" name="" id="username" aria-describedby="helpId" placeholder="">
                                        <small id="helpIdUsername" class="form-text text-muted">Required, max 25 char</small>
                                        </div>
                                        <button type="button" id="buttonEditProfile" class="btn btn-primary float-right">Submit</button>
                                    <!-- </form> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 px-4 d-flex align-items-stretch">
                        <div class="bg-white py-3 px-4 mt-4 shadow w-100" style="border-radius:8px">
                            <h3>Change Password</h3>
                            <hr>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                    <label for="">Old Password</label>
                                    <input type="password"
                                        class="form-control" name="" id="oldPassword" aria-describedby="helpId" placeholder="">
                                    </div>
                                    <div class="form-group">
                                    <label for="">New Password</label>
                                    <input type="password"
                                        class="form-control" name="" id="newPassword" aria-describedby="helpId" placeholder="">
                                    </div>
                                    <div class="form-group">
                                    <label for="">Confirm Password</label>
                                    <input type="password"
                                        class="form-control" name="" id="confirmPassword" aria-describedby="helpId" placeholder="">
                                    </div>
                                    <button type="button" id="submitPassword" class="btn btn-primary float-right">Submit</button>
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
    <!-- ===== END FOOT ===== -->

    <!-- ===== START JAVASCRIPT ===== -->
    <script>
        // DEKLARASI
        let count =0;
        let count2 =0;
        let provileHeight = $("#profile").height();
        
        $("#album").css({"max-height":(provileHeight+95)});
        // Hide Profile
        $( "#hideProfile" ).click(function() {
            $( "#profile" ).animate({
                opacity: 0.10,
                top: "-="+(provileHeight+140),
            }, 1500, function() {
                // Animation complete.
            });
            $( "#changeImage" ).animate({
                opacity: 100,
                top: "-="+(provileHeight+100),
            }, 1500, function() {
                $("#foto").click();
            });
        });

        // =========================================== //
        // ========== START READ FUNCTION ============ //
        // =========================================== // 
        function getData(){
            let base = "<?= base_url(); ?>";
            // detailImage
            // GET DATA
            $.ajax({
                type: "GET",
                url: "<?= base_url('admin/AccountSettingControllerAdmin/getData') ?>",
                data: "",
                dataType: "JSON",
                success: function (response) {
                    
                    $("#detailImage").attr("src", base+"assets/img/profile/"+response.foto);
                    $("#detailLevel").html(response.level);
                    $("#detailName").html(response.nama_petugas);

                    $("#nama_petugas").val(response.nama_petugas);
                    $("#username").val(response.username);

                    $("#viewImage").attr("src", base+"assets/img/profile/"+response.foto);

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

        // Foto
        $("#foto").change(function (e) { 
            viewImage(this);
            $("#cekImage").val("ada");
        });
        function viewImage(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $("#viewImage").attr("src", e.target.result);
                }
                
                reader.readAsDataURL(input.files[0]);
            }
        }

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
        $('#submitImage').submit(function(e){
            e.preventDefault();
            // SHOW PROFILE
            // DEKLARASI
            let form_data = new FormData($(this)[0]);

            $.ajax({
                type: "POST",
                url: "<?= base_url('admin/AccountSettingControllerAdmin/updateFoto') ?>",
                data: form_data,
                processData: false,
                contentType: false,
                async : true,
                dataType: "JSON",
                success: function (response) {
                    Swal.fire({
                        position: 'center-center',
                        icon: 'success',
                        title: 'Seccess',
                        showConfirmButton: true,
                        timerProgressBar: true,
                        timer: 1500
                    });
                    setTimeout(() => {
                        Swal.close();
                        // SHOW PROFILE
                        $( "#changeImage" ).animate({
                            opacity: 0.10,
                            top: "+="+(provileHeight+100),
                        }, 1500, function() {
                            
                        });
                        $( "#profile" ).animate({
                            opacity: 100,
                            top: "+="+(provileHeight+140),
                        }, 1500, function() {
                            // Animation complete.
                        });
                    }, 1600);
                    // function () {
                    
                    // };
                    
                }
            });

        });

        let usernameCheck = "true";
        function validation(){
            // Edit Profile
            // nama_petugas,username
            if($('#nama_petugas').val().length > 0 && $('#nama_petugas').val().length <= 25 && $('#username').val().length > 0 && $('#username').val().length <= 25){
                if(usernameCheck == "true"){
                    $('#buttonEditProfile').prop("disabled", false);                
                }else{
                    $('#buttonEditProfile').prop("disabled", true);
                }
            }
            else{
                $('#buttonEditProfile').prop("disabled", true);
            }

            // Border Success
            // Border Name
            if($('#nama_petugas').val().length > 0 && $('#nama_petugas').val().length <= 25){
                $('#nama_petugas').addClass('border-success');
                $('#nama_petugas').addClass('text-success');
            }else{
                $('#nama_petugas').removeClass('border-success');
                $('#nama_petugas').removeClass('text-success');
            }
            // Username
            if($('#username').val().length > 0 && $('#username').val().length <= 25){
                $('#username').addClass('border-success');
                $('#username').addClass('text-success');
            }else{
                $('#username').removeClass('border-success');
                $('#username').removeClass('text-success');
            }

            // Change password
            let old = $("#oldPassword").val(); 
            let newp = $("#newPassword").val(); 
            let confirm = $("#confirmPassword").val();
            if(old.length >= 8 && newp.length >= 8 && confirm.length >= 8 && newp == confirm ){
                $('#submitPassword').prop("disabled", false);                
            }else{
                $('#submitPassword').prop("disabled", true);

            }

            // Add border
            if(old == '' || old.length < 8 ){
                $('#oldPassword').removeClass('border-warning');
                $('#oldPassword').removeClass('text-warning');
            }else{
                $('#oldPassword').removeClass('border-danger');
                $('#oldPassword').removeClass('text-danger');
                $('#oldPassword').removeClass('border-success');
                $('#oldPassword').removeClass('text-success');
                $('#oldPassword').addClass('border-warning');
                $('#oldPassword').addClass('text-warning');
            }
            if(newp == '' || newp.length < 8 ){
                $('#newPassword').removeClass('border-success');
                $('#newPassword').removeClass('text-success');
            }else{
                $('#newPassword').removeClass('border-danger');
                $('#newPassword').removeClass('text-danger');
                $('#newPassword').addClass('border-success');
                $('#newPassword').addClass('text-success');                
            }

            if(confirm == '' || confirm.length < 8 || newp != confirm ){
                $('#confirmPassword').removeClass('border-success');
                $('#confirmPassword').removeClass('text-success');  
            }else{
                $('#confirmPassword').removeClass('border-danger');
                $('#confirmPassword').removeClass('text-danger');
                $('#confirmPassword').addClass('border-success');
                $('#confirmPassword').addClass('text-success');                
            }
        }
        // onkey username
        $("#username").keyup(function (e) { 
            
            let username = $("#username").val();
            $.ajax({
                type: "POST",
                url: "<?= base_url('admin/AccountSettingControllerAdmin/usernameCek') ?>",
                data: {
                    "username":username
                },
                dataType: "JSON",
                success: function (response) {
                    if(response > 0){
                        usernameCheck = "false";
                        $('#username').removeClass('border-success');
                        $('#username').removeClass('text-success');
                        $('#username').addClass('border-danger');
                        $('#username').addClass('text-danger');
                        $("#helpIdUsername").removeClass("text-muted");
                        $("#helpIdUsername").addClass("text-danger");
                        $("#helpIdUsername").html("Username already exists !");
                    }else{
                        usernameCheck = "true";
                        $('#username').removeClass('border-danger');
                        $('#username').removeClass('text-danger');
                        $('#username').addClass('border-success');
                        $("#helpIdUsername").addClass("text-muted");
                        $('#username').addClass('text-success');
                        $("#helpIdUsername").removeClass("text-danger");
                        $("#helpIdUsername").html("Required, max 25 char !");
                    }
                }
            });
        });


        // CLICK SAVE PROFILE
        $('#buttonEditProfile').click(function() { 
            // DEKLARASI
            let name = $('#nama_petugas').val();
            let username = $('#username').val();
            $.ajax({
                type: "POST",
                url: "<?= base_url('admin/AccountSettingControllerAdmin/updateProfile') ?>",
                data: {
                    'nama_petugas' : name,
                    'username' : username,
                },
                async : true,
                dataType: "JSON",
                success: function (response) {
                    alertSuccess();
                    getData();
                }
            });

        });

        // Change Password
        $("#submitPassword").click(function (e) { 
            e.preventDefault();
            let oldp = $("#oldPassword").val(); 
            let newpp = $("#newPassword").val(); 
            let confirmp = $("#confirmPassword").val();
            $.ajax({
                type: "POST",
                url: "<?= base_url('admin/AccountSettingControllerAdmin/passwordCek') ?>",
                data: {
                    "password":oldp
                },
                dataType: "JSON",
                success: function (response) {
                    if(response > 0){
                        $.ajax({
                        type: "POST",
                        url: "<?= base_url('admin/AccountSettingControllerAdmin/passwordUpdate') ?>",
                        data: {
                            "password":newpp
                        },
                        dataType: "JSON",
                        success: function (response) {
                            Swal.fire({
                                position: 'center-center',
                                icon: 'success',
                                title: 'Your password has been successfully changed',
                                showConfirmButton: true,
                                timer: 3000
                            })
                        }
                     });
                    }else{

                        const Toast = Swal.mixin({
                        toast: false,
                        position: 'center-center',
                        showConfirmButton: true,
                        timer: 3000,
                        timerProgressBar: true,
                        onOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer),
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                        });

                        Toast.fire({
                        icon: 'error',
                        title: 'Your old password is incorrect'
                        });
                    }
                }
            });
        });
        // =========================================== //
        // ========== END UPDATE FUNCTION ============ //
        // =========================================== //

        // **************** OTHER FUNCTION ****************
        

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
            validation();
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